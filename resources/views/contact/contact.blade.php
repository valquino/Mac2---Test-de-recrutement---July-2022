@extends('master')

@section('content')

    <div class="row bg-light p-5 shadow rounded gx-5 gs-0">
        <div class="col-4 mt-3">
            <h1 class="fs-4 fw-bold"><i class="bi bi-envelope-plus"></i> Formulaire de contact</h1>
            <hr>
            <p class="lead">Vous pouvez nous contacter en remplissant le formulaire çi-contre. Vos données d'utilisateur sont déjà préremplies.</p>
        </div>
        <div class="col-8" id="app">
            <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    {{Session::get('success')}}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.perform') }}">
            <!-- <form method="POST" action="/contact" @submit.prevent="onSubmit"> -->
            @csrf

                <div :class="['form-group', allerros.name ? 'has-error' : '']" >

                <div class="alert alert-warning text-center">Tous les champs comportants un astérix (*) sont requis.</div>
                
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="firstname" v-model="form.firstname" required autofocus>
                            <label for="floatingFirstname">Prénom *</label>
                            @if ($errors->has('firstname'))
                                <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>
                    </div>
                    <span v-if="allerros.firstname" :class="['label label-danger']">@{{ allerros.firstname[0] }}</span>


                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="lastname" v-model="form.lastname" required>
                            <label for="floatingLastname">Nom *</label>
                            @if ($errors->has('lastname'))
                                <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" v-model="form.email" required>
                            <label for="floatingEmail">Adresse email *</label>
                            <div id="emailHelp" class="form-text">Soyez rassuré, nous ne partagerons jamais votre email avec des tiers.</div>
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone" v-model="form.phone" required>
                            <label for="floatingPhone">Téléphone *</label>
                            @if ($errors->has('phone'))
                                <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="addresse" value="{{ old('addresse') }}" placeholder="addresse" v-model="form.addresse">
                            <label for="floatingAddresse">Adresse</label>
                            @if ($errors->has('addresse'))
                                <span class="text-danger text-left">{{ $errors->first('addresse') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" placeholder="name@example.com" v-model="form.postal_code">
                            <label for="floatingPostal_code">Code Postal </label>
                            @if ($errors->has('postal_code'))
                                <span class="text-danger text-left">{{ $errors->first('postal_code') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="city" v-model="form.city">
                            <label for="floatingCity">Ville</label>
                            @if ($errors->has('city'))
                                <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="name@example.com" v-model="form.subject" required>
                            <label for="floatingSubject">Objet *</label>
                            @if ($errors->has('subject'))
                                <span class="text-danger text-left">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group form-floating">
                            <textarea class="form-control" name="message" placeholder="message" v-model="form.message" required>{{ old('message') }}</textarea>
                            <label for="floatingMessage">Votre message *</label>
                            @if ($errors->has('message'))
                                <span class="text-danger text-left">{{ $errors->first('comment') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <span v-if="success" :class="['label label-success']">Record submitted successfully!</span>
                <div class="text-center">
                    <button class="btn btn-lg btn-primary w-25" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    const app = new Vue({
        el: '#app',
        data: {
            form: {
                firstname : '',
                lastname : '',
            },
            allerros: [],
            success : false,    
        },
        methods : {
            onSubmit() {
                dataform = new FormData();
                dataform.append('firstname', this.form.firstname);
                dataform.append('lastname', this.form.lastname);
                dataform.append('email', this.form.email);
                dataform.append('phone', this.form.phone);
                dataform.append('addresse', this.form.addresse);
                dataform.append('postal_code', this.form.postal_code);
                dataform.append('city', this.form.city);
                dataform.append('subject', this.form.subject);
                dataform.append('message', this.form.message);
                console.log(this.form.firstname);
                axios.post('/vuevalidation/form', dataform).then( response => {
                    console.log(response);
                    this.allerros = [];
                    this.form.firstname = '';
                    this.form.lastname = '';
                    this.form.email = '';
                    this.form.phone = '';
                    this.form.addresse = '';
                    this.form.postal_code = '';
                    this.form.city = '';
                    this.form.subject = '';
                    this.form.message = '';
                    this.success = true;
                } ).catch((error) => {
                        this.allerros = error.response.data.errors;
                        this.success = false;
                });
            }
        }
    });
    </script>
@endsection