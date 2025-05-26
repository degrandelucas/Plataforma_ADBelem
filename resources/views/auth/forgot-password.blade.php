@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Esqueceu a Senha?</span>

                        <div class="row">
                            <div class="col s12">
                                <p class="grey-text text-darken-1">
                                    {{ __('Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um link para redefinição de senha que permitirá que você escolha uma nova.') }}
                                </p>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="card-panel green lighten-4 green-text text-darken-4">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="card-panel red lighten-4 red-text text-darken-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" name="email" class="validate @error('email') invalid @enderror" value="{{ old('email') }}" required autofocus>
                                <label for="email">Email</label>
                                @error('email')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col s12 right-align"">
                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3">
                                        {{ __('Email para Redefinir Senha') }}
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
