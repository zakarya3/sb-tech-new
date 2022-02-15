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
                    <select class="form-select"  name="cate_id">
                        <option value="">{{ $products->category->name }}</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="row">
                    <label for="">Marque</label>
                    <select class="form-select"  name="brand">
                        <option value="">{{ $products->brand->brand_name }}</option>
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
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/images/'.$products->image) }}" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image</label>
                        <input type="file"  name="image" class="form-control" id="image">
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