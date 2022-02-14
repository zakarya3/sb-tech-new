<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>SB-TECH | Fournisseur de référence de matériels industriels</title>
  <!-- SEO Meta Tags -->
  <meta name="description" content="SB-TECH - Fournisseur de référence de matériels industriels" />
  <meta name="keywords" content=" SB-TECH, la spécialiste dans l'importation et la fourniture de
  tous matériels industriels conformément aux normes, propose une
  large gamme de choix de fournitures industrielles. Notre expertise
  vient de nos connaissances et de notre expérience dans le domaine
  industriel avec toute sorte de matériel. Nos technico-commerciaux
  professionnels et qualifiés, s'engagent à vous fournir des devis
  et des délais de livraison qui défient tous les concurrents et en
  utilisant toutes leurs expertises pour répondre à vos besoins." />
  <meta name="author" content="SB-TECH" />

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon and Touch Icons -->
  <link rel="shortcut icon" href="{{ asset('assets/img/logo/logosvg.svg') }}" type="image/svg" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <meta name="theme-color" content="#ffffff" />

  <!-- Vendor Styles -->
  <link rel="stylesheet" media="screen" href="{{ asset('frontend/css/boxicons.min.css') }}" />
  <link rel="stylesheet" media="screen" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" />

  <!-- Main Theme Styles + Bootstrap -->
  <link rel="stylesheet" media="screen" href="{{ asset('frontend/css/theme.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/theme.min1.css') }}" />

  <!-- Page loading styles -->
  <style>
    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all 0.4s 0.2s ease-in-out;
      transition: all 0.4s 0.2s ease-in-out;
      background-color: #fff;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    .dark-mode .page-loading {
      background-color: #131022;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity 0.2s ease-in-out;
      transition: opacity 0.2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-size: 1rem;
      font-weight: normal;
      color: #9397ad;
    }

    .dark-mode .page-loading-inner>span {
      color: #fff;
      opacity: 0.6;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: 0.75rem;
      vertical-align: text-bottom;
      border: 0.15em solid #b4b7c9;
      border-right-color: transparent;
      border-radius: 50%;
      -webkit-animation: spinner 0.75s linear infinite;
      animation: spinner 0.75s linear infinite;
    }

    .dark-mode .page-spinner {
      border-color: rgba(255, 255, 255, 0.4);
      border-right-color: transparent;
    }

    @-webkit-keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
  <!-- Theme mode -->
  <script>
    let mode = window.localStorage.getItem("mode"),
      root = document.getElementsByTagName("html")[0];
    if (mode !== undefined && mode === "dark") {
      root.classList.add("dark-mode");
    } else {
      root.classList.remove("dark-mode");
    }
  </script>
  <!-- Page loading scripts -->
  <script>
    (function () {
      window.onload = function () {
        const preloader = document.querySelector(".page-loading");
        preloader.classList.remove("active");
        setTimeout(function () {
          preloader.remove();
        }, 1000);
      };
    })();
  </script>
  <!-- Google Tag Manager -->
  <!-- <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-WKV3GT5");
    </script> -->
</head>

<!-- Body -->

