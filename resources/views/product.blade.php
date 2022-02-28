@extends('layouts.navbar')
@section('content')
    
<style>
table, th, td {
    width: 100% !important;
  border: 1px solid;
}
</style>
        <!-- Breadcrumb -->
        <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="">Produits</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
            </ol>
        </nav>


        <!-- Page title -->
        <section class="container pb-4 mb-2 mb-lg-3">
            <h1>{{ $product->product_name }}</h1>
            <p class="text-muted mb-0">{{ $product->category->name }} </p>
        </section>

        <div class="container">
            <!-- Gallery + details-->
            <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5 product_data">
                <div class="px-lg-3">
                    <div class="row">
                        <!-- Product gallery-->
                        <div class="col-lg-7 pe-lg-0 pt-lg-4">
                            <div class="product-gallery">
                                <div class="product-gallery-preview order-sm-2">
                                    <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="{{ asset('assets/uploads/products/images/'.$product->image) }}" data-zoom="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="second"><img class="image-zoom"
                                            src="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}"
                                            data-zoom="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                </div>
                                <div class="product-gallery-thumblist order-sm-1"><a
                                        class="product-gallery-thumblist-item active" href="#first"><img
                                            src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="Product thumb"></a><a
                                        class="product-gallery-thumblist-item" href="#second"><img
                                            src="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}" alt="Product thumb"></a></div>
                            </div>
                        </div>
                        <!-- Product details-->
                        <div class="col-lg-5 pt-4 pt-lg-0">
                            <div class="product-details ms-auto pb-3">
                                @if ($product->price != NULL)
                                <div class="mb-3"><span class="h3 fw-normal text-accent me-1">{{ $product->price }}<small>MAD</small></span></div>
                                @else
                                <div class="mb-3"><span class="h3 fw-normal text-accent me-1">{{ $product->price }}<small>Contactez-nos</small></span></div>
                                @endif
                                @if ($product->qty > 0)
                                <label for="" class="badge bg-success">In stock</label>
                                <input type="hidden" value="{{ $product->id }}" class="prod_id">
                                <div class="row mt-2">
                                  <div class="input-group quantity" style="width: 160px !important; margin-bottom: 1em">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="0" required>
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                  </div>
                                  <div class="col-md-9" style="width: 100% !important; margin-bottom: 1em !important">
                                    <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      <input type="hidden" value="{{ $product->id }}" name="id">
                                      <input type="hidden" value="{{ $product->product_name }}" name="name">
                                      <input type="hidden" value="{{ $product->price }}" name="price">
                                      <input type="hidden" value="{{ $product->image }}"  name="image">
                                      <input type="hidden" class="qty-input form-control" name="quantity">
                                      <input type="hidden" value="{{ $product->qty }}"  name="qty">
                                      @if ($product->price != NULL)
                                      <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class='bx bx-cart'></i>Add to Cart</button>
                                      @else
                                      <a href="{{ url('/contact') }}" class="btn btn-primary btn-shadow d-block w-100" type="submit">Contacter-nous</a>
                                      @endif
                                    </form>
                                  </div>
                                </div>
                                @else
                                    <label for="" class="badge bg-danger">Out of stock</label>
                                @endif
                                <!-- Product panels-->
                                <div class="accordion mb-4" id="productPanels">
                                    <div class="accordion-item">
                                        <h3 class="accordion-header"><a class="accordion-button" href="#productInfo"
                                                role="button" data-bs-toggle="collapse" aria-expanded="true"
                                                aria-controls="productInfo"><i class='bx bx-detail'></i>Description</a>
                                        </h3>
                                        <div class="accordion-collapse collapse show" id="productInfo"
                                            data-bs-parent="#productPanels">
                                            <div class="accordion-body">
                                                <p>@php
                                                    echo $product->product_description;
                                                @endphp</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header"><a class="accordion-button collapsed"
                                                href="#shippingOptions" role="button" data-bs-toggle="collapse"
                                                aria-expanded="true" aria-controls="shippingOptions"><i class='bx bxs-cloud-download'></i>Fich Technique</a></h3>
                                        <div class="accordion-collapse collapse" id="shippingOptions"
                                            data-bs-parent="#productPanels">
                                            <div class="accordion-body fs-sm">
                                                <a href="{{ url('assets/uploads/products/ficheTechnique/'.$product->fiche) }}" download>Télécharger</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header"><a class="accordion-button collapsed"
                                                href="#details" role="button" data-bs-toggle="collapse"
                                                aria-expanded="true" aria-controls="details"><i
                                                    class='bx bxs-detail'></i>Détails du produit</a></h3>
                                        <div class="accordion-collapse collapse" id="details"
                                            data-bs-parent="#productPanels">
                                            <div class="accordion-body fs-sm">
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <img src="{{ asset('assets/uploads/brands/images/'.$product->brand->image) }}" alt="">
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <div>
                                                        <div class="fw-semibold text-dark">Référence</div>
                                                    </div>
                                                    <div>{{ $product->product_reference }}</div>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <div>
                                                        <div class="fw-semibold text-dark">Références spécifiques</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sharing-->
                                <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a
                                    class="btn-share btn-twitter me-2 my-2" href="#"><i
                                        class='bx bxl-twitter'></i>Twitter</a><a
                                    class="btn-share btn-instagram me-2 my-2" href="#"><i
                                        class='bx bxl-instagram-alt'></i>Instagram</a><a
                                    class="btn-share btn-facebook my-2" href="#"><i
                                        class='bx bxl-facebook-circle'></i>Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product description section 2-->
        </div>
        <div class="container pt-5">
            <h2 class="h3 text-center pb-4">Autres produits</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
                <!-- Item -->
                @foreach ($other_prd as $item)
                <div class="col pb-1 pb-lg-3 mb-4">
                    <article class="card h-100 border-0 shadow-sm">
                      <div class="position-relative">
                        <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}" class="d-block position-absolute w-100 h-100 top-0 start-0"></a>
                        <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Save to Favorites">
                          <i class="bx bx-bookmark"></i>
                        </a>
                        <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" style="height: 30vh; object-fit: contain;" class="card-img-top" alt="Image">
                      </div>
                      <div class="card-body pb-3">
                        <h3 class="h5 mb-2">
                          <a href="{{ url('product/'.$item->category->name.'/'.$item->product_name) }}">{{ $item->product_name }}</a>
                        </h3>
                        <p class="fs-sm mb-2">{{ $item->category->name }}</p>
                        <p class="fs-lg fw-semibold text-primary mb-0">{{ $item->price }} MAD</p>
                      </div>
                      <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i> Add to Cart</button>
                      </div>
                    </article>
                  </div>
                @endforeach
      
              </div>
        </div>
@endsection