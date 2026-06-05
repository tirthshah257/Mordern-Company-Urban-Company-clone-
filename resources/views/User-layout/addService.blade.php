<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title, Description, and Author -->
    <title>Palette - Free Bootstrap 5 Agency Template</title>
    <meta name="description" content="Palette is a Free Bootstrap 5 Agency Template.">
    <meta name="author" content="BootstrapBrain">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-6/assets/css/login-6.css">

    <!-- Favicon and Touch Icons -->
    <link rel="icon" type="image/png" sizes="512x512" href="./User_assets/favicon/favicon-512x512.png">

    <!-- Google Fonts Files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="./User_assets/css/palette-bsb.css">

    <!-- BSB Head -->
</head>

<body>

    <!-- Main -->
    <main id="main">
        <!-- service_type
description
price
provider_id
created_at
updated_at -->

        <!-- Login 6 - Bootstrap Brain Component -->
        <section class="bg-primary p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <h3>Add Services</h3>
                                        </div>
                                    </div>
                                </div>
                                <form action="/postServices" method="post">
                                    @csrf

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="category_id" id="userType" required>

                                            @foreach($Cats as $Cat)
                                            <option value="{{$Cat->category_id}}" selected>{{$Cat->category_name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="userType" class="form-label">Category</label>
                                    </div>
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="service_type" placeholder="Ac Repair" required>
                                                <label for="Service Type" class="form-label">service_type</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="description" placeholder="Description" required>
                                                <label for="description" class="form-label">Description</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="price" placeholder="700" required>
                                                <label for="price" class="form-label">price</label>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="provider_id" value="{{session()->get('provider_id')}}" required>


                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-2xl btn-primary" type="submit">Add Service</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer 4 - Bootstrap Brain Component -->
    <!-- Javascript Files: Vendors -->
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript Files: Controllers -->
    <script src="./User_assets/controller/palette-bsb.js"></script>

    <!-- BSB Body End -->
</body>

</html>