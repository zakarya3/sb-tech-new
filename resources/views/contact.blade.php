@extends('layouts.navbar')
@section('content')
<section class="container pb-5 mb-lg-4 mb-xl-5">

    <!-- Breadcrumb -->
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </nav>

    <div class="row pt-4 mt-lg-3 pb-5 mb-lg-4 mb-xl-5">

      <!-- Page title -->
      <div class="col-md-4">
        <h1 class="mb-md-4">SB-tech</h1>
        <p class="fs-lg pb-2">Notre expertise vient de nos connaissances et de notre expérience dans le domaine industriel avec toute sorte de matériel. Nos technico-commerciaux professionnels et qualifiés, s'engagent à vous fournir des devis et des délais de livraison qui défient tous les concurrents et en utilisant toutes leurs expertises pour répondre à vos besoins.</p>
      </div>

      <!-- Contact form -->
      <form class="col-xl-7 col-md-8 offset-xl-1 needs-validation" action="{{ url('contact-message') }}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-sm-6 mb-4">
            <label for="name" class="form-label fs-base">Nom complet</label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Please enter your name!</div>
          </div>
          <div class="col-sm-6 mb-4">
            <label for="email" class="form-label fs-base">Email</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Please provide a valid email address!</div>
          </div>
          <div class="col-sm-6 mb-4">
            <label for="phone" class="form-label fs-base">Téléphone</label>
            <input type="text" id="phone" name="phone" class="form-control form-control-lg">
          </div>
          <div class="col-sm-6 mb-4">
            <label for="name" class="form-label fs-base">Sujet *</label>
            <input type="text" id="name" name="subject" class="form-control form-control-lg">
          </div>
          <div class="col-12 mb-4">
            <label for="message" class="form-label fs-base">Message</label>
            <textarea id="message" name="message" class="form-control form-control-lg" rows="4" required></textarea>
            <div class="invalid-feedback">Please write your message!</div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg shadow-primary">Envoyer</button>
      </form>
    </div>
    <hr class="d-md-none mt-n2 mb-2">
    <div class="row py-3">

      <!-- Contact info -->
      <div class="col-md-4 pt-1 mb-4 mb-md-0">
        <h3 class="pb-2 pb-md-3 pb-lg-4">Contact Info</h3>
        <ul class="list-unstyled pb-1 pb-lg-4">
          <li class="mb-3 mb-lg-4">
            <a href="mailto:info@sbtech.ma" class="nav-link d-inline-block fs-lg p-0"><i class='bx bxl-gmail me-2'></i> info@sbtech.ma</a>
          </li>
          <li class="mb-3 mb-lg-4">
            <a href="tel:+212 528217355" class="nav-link d-inline-block fs-lg p-0"><i class='bx bxs-phone me-2'></i>+212 528 217 355</a>
          </li>
          <li class="mb-3 mb-lg-4">
            <a href="tel:+212 661461155" class="nav-link d-inline-block fs-lg p-0"><i class='bx bxl-whatsapp me-2'></i>+212 6 61 46 11 55</a>
          </li>
          <li class="mb-3 mb-lg-4">
            <div class="text-nav fs-lg fw-medium">Bureau N 1 .Av Prince Abdelkader N 78 Cite Almassira Agadir</div>
            <a href="#" class="fs-sm">Get directions</a>
          </li>
        </ul>
        <div class="d-flex">
          <a href="#" class="btn btn-icon btn-outline-secondary btn-facebook mb-3 me-3">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="btn btn-icon btn-outline-secondary btn-twitter mb-3 me-3">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="btn btn-icon btn-outline-secondary btn-linkedin mb-3 me-3">
            <i class="bx bxl-linkedin"></i>
          </a>
          <a href="#" class="btn btn-icon btn-outline-secondary btn-instagram mb-3 me-3">
            <i class="bx bxl-instagram"></i>
          </a>
        </div>
      </div>

      <!-- Map -->
      <div class="col-xl-7 col-md-8 offset-xl-1">
        <div class="shadow-sm rounded-3 overflow-hidden">
          <iframe class="d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.9920190677229!2d-9.565586713862762!3d30.410972525139343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b7403f71e061%3A0x9a8156d5f5dd3e7b!2sSBTECH!5e1!3m2!1sen!2sma!4v1628277724891!5m2!1sen!2sma" height="460" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection