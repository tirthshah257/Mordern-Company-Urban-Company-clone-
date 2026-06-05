<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\BookingAcceptance;

class AcceptanceController extends Controller
{
    public function Accept($id)
    {
        $bookings = Booking::find($id);
        if (is_null($bookings)) {
            return redirect()->route('viewUser');
        }
        return view('User-layout.editUser', compact('bookings'));
    }

    public function update(Request $request, $id)
    {
        $bookings = Booking::where('booking_id', $id)->first();
        
        // Update the Status field of the Booking record
        $bookings->Status = 1;
        $bookings->save();

        $accBookings = new BookingAcceptance;

        $accBookings->booking_id = $bookings->booking_id;
        $accBookings->user_id = $bookings->user_id;
        $accBookings->service_id = $bookings->service_id;
        $accBookings->provider_id = $request->provider_id;
        $accBookings->Status = 1;

        $accBookings->save();

        return redirect('/AcceptServices')->with('success', 'User updated successfully');
    }

    public function index(Request $request)
    {
        // Retrieve provider ID from session
        $providerId = session()->get('provider_id');

        // Query BookingAcceptance records where 'provider_id' matches the stored value
        $Accepts = BookingAcceptance::from('bookingAcceptance AS ba')
            ->join('user_master AS u', 'ba.user_id', '=', 'u.user_id')
            ->join('services AS s', 'ba.service_id', '=', 's.service_id')
            ->select('ba.*', 'u.first_name AS user_first_name', 'u.last_name AS user_last_name', 's.service_type')
            ->where('ba.provider_id', $providerId)
            ->get();

        $bookings = Booking::select(
            'bookings.booking_id',
            'u.first_name AS user_first_name',
            'u.last_name AS user_last_name',
            's.service_type',
            'bookings.booking_date',
            'bookings.booking_time',
            'bookings.payment_mode',
            'bookings.Status'
        )
            ->join('services AS s', 'bookings.service_id', '=', 's.service_id')
            ->join('user_master AS u', 'bookings.user_id', '=', 'u.user_id')
            ->join('service_providers AS sp', 's.provider_id', '=', 'sp.provider_id')
            ->where('sp.provider_id', $providerId)
            ->where('bookings.Status', 0)  // Corrected to use 'bookings.Status' to reference the column
            ->whereColumn('s.category_id', 'sp.category_id') // Ensure correct usage of category_id columns
            ->get();
        
        if (session()->has('user_type') == "Service Provider") {
            return view('User-layout.Customers')->with(compact('bookings', 'Accepts'));
        } else
            return redirect('/');
    }
}
