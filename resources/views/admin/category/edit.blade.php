@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Modifier la categorie</h4>
                  <p class="card-category">Categories</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Categorie</label>
                          <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          @if ($category->image)
                          <img src="{{ asset('assets/uploads/categories/images/'.$category->image) }}" style="width: 60%" alt="">
                          @endif
                          <label class="input-group-text" for="image">Image</label>
                          <input type="file" name="image" class="form-control" id="image">
                        </div>
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