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
            <h1 class="me-3">Vérification des informations</h1>
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
                <form action="{{ url('payment') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="3r2BsNcJtyRfjStGB4IHk8ky1EsoApGD64jBfxfV">
                    <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Adresse de livraison</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="checkout-fn">Nom &amp; Prénom</label>
                                <input class="form-control" required="" name="userName" value="@if ($user!=NULL){{ $user->name }}@endif" type="text"
                                    id="checkout-fn">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-phone">Numéro de téléphone</label>
                                    <input class="form-control" required="" name="phone" value="@if ($user!=NULL){{ $user->phone }}@endif" type="text"
                                        id="checkout-phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-address-1">Adresse</label>
                                    <input class="form-control" required="" name="address" value="@if ($user!=NULL){{ $user->address }}@endif" type="text"
                                        id="checkout-address-1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="checkout-email">Adresse e-mail</label>
                                    <input class="form-control" required="" name="email" value="@if ($user!=NULL){{ $user->email }}@endif" type="email"
                                        id="checkout-email">
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-flex pt-4 mt-3">
                            <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{ url('cart') }}"><i class='bx bx-chevron-left'></i><span class="d-none d-sm-inline">Retour au panier</span><span class="d-inline d-sm-none">Back</span></a></div>
                            <div class="w-50 ps-2"><button class="btn btn-primary d-block w-100" type="submit"><span class="d-none d-sm-inline">Confirmer</span><span class="d-inline d-sm-none">Next</span><i class='bx bx-chevron-right mt-sm-0 ms-1'></i></button>
                            </div>
                        </div>
                    </div>
                    </section>
                    <!-- Sidebar-->
                    <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                        <div class="card">
                        <div class="card-body">
                            <h6>Détails</h6>
                            <hr>
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>Produit</th>
                                    <th>Qty</th>
                                    <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }} <small>MAD</small></td>
                                    </tr>
                                    @php
                                        $total += $item->price * $item->quantity
                                    @endphp
                                    @endforeach
                                    <tr>
                                    <th>Total TTC</th>
                                    <td>{{ $total }}</td>
                                    <input type="hidden" name="total" value="{{ $total }}">
                                    <td>MAD</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </aside>
                    <div class="row d-lg-none">
                        <div class="col-lg-8">
                        <div class="d-flex pt-4 mt-3">
                            <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="{{ url('cart') }}"><i class='bx bx-chevron-left me-1'></i><span class="d-none d-sm-inline">Retour au panier</span><span class="d-inline d-sm-none">Retour au panier</span></a></div>
                            <div class="w-50 ps-2"><button class="btn btn-primary d-block w-100" type="submit"><span class="d-none d-sm-inline">Confirmer</span><span class="d-inline d-sm-none">Confirmer</span><i class='bx bx-chevron-right mt-sm-0 ms-1'></i></button></div>
                        </div>
                        </div>

                    </div>
                </form>
        </div>
    </div>
</section>
@endsection