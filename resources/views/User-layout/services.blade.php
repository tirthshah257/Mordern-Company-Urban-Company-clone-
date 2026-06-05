@extends('User-layout.header_User')
@push('header-part')
<!-- Hero 4 - Bootstrap Brain Component -->
<section class="bg-primary" data-bs-theme="dark">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
            <div class="row py-3 py-sm-5 py-xl-9 bsb-section-mt-md-1 justify-content-sm-center">
              <div class="col-12 col-sm-10">
                <h1 class="display-2 fw-bolder mb-4 text-white">Our Services</h1>
                <div class="row">
                  <div class="col-12 col-xxl-8">
                    <p class="fs-5 mb-0 text-secondary">We provide a more personalized experience tailored to each client's unique needs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 p-0">
            <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
              <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" src="./User_assets/img/hero/service-img-1.webp" alt="">
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
            <h3 class="fs-6 text-secondary mb-2 text-uppercase">What We Do?</h3>
            <h2 class="display-4 fw-bold mb-0">We are proud of our expert services.</h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-4 gy-xxl-5 gx-xxl-5">
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-phone-flip text-primary mb-8" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v6a.5.5 0 0 1-1 0V2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a.5.5 0 0 1-1 0V2a1 1 0 0 0-1-1Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a.5.5 0 0 0-1 0v2a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-2a.5.5 0 0 0-1 0v2ZM1.713 7.954a.5.5 0 1 0-.419-.908c-.347.16-.654.348-.882.57C.184 7.842 0 8.139 0 8.5c0 .546.408.94.823 1.201.44.278 1.043.51 1.745.696C3.978 10.773 5.898 11 8 11c.099 0 .197 0 .294-.002l-1.148 1.148a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708l1.145 1.144L8 10c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575C1.012 8.639 1 8.506 1 8.5c0-.003 0-.059.112-.17.115-.112.31-.242.6-.376Zm12.993-.908a.5.5 0 0 0-.419.908c.292.134.486.264.6.377.113.11.113.166.113.169 0 .003 0 .065-.13.187-.132.122-.352.26-.677.4-.645.28-1.596.523-2.763.687a.5.5 0 0 0 .14.99c1.212-.17 2.26-.43 3.02-.758.38-.164.713-.357.96-.587.246-.229.45-.537.45-.919 0-.362-.184-.66-.412-.883-.228-.223-.535-.411-.882-.571ZM7.5 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1Z" />
                </svg>
                <h4 class="fw-bold mb-4">Beauty</h4>
                <p class="mb-4 text-secondary">We can help you to design and develop mobile apps and websites that are user-friendly and visually appealing.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-lamp text-primary mb-8" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z" />
                  <path d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.052.075l-.001.004-.004.01V14l.002.008a.147.147 0 0 0 .016.033.62.62 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z" />
                </svg>
                <h4 class="fw-bold mb-4">Cleaning</h4>
                <p class="mb-4 text-secondary">We can help you to drive organic traffic and outrank competitors with our data-driven SEO strategies.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-robot text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z" />
                  <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z" />
                </svg>
                <h4 class="fw-bold mb-4">Home Repair</h4>
                <p class="mb-4 text-secondary">Our AI solutions can help you to improve the efficiency and profitability to make better business decisions.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-brush text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z" />
                </svg>
                <h4 class="fw-bold mb-4">Household services</h4>
                <p class="mb-4 text-secondary">We can help you create a logo that is perfect for your business and to understand your brand identity.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-controller text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z" />
                  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                </svg>
                <h4 class="fw-bold mb-4">Painting, Waterproofing</h4>
                <p class="mb-4 text-secondary">We can help you create high-quality animations that are tailored to your needs in a variety of styles.</p>

              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card bsb-tpl-bg-lotion bsb-tpl-border-lg-cyan">
              <div class="card-body text-center p-4 p-xxl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-mouse text-primary mb-8" viewBox="0 0 16 16">
                  <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0v6zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z" />
                </svg>
                <h4 class="fw-bold mb-4">24/7 Support</h4>
                <p class="mb-4 text-secondary">We offer 24/7 support to our clients. This means that you can always get help, no matter what time it is.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <button class="btn btn-primary btn-lg m-5" type="button">Book Now</button>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/submit_booking" method="post">
              @csrf
              <div class="form-floating mb-3">
                <select class="form-select" name="category_id" id="userType" required>
                
                @foreach($Cats as $Cat)
                  <option value="{{$Cat->category_id}}" >{{$Cat->category_name}}</option>
                @endforeach 
                </select>
                <label for="userType" class="form-label">Category</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-select" name="service_id" id="userType" required>
                 
                @foreach($services as $service)
                  <option value="{{$service->service_id}}" >{{$service->service_type}}</option>
                @endforeach 
                </select>
                <label for="userType" class="form-label">Services</label>
              </div>

              <div class="mb-3">
                <label for="booking_date" class="form-label">Booking Date</label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" required>
              </div>
              <div class="mb-3">
                <label for="booking_time" class="form-label">Booking Time</label>
                <input type="time" class="form-control" id="booking_time" name="booking_time" required>
              </div>
              <div class="mb-3">
                <label for="payment_mode" class="form-label">Payment Mode</label>
                <input type="text" class="form-control" id="payment_mode" name="payment_mode" value="Cash" required readonly> 
              </div>
              <div class="mb-3">
                <input type="hidden" class="form-control" id="payment_mode" name="user_id" value="{{session()->get('user_id')}}"  required readonly>
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