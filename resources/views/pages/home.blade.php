@extends('layouts.login')

@section('content')

<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Bienvenue sur GStock <sup>App</sup></h1>
                </div>
                <form method="POST" action="{{ route ('login') }}" class="user">
                  @csrf
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user @error ('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse email..." value="{{ old ('email') }}" autocomplete="email" autofocus>

                    @error ('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user @error ('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Mot de passe...">

                    @error ('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" {{ old ('remember') ? 'checked' : ''}}>
                      <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                    </div>
                  </div>
                  <button type="sumbit" class="btn btn-primary btn-user btn-block">
                    Se connecter
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
