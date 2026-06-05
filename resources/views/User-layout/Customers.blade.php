@extends('User-layout.header_User')

@section('header-part')
<!-- Hero 4 - Bootstrap Brain Component -->
<section class="bg-primary" data-bs-theme="dark">
    <div class="container-fluid overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
                <!-- Content for Hero Section (if any) -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('User-main')

<!-- Main -->
<main id="main">
    <section class="bg-primary p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Content for Main Section (if any) -->
            </div>
        </div>
    </section>

    <!-- Bookings Table -->
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="card-title mb-3">Bookings</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Booking ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Service</th>
                                <th scope="col">Service Date</th>
                                <th scope="col">Service Time</th>
                                <th scope="col">Payment Mode</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->booking_id }}</td>
                                <td>{{ $booking->user_first_name }} {{ $booking->user_last_name }}</td>
                                <td>{{ $booking->service_type }}</td>
                                <td>{{ $booking->booking_date }}</td>
                                <td>{{ $booking->booking_time }}</td>
                                <td>{{ $booking->payment_mode }}</td>
                                <td>
                                    @if($booking->Status == 0)
                                    <span class="badge bg-danger">Pending</span>
                                    @else
                                    <span class="badge bg-sucess">Accepted</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$booking->booking_id}}" data-booking_id="{{$booking->booking_id}}">
                                        Accept
                                    </button>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h6 class="card-title mb-3">Booking Accepted</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">Service ID</th>
                                <th scope="col">Provider Id</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Accepts as $acc)
                            <tr>
                                <td>{{ $acc->user_first_name }} {{ $acc->user_last_name }}</td>
                                <td>{{ $acc->service_type }}</td>
                                <td>{{ $acc->provider_id }}</td>
                                <td>
                                    @if($acc->Status == 1)
                                    <span class="badge bg-success">Accepted</span>
                                    @else
                                    <span class="badge bg-danger">Pending</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@foreach($bookings as $booking)
<div class="modal fade" id="exampleModal{{$booking->booking_id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$booking->booking_id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('User-layout.AcceptCos', ['id' => $booking->booking_id]) }}" method="post">
                    @csrf
                    <input type="text" name="booking_Id" id="booking_Id">
                    <input type="text" name="provider_id" value="{{session()->get('provider_id')}}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Accept</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Footer 4 - Bootstrap Brain Component -->
@endsection

@section('footer-scripts')
<!-- Bootstrap Bundle JS -->
<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('User_assets/controller/palette-bsb.js') }}"></script>
@endsection
@push('User-scripts')
<!-- jQuery (include before Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap Bundle JS (include after jQuery) -->
<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript (include after jQuery and Bootstrap) -->
<script src="{{ asset('User_assets/controller/palette-bsb.js') }}"></script>
<script>
    $(document).ready(function() {
        // Listen for click event on edit button with class 'edit-btn'
        $('.edit-btn').click(function() {
            // Get the booking_id value from data-booking_id attribute
            var booking_Id = $(this).data('booking_id');

            // Set the booking_id value in the hidden input field in the modal
            $('#exampleModal' + booking_Id + ' #booking_Id').val(booking_Id);
        });
    });
</script>


@endpush