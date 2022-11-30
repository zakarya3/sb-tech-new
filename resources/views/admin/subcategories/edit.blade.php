@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Modifier la sous-categorie</h4>
                  <p class="card-category">Sous-categories</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('update-type/'.$type->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <label for="">Categorie</label>
                      <select class="form-select" required  name="categ">
                          <option value="{{ $type->category->name }}">{{ $type->category->name }}</option>
                          @foreach ($category as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" value="{{ $type->name }}" class="form-control" name="name">
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