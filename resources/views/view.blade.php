@extends('layouts.navbar')
@section('content')
<section class="container">


    <div class="ttp">
        <!-- Breadcrumb -->
        <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Ma commande</li>
            </ol>
        </nav>


        <!-- Page title + Filters -->
        <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
            <h1 class="me-3">Ma commande</h1>
            <div class="d-md-flex mb-3">
                <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('/') }}"><i
                        class='bx bx-chevron-left'></i>Continue shopping</a>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- List of items-->
          <section class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="">Nom & Prénom</label>
                            <div class="form-control">{{ $user->name }}</div>
                            <label class="form-label" for="">Email</label>
                            <div class="form-control">{{ $user->email }}</div>
                            <label class="form-label" for="">Téléphone</label>
                            <div class="form-control">{{ $user->phone }}</div>
                            <label class="form-label" for="">Adresse</label>
                            <div class="form-control">{{ $user->address }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>Produit</th>
                                      <th>Quantité</th>
                                      <th>Prix</th>
                                      <th>Image</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($orders as $item)
                                      <tr>
                                        <td>{{ $item->product->product_name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                           <img src="{{ asset('assets/uploads/products/images/'.$item->product->image) }}" style="width: 50px" alt="">
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                <h6>Prix Total : {{ $order->total_price }} MAD</h6>
                                <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('myorders') }}"><i class='bx bx-chevron-left'></i>Mes commandes</a>
                              </div>
                        </div>
                    </div>
                </div>
              </div>
          </section>
        </div>
      </div>
</section>
@endsection