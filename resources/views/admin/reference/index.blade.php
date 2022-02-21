@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter un Référence</h4>
                  <p class="card-products">Références</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('insert-reference') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <label for="">Categorie</label>
                      <select class="form-select" required name="categ_id">
                          <option value="">Select a category</option>
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
                          <input type="text" name="title" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date</label>
                          <input type="date" name="date" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group mb-3">
                          <label class="input-group-text" for="image">Image</label>
                          <input type="file" required name="image" class="form-control" id="image">
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
                    <h4 class="card-title ">Liste des Références</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>ID</th>
                          <th>Titre</th>
                          <th>Date</th>
                          <th>Description</th>
                          <th>image</th>
                        </thead>
                        <tbody>
                          @foreach ($references as $item)
                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                              <img src="{{ asset('assets/uploads/references/images/'.$item->image) }}" class="cate-image" alt="image here">
                            </td>
                            <td>
                              <a href="{{ url('edit-ref/'.$item->id) }}" class="btn btn-primary pull-righ">Modifier</a>
                              <a href="{{ url('delete-ref/'.$item->id) }}" class="btn bg-danger pull-righ" style="color: white">Supprimer</a>
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