<body>
  <!-- Page loading spinner -->
  <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div>
      <span>Loading...</span>
    </div>
  </div>

  <!-- Page wrapper for sticky footer -->
  <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
  <main class="page-wrapper">
    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg navbar-light bg-light
        navbar-sticky">
      <div class="container px-3">
        <a href="index.html" class="navbar-brand pe-3">
          <img src="assets/img/logo/logo.png" width="150" alt="SB-TECH" />
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                  aria-current="page">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produits <i class='bx bx-chevron-down' ></i></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="account-details.html" class="dropdown-item">Robotique</a>
                  </li>
                  <li>
                    <a href="account-security.html" class="dropdown-item">automatisme</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contactez-nous</a>
              </li>
              <li class="nav-item">
                <a href="components/typography.html" class="nav-link">Mes commandes</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
          <input type="checkbox" class="form-check-input" id="theme-mode" />
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
          <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars" style="width: 100%"></i>
        </button>
        <div class="navbar-tool dropdown ms-3">
          <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ url('cart') }}"><span
              class="navbar-tool-label">6</span><i class="fas fa-shopping-cart"></i></a><a class="navbar-tool-text"
            href="{{ url('cart') }}"></a>
          <!-- Cart dropdown-->
          <div class="dropdown-menu dropdown-menu-end">
            <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem">
              <div style="height: 15rem" data-simplebar data-simplebar-auto-hide="false">
                <div class="widget-cart-item py-2 border-bottom product_data">
                  <input type="hidden" value="" class="prod_id" />
                  <form action="" method="post">
                    <input type="hidden" value="" name="id" />
                    <button class="btn-close text-danger" type="submit" aria-label="Remove">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </form>
                  <div class="d-flex align-items-center">
                    <a class="d-block flex-shrink-0" href="{{ url('cart') }}"><img src="assets/img/brands/01.svg"
                        width="64" alt="Product" /></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title">
                        <a href="{{ url('cart') }}">product1</a>
                      </h6>
                      <div class="widget-product-meta">
                        <span class="text-accent me-2">25.<small>00 MAD</small></span><span class="text-muted">x
                          6</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between
                  align-items-center py-3"></div>
              <a class="btn btn-primary btn-sm d-block w-100" href="{{ url('cart') }}"><i class="fas fa-shopping-cart me-2
                    fs-base align-middle"></i>Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    @yield('content')
    
</main>

<!-- Footer -->
<footer class="footer dark-mode bg-dark pt-5 pb-4 pb-lg-5">
  <div class="container pt-lg-4">
    <div class="row pb-5">
      <div class="col-lg-4 col-md-6">
        <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
          <img src="assets/img/logo/logo.png" width="150" alt="SB-TECH" />
        </div>
        
        <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">
          <i class='bx bx-map'></i> Bureau N 1 .Av Prince Abdelkader N 78 Cite Almassira Agadir <br> 
          <i class='bx bxs-phone'></i> <a href="tel:+212 528 217 355">+212 528 217 355</a>
        </p>
        <form class="needs-validation" novalidate>
          <label for="subscr-email" class="form-label">Subscribe to our
            newsletter</label>
          <div class="input-group">
            <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email"
              required />
            <i class="bx bx-envelope fs-lg text-muted position-absolute
                top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
            <div class="invalid-tooltip position-absolute top-100 start-0">
              Please provide a valid email address.
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4
          pt-md-1 pt-lg-0">
        <div id="footer-links" class="row">
          <div class="col-lg-4">
            <h6 class="mb-2">
              <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                data-bs-toggle="collapse">Useful Links</a>
            </h6>
            <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
              <ul class="nav flex-column pb-lg-1 mb-lg-3">
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Contactez-nous!!</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Références</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Produits</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3">
            <h6 class="mb-2">
              <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                data-bs-toggle="collapse">Socials</a>
            </h6>
            <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
              <ul class="nav flex-column mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2"><i class="bx bxl-linkedin"></i></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2"><i class="bx bxl-facebook"></i></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2"><i class="bx bxl-instagram"></i></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2"><i class="bx bxl-gmail"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
            <h6 class="mb-2">Contact Us</h6>
            <a href="mailto:info@sbtech.ma" class="fw-medium"><i class="bx bxl-gmail"></i> info@sbtech.ma</a>
          </div>
        </div>
      </div>
    </div>
    <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
      <span class="text-light opacity-50">&copy; All rights reserved. Made
        by
      </span>
      <a class="nav-link d-inline-block p-0" href="" target="_blank" rel="noopener"> SB-TECH</a>
    </p>
  </div>
</footer>

<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll>
  <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
  <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>

<!-- Vendor Scripts -->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>

<!-- Main Theme Script -->
<script src="{{ asset('frontend/js/theme.min.js') }}"></script>
</body>

</html>