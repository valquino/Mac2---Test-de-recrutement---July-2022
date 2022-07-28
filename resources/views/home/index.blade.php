@extends('master')
@section('title') Accueil du site  @endsection

@section('content')
    <div class="row bg-light p-5 rounded">
        <div class="col text-center">
            @auth

                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif

                <h1>Dashboard</h1>
                <p class="lead">Seuls les utilisateurs authentifiés peuvent accéder à cette page.<br /> Vous pouvez désormais accéder à la messagerie du site.</p>
            @endauth

            @guest
            <h1>Accueil</h1>
            <p class="lead">Vous êtes sur la page d'accueil.<br />Vous pouvez remplir le formulaire de contact pour nous envoyer un message ou vous connecter pour gérer votre compte et consultez vos messages.</p>
            @endguest
        </div>
    </div>
@endsection