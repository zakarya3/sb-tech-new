@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
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
                      <th>Nom</th>
                      <th>E-mail</th>
                      <th>Téléphone</th>
                      <th>Adresse</th>
                      <th>Role</th>
                    </thead>
                    <tbody>
                      @foreach ($users as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            @if ($item->role_as == 1)
                                admin
                              @elseif ($item->role_as == 3)
                                Employeur
                                @elseif ($item->role_as == 4)
                                  Stagiaire
                                  @elseif ($item->role_as == 0)
                                  Client
                                    @elseif ($item->role_as == 2)
                                    Station
                            @endif
                          </td>
                        <td>
                          @if (Auth::user()->role_as == 1 || Auth::user()->role_as == 3)
                          <a href="{{ url('edit-usr/'.$item->id) }}" class="btn btn-primary pull-righ">Modifier</a>
                          <a href="{{ url('delete-usr/'.$item->id) }}" class="btn bg-danger pull-righ" style="color: white">Supprimer</a>
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