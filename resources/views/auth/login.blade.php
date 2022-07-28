@extends('master')

@section('content')
    <div class="form-signin">
        <form method="post" action="{{ route('login.perform') }}">
            
            @csrf
            
            <h1 class="h3 mb-3 fw-bold text-center">Connexion</h1>

            @include('partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>
                <label for="floatingUsername">Email ou Nom d'utilisateur</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            
            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Mot de passe" required>
                <label for="floatingPassword">Mot de passe</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
            
        </form>
    </div>
@endsection