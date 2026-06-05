@extends('admin-layout.header')

@push('title')
<title>Modern-Company | View Users</title>
@endpush

@section('main-area')
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Users</h6>
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th class="text-left">user_id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>User Type</th>
                        <th>isActive</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->user_type}}</td>
                        <td>
                            @if($user->isActive == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->user_id}}" data-user-id="{{$user->user_id}}">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach($users as $user)
<div class="modal fade" id="exampleModal{{$user->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$user->user_id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{$user->user_id}}">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin-layout.updateUser', ['id' => $user->user_id]) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name </label>
                        <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="booking_time" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="payment_mode" name="last_name" value="{{$user->last_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="booking_time" class="form-label">Email </label>
                        <input type="text" class="form-control" id="payment_mode" name="email" value="{{$user->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="booking_time" class="form-label">Ph. No</label>
                        <input type="text" class="form-control" id="payment_mode" name="phone_number" value="{{$user->phone_number}}">
                    </div>
                    @if($user->user_type == "Service Provider")
                    <div class="form-floating mb-3 d-none">
                        <label for="user_type" class="form-label">User Type</label>
                        <select class="form-select" id="user_type" name="user_type">
                            <option value="Customer" @if($user->user_type == "Customer") selected @endif>Customer</option>
                            <option value="Service Provider" @if($user->user_type == "Service Provider") selected @endif>Service Provider</option>
                        </select>
                    </div>
                    @else
                    <div class="form-floating mb-3">
                        <label for="user_type" class="form-label">User Type</label>
                        <select class="form-select" id="user_type" name="user_type">
                            <option value="Customer" @if($user->user_type == "Customer") selected @endif>Customer</option>
                            <option value="Service Provider" @if($user->user_type == "Service Provider") selected @endif>Service Provider</option>
                        </select>
                    </div>
                    @endif


                    <div class="form-floating mb-3">
                        <select class="form-select" name="isActive" value="{{$user->isActive}}">
                            <option value="1" @if($user->isActive == 1) selected @endif >Active</option>
                            <option value="0" @if($user->isActive == 0) selected @endif >Inactive</option>
                        </select>
                        <label class="form-label">User Type</label>
                    </div>
                    <input type="hidden" name="user_id" id="editUserId">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Listen for click event on edit button with class 'edit-btn'
        $('.edit-btn').click(function() {
            // Get the user_id value from data-user-id attribute
            var userId = $(this).data('user-id');

            // Set the user_id value in the hidden input field in the modal
            $('#exampleModal' + userId + ' #editUserId').val(userId);
        });
    });
</script>
@endpush