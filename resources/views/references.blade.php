@extends('layouts.navbar')
@section('content')
<nav class="container py-4 my-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item">
        <a href="{{ url('/') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Références
      </li>
    </ol>
</nav>

  <!-- Page title + filters -->
  <section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
    <h1 class="mb-sm-0 me-sm-3">Nos références</h1>
  </section>

  <!-- Portfolio list -->
  <section class="container pb-2 pb-lg-3">
    <!-- Item -->
    <div class="row pb-5 mb-md-4 mb-lg-5">
      <div class="col-md-6 pb-1 mb-3 pb-md-0 mb-md-0" data-jarallax-element="-25" data-disable-parallax-down="md">
        <a href="">
          <img src="assets/img/reference/WhatsApp Image 2021-07-15 at 10.17.45.jpeg" class="rounded-3" width="600" alt="Image" />
        </a>
      </div>
      <div class="col-md-6" data-jarallax-element="25" data-disable-parallax-down="md">
        <div class="ps-md-4 ms-md-2">
          <div class="fs-sm text-muted mb-1">Nov 18, 2021</div>
          <h2 class="h3">SaaS Project Management Tool</h2>
          <a href="#" class="d-table badge bg-faded-primary text-primary fs-sm mb-3">Graphic Design</a>
          <p class="d-md-none d-lg-block pb-3 mb-2 mb-md-3">
            Malesuada eu cursus natoque purus ipsum nunc, velit cras tellus.
            Maecenas viverra pellentesque at ultrices purus vitae quis erat
            volutpat. Turpis auctor neque bibendum id pellentesque ut
            egestas. Donec ut faucibus nisl nec at purus. Cursus vel gravida
            gravida purus varius feugiat.Semper mauris id adipiscing est.
            Nam leo rutrum gravida curabitur at vel risus.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection