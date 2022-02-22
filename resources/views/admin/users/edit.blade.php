@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Modifier les informations</h4>
                <p class="card-products">Utilisateurs</p>
              </div>
              <div class="card-body">
                <form action="{{ url('update-user/'.$user->id) }}" method="post"enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nom</label>
                        <input type="text" name="name" value="{{ $user->name }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}"  class="form-control">
                      </div>
                    </div>
                  </div>
                  @if ($user->role_as == 0)
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Téléphone</label>
                        <input type="number" name="phone" value="{{ $user->phone }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Adresse</label>
                        <input type="text" name="address" value="{{ $user->address }}"  class="form-control">
                      </div>
                    </div>
                  </div>
                  @endif
                  @if ($user->role_as == 2)
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Device ID</label>
                        <input type="text" name="station" value="{{ $user->station_id }}"  class="form-control">
                      </div>
                    </div>
                  @endif
                  </div>
                  <div class="row">
                    <label for="">Role</label>
                    <select class="form-select" required name="role">
                        <option value="">Selection le role</option>
                        <option value="1">admin</option>
                        <option value="3">Employeur</option>
                        <option value="4">Stagiaire</option>
                        <option value="2">Station</option>
                        <option value="0">Client</option>
                    </select>
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