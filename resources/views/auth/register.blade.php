@extends('master')

@section('content')
    <div class="form-signin">
        <form method="post" action="{{ route('register.perform') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            
            <h1 class="h3 fw-bold text-center pb-5"><i class="bi bi-envelope-plus"></i> Formulaire de contact</h1>
            <div class="alert alert-warning text-center">Tous les champs comportants un astérix (*) sont requis.</div>

            <div class="row mb-3">
                <div class="col">
                    <div class="form-group form-floating">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
                        <label for="floatingEmail">Adresse email</label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>
                        <label for="floatingUsername">Nom d'utilisateur / Pseudo</label>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="form-group form-floating">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required>
                        <label for="floatingPassword">Mot de passe</label>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required>
                        <label for="floatingConfirmPassword">Confirmer mot de passe</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-lg btn-primary w-25" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
@endsection