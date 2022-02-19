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
                <li class="breadcrumb-item active" aria-current="page">Mes commandes</li>
            </ol>
        </nav>


        <!-- Page title + Filters -->
        <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
            <h1 class="me-3">Mes commandes</h1>
            <div class="d-md-flex mb-3">
                <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('/') }}"><i
                        class='bx bx-chevron-left'></i>Continue shopping</a>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                      <h6>Commandes</h6>
                      <hr> 
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Numéro de suivi</th>
                              <th>Prix total</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($orders as $item)
                              <tr>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->tracking_no }}</td>
                                <td>{{ $item->total_price }}</td>
                                <td>{{ $item->status == '0' ? 'en attendant' : 'complété' }}</td>
                                <td>
                                    <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">Vue</a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </section>
        </div>
    </div>
</section>
@endsection