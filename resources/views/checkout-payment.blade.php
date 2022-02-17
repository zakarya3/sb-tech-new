@extends('layouts.navbar')
@section('content')
<section class="container">


    <div class="ttp">
        <!-- Breadcrumb -->
        <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="landing-online-courses.html"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="landing-online-courses.html">Panier</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Vérification</li>
            </ol>
        </nav>


        <!-- Page title + Filters -->
        <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
            <h1 class="me-3">Méthode de paiement</h1>
            <div class="d-md-flex mb-3">
                <a class="btn btn-outline-primary btn-sm ps-2" href=""><i
                        class='bx bx-chevron-left'></i>Continue shopping</a>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- List of items-->
            <section class="col-lg-8">
                    <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Choisissez le mode de paiement</h2>
                    <div class="accordion mb-2" id="payment-method">
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button" href="#card" data-bs-toggle="collapse"><i class='bx bxs-bank me-2'></i>Payer par chèque</a></h3>
                          <div class="accordion-collapse collapse show" id="card" data-bs-parent="#payment-method">
                            <div class="accordion-body">
                              <p class="fs-sm">Veuillez nous envoyer votre chèque en suivant ces indications :</p>
                              <div class="credit-card-wrapper"></div>
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <tr>
                                        <td>Montant</td>
                                        <td>{{ $total }} MAD</td>
          
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Bénéficiaire</td>
                                        <td>SB-TECH</td>
                                      </tr>
                                      <tr>
                                        <td>RIB</td>
                                        <td>attijariwafa 0017263560063500</td>
                                      </tr>
                                      <tr>
                                        <td>Envoyez votre chèque à cette adresse</td>
                                        <td>SB-TECH Maroc
                                           CITE Almassira AGADIR- MAROC</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points" data-bs-toggle="collapse"><i class='bx bx-package me-2'></i>Payer comptant à la livraison</a></h3>
                          <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method">
                            <div class="accordion-body">
                              <p>Vous payez lors de la livraison de votre commande</p>
                            </div>
                          </div>
                        </div>
                    </div>
                        <div class="mt-3 px-2">
                            <label for="">Sélectionnez le mode de paiement</label>
                            <form action="{{ url('payment-method') }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="name_user" id="" value="{{ Session::get('name') }}">
                                <input type="hidden" name="phone" id="" value="{{ Session::get('phone') }}">
                                <input type="hidden" name="email" id="" value="{{ Session::get('email') }}">
                                <input type="hidden" name="address" id="" value="{{ Session::get('address') }}">
                                <input type="hidden" name="total" id="" value="{{ $total }}">
                                @foreach ($cartItems as $item)
                                <input type="hidden" name="id" id="" value="{{ $item->id }}">
                                <input type="hidden" name="name" id="" value="{{ $item->name }}">
                                <input type="hidden" name="price" id="" value="{{ $item->price }}">
                                <input type="hidden" name="quantity" id="" value="{{ $item->name }}">
                                @endforeach
                                <select class="form-select" name="order_choice">
                                    <option value="0" >Payer par chèque</option>
                                    <option value="1" >Payer comptant à la livraison</option>
                                  </select>
                                  <button type="submit" class="btn btn-primary mt-3">Confirmer</button>
                            </form>
                        </div>

            </section>
            <!-- Sidebar-->
        </div>
    </div>
</section>
@endsection