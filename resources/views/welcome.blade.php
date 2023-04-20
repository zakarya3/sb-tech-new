@extends('layouts.navbar')
@section('content')
<style>
  .video-top {
  position: relative;
  background-color: black;
  height: 70vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

.video-top video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: 100%;
  height: 100%;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

.video-top .container {
  position: relative;
  z-index: 2;
}

.video-top .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
  .video-top {
    /* background: url({{ asset('cloud/images/Electric Grippers Replacement.mp4') }}) black no-repeat center center scroll; */
    height: 34vh !important;
    width: 100%;
    
  }

  /* .video-top video {
    display: none;
  } */
  .text-white{
    display: none;
  }
}

</style>
        <!-- Hero slider + BG parallax -->
        <section class="jarallax dark-mode bg-dark py-xxl-5 video-top" style="height: 80vh" data-jarallax data-speed="0.4">
          <div class="overlay"></div>

          <!-- The HTML5 video element that will create the background video on the header -->
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('cloud/images/Electric Grippers Replacement.mp4') }}" type="video/mp4">
          </video>
        
          <!-- The header content -->
          <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
              <div class="w-100 text-white">
                <h1 class="display-3">Materiel Et Fourniture Industrielle</h1>
                <p class="lead mb-0">
                  SB-TECH, la spécialiste dans l'importation et la
                  fourniture de tous matériels industriels conformément
                  aux normes, propose une large gamme de choix de
                  fournitures industrielles.
                </p>
              </div>
            </div>
          </div>
          </section>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

                <!-- Popular posts (Carousel) -->
      <section class="bg-secondary py-5 mb-lg-5">
        <div class="container pt-2 pt-lg-4 pt-xl-5">
          <h2 class="h1 mb-4 pb-lg-3 pt-lg-1 pb-1 text-center">Bonnes affaires</h2>
        </div>
        <div class="pb-lg-5 mb-xl-3">
          <div class="swiper-container">
            <div class="swiper-wrapper">

              <!-- Item -->
              @foreach ($featured_products as $item )
              <div class="swiper-slide h-auto pb-3">
                <article class="card h-100 border-0 shadow-sm mx-2">
                  <div class="position-relative">
                    <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                    <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                      <i class="bx bx-bookmark"></i>
                    </a>
                    <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" class="card-img-top" style="height: 30vh; object-fit: contain" alt="Image">
                  </div>
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="badge fs-sm text-nav bg-secondary text-decoration-none">{{ $item->category->name }}</a>
                      <span class="fs-sm text-muted">{{ $item->created_at->format('d-M-Y') }}</span>
                    </div>
                    <h3 class="h5 mb-0">
                      <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a>
                    </h3>
                  </div>
                  <div class="card-footer py-4">
                    <form action="{{ route('cart.store') }}" style="width: 100%" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $item->id }}" name="id">
                      <input type="hidden" value="{{ $item->product_name }}" name="name">
                      <input type="hidden" value="{{ $item->price }}" name="price">
                      <input type="hidden" value="{{ $item->image }}"  name="image">
                      <input type="hidden" value="1" name="quantity">
                      @if ($item->price != NULL)
                      <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>{{ $item->price }} MAD</button>
                      @else
                      <a href="{{ url('/contact') }}" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                        <img src="{{ asset('assets/img/icons/supp.png') }}" class="rounded-circle me-3" width="48" alt="Avatar">
                        Contactez-nous
                      </a>
                      @endif
                    </form>
                  </div>
                </article>
              </div>
              @endforeach
            </div>
              <script>
       var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        centeredSlides: true, 
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        },
      pagination: {
       el: '.swiper-pagination',
       clickable: true,
       },
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      },
     });
   </script>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-1 pt-sm-3 mt-5 d-xl-none d-flex"></div>
          </div>
        </div>
      </section>
  
      
          <!-- Features -->
          <section class="container py-5 my-2 my-md-4 my-lg-5">
            <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">POURQUOI NOUS SOMMES LE FOURNISSEUR IDÉAL ?</h2>
            <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">
              SB-TECH met en oeuvre des outils fiables pour optimiser l'offre en vue de répondre aux besoins de chaque client quelle que soit son activité. <br> Télécharger le catalogue <a href="{{ asset('assets/img/catalogue/Catalogue.pdf') }}" download>Clique ici.</a>
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/01.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">
                  Disponibilité de matériels avec des prix concurrentiels.
                </h3>
              </div>
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/02.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Accompagnement du projet de la phase d'étude jusqu'à son terme.</h3>
              </div>
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/03.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Etude, planification, estimation du budget.</h3>
              </div>
              <div class="col text-center">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/04.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Service proactif avec une détection intelligente des défauts et des mises à jour distance.</h3>
              </div>
            </div>
          </section>


                <!-- Latest podcasts -->
      <section class="container mb-5 pt-3 pb-lg-5">
        <div class="row">
          <div class="col-xl-3">
            <div class="d-xl-block d-flex align-items-center justify-content-between mb-xl-0 mb-4 pb-xl-0 pb-3">
              <h2 class="h1 mb-xl-4 mb-0 pb-xl-3">Derniers produits</h2>
              <a href="{{ url('/contact') }}" class="btn btn-primary ms-xl-0 ms-4">Contactez-nous</a>
            </div>
          </div>

          <!-- Carousel -->
          <div class="col-xl-9">
            <div class="swiper" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "576": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                },
                "1000": {
                  "slidesPerView": 3
                }
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Item -->
                @foreach ($latest as $item)
                <article class="swiper-slide h-auto pb-3">
                  <div class="d-block position-relative rounded-3 mb-3" style="height: 70%">
                    <a href="#" class="btn btn-icon btn-light bg-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Listen later">
                      <i class="bx bx-bookmark"></i>
                    </a>
                    <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3" aria-label="Listen podcast"></a>
                    <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" style="object-fit: cover" class="rounded-3" alt="Image">
                  </div>
                  <div class="d-flex align-items-center mb-2">
                    <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">{{ $item->category->name }}</a>
                    <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $item->created_at->format('d-M-Y') }}</span>
                  </div>
                  <h3 class="h5">
                    <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a>
                  </h3>
                  <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="btn btn-link px-0 mt-3">
                    <i class="bx bx-detail fs-lg me-2"></i>
                    Plus de détails
                  </a>
                </article>
                @endforeach
              </div>

              <!-- Pagination (bullets) -->
              <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
            </div>
          </div>
        </div>
      </section>
    
      
          <!-- CTA -->
          <section class="position-relative bg-dark py-5" style="margin-top: 2em">
            <span class="position-absolute top-0 start-0 w-100 h-100"
              style="background-color: rgba(255, 255, 255, 0.05)"></span>
            <div class="container position-relative zindex-5 text-center my-xl-3 py-1
                py-md-4 py-lg-5">
              <p class="lead text-light opacity-70 mb-3">Plateforme météo</p>
              <h2 class="h1 text-light pb-3 pb-lg-0 mb-lg-5">
                SB-TECH Cloud Platform <br>
                Accédez à toutes les données de votre moniteur d'environnement ou de votre station météo
              </h2>
              <a href="{{ url('overview') }}" class="btn btn-primary shadow-primary btn-lg">Se connecter</a>
            </div>
          </section>

                <!-- Info links -->
      <section class="container pt-5 pb-4 pb-sm-5 mb-2 mb-sm-0 mb-lg-3 mb-xl-4 mt-md-2 mt-lg-4 mt-xl-5">
        <div class="row row-cols-1 row-cols-sm-3 pt-sm-3 py-2">
          <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
            <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
              <img src="{{ asset('assets/img/icons/chat.svg') }}" width="24" class="d-block m-1" alt="Icon">
            </div>
            <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 me-xl-2 pe-xl-5">
              <h3 class="h4 mb-2 mb-md-3">24/7 Chat Help</h3>
              <p class="mb-1 mb-md-2">Chat support with our customer service specialists.</p>
              <a href="#" class="btn btn-link px-0">
                Talk to us
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>
          </div>
          <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
            <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
              <img src="{{ asset('assets/img/icons/faq.svg') }}" width="24" class="d-block m-1" alt="Icon">
            </div>
            <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
              <h3 class="h4 mb-2 mb-md-3">FAQ</h3>
              <p class="mb-1 mb-md-2">Find answers. Learn more about the features and services.</p>
              <a href="#" class="btn btn-link px-0">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>
          </div>
          <div class="col d-flex d-sm-block d-lg-flex align-items-start">
            <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
              <img src="{{ asset('assets/img/icons/email.svg') }}" width="24" class="d-block m-1" alt="Icon">
            </div>
            <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
              <h3 class="h4 mb-2 mb-md-3">Email</h3>
              <p class="mb-1 mb-md-2">Please feel free to drop any questions to our email.</p>
              <a href="#" class="btn btn-link px-0">
                Drop us a line
                <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
@endsection