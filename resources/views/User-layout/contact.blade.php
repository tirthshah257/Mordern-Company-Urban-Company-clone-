@extends('User-layout.header_User')
@push('header-part')
    <!-- Hero 4 - Bootstrap Brain Component -->
    <section class="bg-primary" data-bs-theme="dark">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
            <div class="row py-3 py-sm-5 py-xl-9 bsb-section-mt-md-1 justify-content-sm-center">
              <div class="col-12 col-sm-10">
                <h1 class="display-2 fw-bolder mb-4 text-white">Contact Us</h1>
                <div class="row">
                  <div class="col-12 col-xxl-8">
                    <p class="fs-5 mb-0 text-secondary">Communication is the key to success, and we're always here to answer your questions.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 p-0">
            <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
              <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" src="./User_assets/img/hero/contact-img-1.webp" alt="">
            </figure>
          </div>
        </div>
      </div>
    </section>
@endpush
@section('User-main')
  <!-- Main -->
  <main id="main">

    <!-- Section - Services -->
    <!-- Service 4 - Bootstrap Brain Component -->
    <section class="py-5 py-xl-8 bsb-section-py-xxl-1">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <h3 class="fs-6 text-secondary mb-2 text-uppercase">Say Hello</h3>
            <h2 class="display-4 fw-bold mb-0">Contact us for sales, media or support.</h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-4 gy-md-0 gx-xxl-5">
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-cart text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <h4 class="fw-bold mb-4">Sales & Enquires</h4>
                <p class="mb-4 text-secondary">Please send your enquiry for information about a product or service.</p>
                <a href="mailto:sales@yourdomain.com" class="fw-bold text-decoration-none link-primary">
                  sales@yourdomain.com
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-broadcast text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                </svg>
                <h4 class="fw-bold mb-4">Press & Media</h4>
                <p class="mb-4 text-secondary">Please send your request for information about a media enquiry.</p>
                <a href="mailto:press@yourdomain.com" class="fw-bold text-decoration-none link-primary">
                  press@yourdomain.com
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-headset text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                </svg>
                <h4 class="fw-bold mb-4">Help & Support</h4>
                <p class="mb-4 text-secondary">Please send your request for help from our happiness engineer.</p>
                <a href="mailto:help@yourdomain.com" class="fw-bold text-decoration-none link-primary">
                  help@yourdomain.com
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Contact Form -->
    <!-- Contact 4 - Bootstrap Brain Component -->
    <section class="bg-primary" data-bs-theme="dark">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div class="col-12 col-md-6 p-0">
            <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" src="./User_assets/img/contact/contact-img-1.jpg" alt="">
          </div>
          <div class="col-12 col-md-6 align-self-md-end">
            <div class="row py-3 py-sm-5 py-xxl-9 bsb-section-mt-md-1 justify-content-sm-center">
              <div class="col-12 col-sm-10">
                <h2 class="display-4 fw-bold mb-4">Get in Touch</h2>
                <p class="fs-5 mb-5 text-secondary">We're always on the lookout to work with new clients. If you want to work with us, please write to us using the form below.</p>
                <div class="border-accent text-bg-primary border rounded shadow-sm overflow-hidden" data-bs-theme="light">

                  <form action="#!">
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                      <div class="col-12">
                        <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                          </span>
                          <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <div class="input-group">
                          <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                          </span>
                          <input type="tel" class="form-control" id="phone" name="phone" value="">
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="subject" name="subject" value="" required>
                      </div>
                      <div class="col-12">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button class="btn btn-accent btn-lg" type="submit">Send Message</button>
                        </div>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Team -->
    <!-- Team 2 - Bootstrap Brain Component -->
    <section class="py-5 py-xl-8 bsb-section-py-xxl-1">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 text-center">
            <h3 class="fs-6 text-secondary mb-2 text-uppercase">Our Team</h3>
            <h2 class="display-4 fw-bold mb-0">You can expect personalized designs.</h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0">
          <div class="col-12 col-lg-4">
            <div class="card border-0">
              <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                <a href="#!">
                  <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./User_assets/img/team/team-img-1.jpg" alt="Flora Nyra">
                </a>
                <figcaption>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                </figcaption>
              </figure>
              <div class="card-body border bg-white p-4">
                <h2 class="card-title h4 fw-bold mb-3">Flora Nyra</h2>
                <p class="card-text text-secondary">Define the product vision and strategy and conduct user research to understand the needs of the target market.</p>
              </div>
              <div class="card-footer border border-top-0 bsb-tpl-bg-lotion p-4">
                <ul class="nav mb-0 bsb-nav-sep">
                  <li class="nav-item text-secondary">
                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lightbulb text-primary" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                      </svg>
                      <span class="ms-2 fs-6">Product Manager</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card border-0">
              <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                <a href="#!">
                  <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./User_assets/img/team/team-img-3.jpg" alt="James Levi">
                </a>
                <figcaption>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                </figcaption>
              </figure>
              <div class="card-body border bg-white p-4">
                <h2 class="card-title h4 fw-bold mb-3">James Levi</h2>
                <p class="card-text text-secondary">Analyze financial statements to assess a company's financial performance and develop financial models for future performance.</p>
              </div>
              <div class="card-footer border border-top-0 bsb-tpl-bg-lotion p-4">
                <ul class="nav mb-0 bsb-nav-sep">
                  <li class="nav-item text-secondary">
                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                        <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                      </svg>
                      <span class="ms-2 fs-6">Financial Analyst</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card border-0">
              <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                <a href="#!">
                  <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./User_assets/img/team/team-img-2.jpg" alt="Taytum Elia">
                </a>
                <figcaption>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                </figcaption>
              </figure>
              <div class="card-body border bg-white p-4">
                <h2 class="card-title h4 fw-bold mb-3">Taytum Elia</h2>
                <p class="card-text text-secondary">Develop and oversee the visual concept for a product or brand and direct and review the work of other creative professionals.</p>
              </div>
              <div class="card-footer border border-top-0 bsb-tpl-bg-lotion p-4">
                <ul class="nav mb-0 bsb-nav-sep">
                  <li class="nav-item text-secondary">
                    <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-brush text-primary" viewBox="0 0 16 16">
                        <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z" />
                      </svg>
                      <span class="ms-2 fs-6">Art Director</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer 4 - Bootstrap Brain Component -->
  <footer class="footer">

    <!-- Widgets - Bootstrap Brain Component -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-4 bg-primary py-4 py-md-5 py-xxl-8">
            <div class="row h-100 align-items-end justify-content-center">
              <div class="col-12 col-md-11 col-xl-10">
                <div class="footer-logo-wrapper">
                  <a href="index.html">
                    <img src="./User_assets/img/branding/palette-logo.svg" alt="" width="179" height="60">
                  </a>
                </div>
                <div class="social-media-wrapper mt-5">
                  <ul class="nav">
                    <li class="nav-item me-3">
                      <a class="nav-link link-primary p-2 bg-light rounded" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                      </a>
                    </li>
                    <li class="nav-item me-3">
                      <a class="nav-link link-primary p-2 bg-light rounded" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                      </a>
                    </li>
                    <li class="nav-item me-3">
                      <a class="nav-link link-primary p-2 bg-light rounded" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link-primary p-2 bg-light rounded" href="#!">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="address-wrapper mt-5">
                  <address class="mb-2 text-white">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
                  <p class="mb-2">
                    <a class="link-light text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                  </p>
                  <p class="mb-0">
                    <a class="link-light text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-8 bsb-tpl-bg-lotion border-top bsb-tpl-border-lg-cyan py-4 py-md-5 py-xxl-8">
            <div class="row justify-content-center">
              <div class="col-12 col-md-11 col-xxl-10">
                <div class="row gy-4 gy-sm-0">
                  <div class="col-6 col-sm-3">
                    <div class="widget">
                      <h4 class="widget-title mb-4">Services</h4>
                      <ul class="list-unstyled">
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">AI Solutions</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Digital Marketing</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">App Development</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">SEO Consultancy</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Web Design</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Video Animations</a>
                        </li>
                        <li class="mb-0">
                          <a href="#!" class="link-secondary text-decoration-none">Logo Design</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-6 col-sm-3">
                    <div class="widget">
                      <h4 class="widget-title mb-4">Company</h4>
                      <ul class="list-unstyled">
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">About</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Contact</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Advertise</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Events</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Careers</a>
                        </li>
                        <li class="mb-3">
                          <a href="#!" class="link-secondary text-decoration-none">Terms of Service</a>
                        </li>
                        <li class="mb-0">
                          <a href="#!" class="link-secondary text-decoration-none">Privacy Policy</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="widget">
                      <h4 class="widget-title mb-4">Our Newsletter</h4>
                      <p class="mb-4">Never miss out on our company's latest news, updates, and exclusive offers! Subscribe to our newsletter today and get the inside scoop delivered straight to your inbox.</p>
                      <form action="#!">
                        <div class="row gy-4">
                          <div class="col-12">
                            <div class="input-group">
                              <span class="input-group-text" id="email-newsletter-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                              </span>
                              <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row mt-6 border-top border-light-subtle">
                  <div class="footer-copyright-wrapper mt-6">
                    &copy; 2023. All Rights Reserved.
                  </div>
                  <div class="credits text-secondary mt-2 fs-7">
                    Built by <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none">BootstrapBrain</a> with <span class="text-primary">&#9829;</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </footer>

  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Files: Controllers -->
  <script src="./User_assets/controller/palette-bsb.js"></script>

  <!-- BSB Body End -->
</body>

</html>
@endsection