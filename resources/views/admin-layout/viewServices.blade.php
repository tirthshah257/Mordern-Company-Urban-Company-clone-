@extends('admin-layout.header')
@push('title')
<title>Mordern-Company | View services </title>
@endpush
@section('main-area')
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-card p-0">
        <h6 class="card-title card-padding pb-0">services</h6>
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th class="text-left">category_id</th>
                        <th>Service_id</th>
                        <th>Service type</th>
                        <th>desc</th>
                        <th>Price</th>
                        <th>provider_id</th>
                        <th>Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>
                            {{$service->category_id}}
                        </td>
                    
                        <td>
                            {{$service->service_id}}
                        </td>
                        <td>
                            {{$service->service_type}}
                        </td>
                        <td>
                            {{$service->description}}
                        </td>
                        <td>
                            {{$service->price}}
                        </td>
                        <td>
                            {{$service->provider_id}}
                        </td>
                        <td>
                            @if($service->isActive == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection