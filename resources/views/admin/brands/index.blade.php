@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter une marque</h4>
                  <p class="card-category">Marques</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('insert-brand') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom de la marque</label>
                          <input type="text" class="form-control" required name="name">
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
                    <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Liste des marques</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>ID</th>
                                <th>Nom de la brand</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($brand as $item)
                                <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->brand_name }}</td>
                                  <td>
                                    <a href="{{ url('edit-brand/'.$item->id) }}" class="btn btn-primary pull-righ">Modifier</a>
                                    <a href="{{ url('delete-brand/'.$item->id) }}" class="btn bg-danger pull-righ" style="color: white">Supprimer</a>
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