@extends('admin-layout.header')
@push('title')
<title>Mordern-Company | View Categories </title>
@endpush
@section('main-area')


<div class="container mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <button class="btn btn-success btn-sm btn-block" type="button">Add Category</button>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">Category</h6>
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th>Category Name</th>
                        <th>isActive</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- booking_id	user_id	service_id	provider_id	booking_date	booking_time	payment_mode -->
                <tbody>
                    @foreach($Cats as $Cat)
                    <tr>
                        <td>
                            {{$Cat->category_id}}
                        </td>
                        <td>
                            {{$Cat->category_name}}
                        </td>
                        <td>
                            @if($Cat->isActive == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-warning edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$Cat->category_id}}" data-user-id="">Edit</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>


<!--Start Of Edit Model-->
@foreach($Cats as $Cat)
<div class="modal fade" id="exampleModal1{{$Cat->category_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/addCategory" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="booking_date" class="form-label">Category</label>
                        <input type="text   " class="form-control" id="booking_date" name="category_name" value="{{$Cat->category_name}}" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--End Of Edit Model-->



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/addCategory" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="booking_date" class="form-label">New Category</label>
                        <input type="text   " class="form-control" id="booking_date" name="category_name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection