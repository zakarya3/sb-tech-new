@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Modifier la marque</h4>
                  <p class="card-category">Marques</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('update-brand/'.$brand->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom de la marque</label>
                          <input type="text" class="form-control" value="{{ $brand->brand_name }}" name="name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="input-group mb-3">
                            @if ($brand->image)
                            <img src="{{ asset('assets/uploads/brands/images/'.$brand->image) }}" alt="">
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