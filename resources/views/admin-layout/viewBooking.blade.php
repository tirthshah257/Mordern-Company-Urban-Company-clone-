@extends('admin-layout.header')
@push('title')
<title>Mordern-Company | View bookings </title>
@endpush
@section('main-area')
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">bookings</h6>
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th class="text-left">booking_id</th>
                        <th>user id</th>
                        <th>service_id</th>
                        <th>booking_date</th>
                        <th>booking_time</th>
                        <th>payment_mode</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- booking_id	user_id	service_id	provider_id	booking_date	booking_time	payment_mode -->
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>
                            {{$booking->booking_id}}
                        </td>
                        <td>
                            {{$booking->user_id}}
                        </td>
                        <td>
                            {{$booking->service_id}}
                        </td>
                        <td>
                            {{$booking->booking_date}}
                        </td>
                        <td>
                            {{$booking->booking_time}}
                        </td>
                        <td>
                            {{$booking->payment_mode}}
                        </td>
                        <td>
                            @if($booking->Status == 0)
                            <span class="badge bg-danger">Pending</span>
                            @else
                            <span class="badge bg-success">Accepted</span>
                            @endif

                        </td>
                        <td>
                            <button class="btn btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-user-id="">Edit</button>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection