@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ajouter une categorie</h4>
                  <p class="card-category">Categories</p>
                </div>
                <div class="card-body">
                  <form action="{{ url('insert-category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Categorie</label>
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
                    <h4 class="card-title ">Liste des categories</h4>
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
                         @foreach ($category as $item)
                          <tr>
                            <td>
                              {{ $item->id }}
                            </td>
                            <td>
                              {{ $item->name }}
                            </td>
                            <td>
                              <img src="{{ asset('assets/uploads/categories/images/'.$item->image) }}" class="cate-image" style="width: 40%"alt="image here">
                            </td>
                            <td>
                               @if (Auth::user()->role_as == 1 || Auth::user()->role_as == 3)
                               <a type="submit" class="btn btn-primary pull-right" href="{{ url('edit-cat/'.$item->id) }}">Modifier</a>
                               <a type="submit" class="btn bg-danger pull-right" style="color: white" href="{{ url('delete-category/'.$item->id) }}">Supprimer</a>
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