@extends('master')
@section('title') Messagerie  @endsection

@section('content')
    <div class="row bg-light p-5 rounded shadow">
        <div class="col text-center">
            @auth
                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif

                <h1><i class="bi bi-envelope-plus"></i> Liste des messages reçu des visiteurs</h1>
                <hr>
                <p class="lead">Cette page liste tous les messages reçus depuis le formulaire de contact du site. Vous pouvez consulter les messages et les supprimer.</p>
            @endauth
        </div>
        <div class="col col-msg overflow-auto">
            @foreach ($messages as $message)
                <div class="list-group rounded-0 m-2" data-bs-toggle="modal" data-bs-target="#message-{{ $message->id }}">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 truncate">{{ $message->subject }}</h5>
                        <small class="text-muted">Il y a 3 jours</small>
                        </div>
                        <p class="mb-1 truncate">{{ $message->message }}</p>
                        <small>Reçu de {{ $message->firstname }} {{ $message->lastname }}</small>
                    </a>
                </div>
                <div class="modal fade" id="message-{{ $message->id }}" tabindex="-1" aria-labelledby="message-{{ $message->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $message->subject }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <small>Reçu de {{ $message->firstname }} {{ $message->lastname }}</small>
                                <p>{{ $message->message }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <a href="{{ route('message.delete', ['id' => $message->id]) }}" onclick="return confirm('Etes-vous certain de vouloir supprimer ce message ?')" role="button" class="btn btn-danger">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection