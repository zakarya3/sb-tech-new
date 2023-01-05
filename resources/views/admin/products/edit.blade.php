@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Modifier un produit</h4>
                <p class="card-products">Produits</p>
              </div>
              <div class="card-body">
                <form action="{{ url('update-product/'.$products->id) }}" method="post"enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <label for="">Categorie</label>
                    <select class="form-select" required  name="cate_id">
                        <option value="{{ $products->category->id }}">{{ $products->category->name }}</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="row">
                    <label for="">Marque</label>
                    <select class="form-select"  name="brand">
                      <option value="@if ($products->brand_id !== null){{ $products->brand_id }} @endif">
                        @if ($products->brand_id !== null){{ $products->brand->brand_name }}@endif</option>
                      @foreach ($brand as $item)
                        <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                      @endforeach
                  </select>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nom du produit</label>
                        <input type="text" name="title" value="{{ $products->product_name }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Quantité</label>
                        <input type="number" name="qty" value="{{ $products->qty }}"  class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Prix</label>
                        <input type="number" name="price" value="{{ $products->price }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Référence</label>
                        <input type="text" name="ref" value="{{ $products->product_reference }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="">Trendig</label>
                    <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending" id="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image) }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image principale</label>
                        <input type="file"  name="image" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image1)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image1) }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image (optional)</label>
                        <input type="file"  name="image1" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image2)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image2) }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image (optional)</label>
                        <input type="file"  name="image2" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image3)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image3) }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image (optional)</label>
                        <input type="file"  name="image3" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image4)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image4) }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image (optional)</label>
                        <input type="file"  name="image4" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image5)
                        <img src="{{ asset('frontend/images/categories/video.jpeg') }}" style="width: 40%" alt="">
                        @endif
                        <label class="input-group-text" for="image">Vidéo (optional)</label>
                        <input type="file"  name="image5" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->fiche)
                        <a href="{{ url('assets/uploads/products/ficheTechnique/'.$products->fich) }}" download alt=""></a>
                        @endif
                        <label class="input-group-text" for="image">Fiche Technique</label>
                        <input type="file"  name="fiche" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea name="description" id="" cols="30" rows="10">{{ $products->product_description }}</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Modifier</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
@endsection