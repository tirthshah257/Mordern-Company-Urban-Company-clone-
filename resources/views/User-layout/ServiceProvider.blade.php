@extends('User-layout.header_User')

@section('User-main')
    <section class="bg-primary py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <!-- Left Column (Text and Illustration) -->
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="d-flex justify-content-center text-bg-primary">
                        <div class="col-12 col-xl-9">
                            <hr class="border-primary-subtle mb-4">
                            <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                            <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial intelligence.</p>
                            <div class="text-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                    <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Service Provider Details Form) -->
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="mb-5">
                                <h3>Service Provider Details</h3>
                            </div>
                            <form action="/postProviderInfo" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="category_id" id="userType" required>
                                        @foreach($Cats as $Cat)
                                            <option value="{{$Cat->category_id}}">{{$Cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="userType" class="form-label">Category</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="availability" placeholder="10:00 AM TO 10:00 PM" required>
                                    <label for="description" class="form-label">Availability</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="certi" placeholder="Certified Cleaner" required>
                                    <label for="price" class="form-label">Certifications</label>
                                </div>

                                <input type="hidden" class="form-control" name="user_id" value="{{session()->get('user_id')}}" required>

                                <div class="d-grid">
                                    <button class="btn bsb-btn-2xl btn-primary" type="submit">Add Service</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Optional JavaScript -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap Bundle JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="./User_assets/controller/palette-bsb.js"></script>
