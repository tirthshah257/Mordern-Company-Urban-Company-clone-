<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingAcceptance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Service;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        if (session()->has('admin_email'))
            return view('Admin-layout.viewBooking')->with(compact('bookings'));
        else
            return redirect('/admin');
        //dd($services->toArray());

    }


    public function userBookings()
    {
        $userId=session()->get('user_id');
        if (session()->has('user_id')) {
            $userId = session()->get('user_id');
            $services = Service::all();
            $bookings = Booking::select(
                'bookings.booking_id',
                's.service_type',
                'bookings.booking_date',
                'bookings.booking_time',
                'bookings.payment_mode',
                'bookings.Status'
            )
                ->join('services AS s', 'bookings.service_id', '=', 's.service_id')
                ->where('bookings.user_id',$userId)
                ->get();
            return view('User-layout.MyBooking')->with(compact('bookings', 'services'));
        } else {
            return redirect('/');
        }
    }


    // service_id	user_id	booking_date	booking_time	payment_mode
    public function BookNow(Request $request)
    {
        // Create a new Booking instance
        $booking = new Booking;

        // Assign values from the request directly to the Booking instance
        $booking->service_id = $request->service_id;
        $booking->user_id = $request->user_id;
        $bookingDateTime = $request->booking_date . ' ' . $request->booking_time;
        $carbonBookingDateTime = Carbon::parse($bookingDateTime);
        $booking->booking_date = $carbonBookingDateTime;
        $booking->booking_time = $request->booking_time;
        $booking->payment_mode = $request->payment_mode;
        $booking->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $bookings = Booking::find($id);
        if (is_null($bookings)) {
            return redirect()->route('/');
        }
        return view('User-layout.editBooking', compact('bookings'));
    }

    public function update(Request $request, $id)
    {
        $pastBooking = Booking::find($id);
        $pastBookingacc = BookingAcceptance::where('booking_id', $id)->delete();
        //dd($pastBookingacc);
    
        if (!$pastBooking) {
            return redirect('/')->with('error', 'Booking not found');
        }
    
        // Update the existing booking
        $pastBooking->Updated = 1;
        $pastBooking->save();
    
        $pastBooking->user_id = session()->get('user_id');
        $pastBooking->service_id = $request->service_id;
        $pastBooking->booking_date = $request->booking_date;
        $pastBooking->booking_time = $request->booking_time;
        $pastBooking->Updated = 0;
        $pastBooking->Status = 0;
    
        // Save the new booking
        $pastBooking->save();
    
        return redirect('/')->with('success', 'Booking updated successfully');
    }
}
