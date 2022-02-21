@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Modifier référence</h4>
                <p class="card-products">références</p>
              </div>
              <div class="card-body">
                <form action="{{ url('update-reference/'.$references->id) }}" method="post"enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <label for="">Categorie</label>
                    <select class="form-select" required  name="categ_id">
                        <option value="">select a category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Titre du Référence</label>
                        <input type="text" name="title" value="{{ $references->title }}" required class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Date</label>
                        <input type="date" name="date" value="{{ $references->date }}" required class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group mb-3">
                        @if ($references->image)
                        <img src="{{ asset('assets/uploads/references/images/'.$references->image) }}" alt="">
                        @endif
                        <label class="input-group-text" for="image">Image</label>
                        <input type="file"  name="image" class="form-control" id="image">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea name="description" id="" cols="30" rows="10">{{ $references->description }}</textarea>
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