@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter une sous-categorie</h4>
                  <p class="card-category">Sous-Categories</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('insert-type') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <label for="">Categorie</label>
                      <select class="form-select" required name="categ">
                          <option value="">Select a category</option>
                          @foreach ($category as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sous-categorie</label>
                          <input type="text" class="form-control" required name="name">
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
                    <h4 class="card-title ">Liste des sous-categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                        </thead>
                        <tbody>
                         @foreach ($type as $item)
                          <tr>
                            <td>
                              {{ $item->id }}
                            </td>
                            <td>
                              {{ $item->name }}
                            </td>
                            <td>
                                <a type="submit" class="btn btn-primary pull-right" href="{{ url('edit-type/'.$item->id) }}">Modifier</a>
                                <a type="submit" class="btn bg-danger pull-right" style="color: white" href="{{ url('delete-type/'.$item->id) }}">Supprimer</a>
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