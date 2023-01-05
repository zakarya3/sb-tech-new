@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter un produit</h4>
                  <p class="card-products">Produits</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('insert-product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <label for="">Categorie</label>
                      <select class="form-select" required name="cate_id">
                          <option value="">Select a category</option>
                          @foreach ($category as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="row">
                      <label for="">Marque</label>
                      <select class="form-select" name="brand">
                          <option value="">Select a brand</option>
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
                          <input type="text" name="title" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantité</label>
                          <input type="number" name="qty" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Prix</label>
                          <input type="number" name="price" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Référence</label>
                          <input type="text" name="ref" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="">Tendance</label>
                        <input type="checkbox" name="trending" id="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image principale</label>
                          <input type="file" name="image" required class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image (optional)</label>
                          <input type="file" name="image1" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image (optional)</label>
                          <input type="file" name="image2" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image (optional)</label>
                          <input type="file" name="image3" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image (optional)</label>
                          <input type="file" name="image4" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image (optional)</label>
                          <input type="file" name="image5" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Fiche Technique</label>
                          <input type="file" name="fiche" class="form-control" id="image">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Liste des produits</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>ID</th>
                          <th>Categorie</th>
                          <th>Nom du produit</th>
                          <th>Référence</th>
                          <th>Prix</th>
                          <th>image</th>
                        </thead>
                        <tbody>
                          @foreach ($products as $item)
                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name ?? 'None'}}</td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->product_reference }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                              <img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" style="width: 50%" class="cate-image" alt="image here">
                            </td>
                            <td>
                              @if (Auth::user()->role_as == 1 || Auth::user()->role_as == 3)
                              <a href="{{ url('edit-prd/'.$item->id) }}" class="btn btn-primary pull-righ">Modifier</a>
                              <a href="{{ url('delete-prd/'.$item->id) }}" class="btn bg-danger pull-righ" style="color: white">Supprimer</a>
                              @endif
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </div>
@endsection