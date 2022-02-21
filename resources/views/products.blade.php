@extends('layouts.navbar')
@section('content')
            <!-- Page content -->
            <section class="container">


                <!-- Breadcrumb -->
                <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                      <a href="{{ url('/') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Produits</li>
                  </ol>
                </nav>
        
        
                <!-- Page title + Filters -->
                <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
                  <h1 class="me-3">Produits</h1>
                </div>
                       <!-- Toolbar-->
                <div class="bg-light shadow-lg rounded-3 p-4 mt-n5 mb-4" style="margin: .5em 0 3em 0 !important; ">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="dropdown me-2"><a class="btn btn-outline-secondary dropdown-toggle" style="" href="#shop-filters" data-bs-toggle="collapse"><i class='bx bx-filter-alt me-2'></i>Filtrer</a></div>
                  </div>
                  <!-- Toolbar with expandable filters-->
                  <div class="collapse" id="shop-filters">
                    <div class="row pt-4">
                      <div class="col-lg-4 col-sm-6">
                        <!-- Categories-->
                        <div class="card mb-grid-gutter">
                          <div class="card-body px-4">
                            <div class="widget widget-categories">
                              <h3 class="widget-title">Categories</h3>
                              <div class="accordion mt-n1" id="shop-categories">
                                <!-- Shoes-->
                                <div class="accordion-item">
                                  @foreach ($category as $item)
                                    @foreach ($item->type as $it)
                                    <h3><a class="accordion-button collapsed" href="{{ url('products-items/'.$it->name) }}">{{ $it->name }}</a></h3>
                                    @endforeach
                                  @endforeach
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6">
                        <!-- Filter by Size-->
                        <div class="card mb-grid-gutter">
                          <div class="card-body px-4">
                            <div class="widget widget-categories">
                              <h3 class="widget-title">Marque</h3>
                              <div class="accordion mt-n1" id="shop-categories">
                                <!-- Shoes-->
                                <div class="accordion-item">
                                  @foreach ($brand as $item)
                                    <h3 style="display: flex; justify-content: center; align-items: center"><a class="accordion-button collapsed" href="{{ url('products-items/order-by-brand/'.$item->id) }}">{{ $item->brand_name }}</a><img src="{{ asset('assets/uploads/brands/images/'.$item->image) }}" width="50" alt=""></h3>
                                  @endforeach
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
        
                <!-- Courses grid -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
                    @foreach ($product as $item)
                        <!-- Item -->
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
                                <p class="fs-lg fw-semibold text-primary mb-0">{{ $item->price }} <small>MAD</small></p>
                            </div>
                            <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                              <form action="{{ route('cart.store') }}" style="width: 100%" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="id">
                                <input type="hidden" value="{{ $item->product_name }}" name="name">
                                <input type="hidden" value="{{ $item->price }}" name="price">
                                <input type="hidden" value="{{ $item->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i> Add to Cart</button>
                              </form>
                              </div>
                            </article>
                        </div>
                    @endforeach
        
                </div>
        
                <!-- Pagination: Basic example -->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item"></li>
                  </ul>
                  <ul class="pagination-bolock">
                    {{ $product->links('layouts.paginationlinks') }}
                  </ul> 
                  <ul class="pagination">
                    <li class="page-item"></li>
                  </ul>
                </nav>
            </section>
@endsection