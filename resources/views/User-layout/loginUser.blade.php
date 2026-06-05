@extends('User-layout.header_User')

<section class="bg-primary py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <section class="bg-primary py-3 py-md-5 py-xl-8">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-12 col-md-6 col-xl-7">
                            <div class="d-flex justify-content-center text-bg-primary">
                                <div class="col-12 col-xl-9">

                                    <hr class="border-primary-subtle mb-4">
                                    <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                                    <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial intelligence.</p>
                                    <div class="text-endx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                            <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-5">
                            <div class="card border-0 rounded-4">
                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <h2 class="h3">Login</h2>
                                                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to Login</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/loginUser" method="post">
                                        @csrf
                                        <div class="row gy-3 overflow-hidden">

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                                    <label for="email" class="form-label">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                                    <label for="password" class="form-label">Password</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-lg" type="submit">Sign in</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                                                <p class="m-0 text-secondary text-center">Don't have an account? <a href="/RegisterUser" class="link-primary text-decoration-none">Sign up</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


</html>