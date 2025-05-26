@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Registrar</span>

                        @if ($errors->any())
                            <div class="card-panel red lighten-4 red-text text-darken-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name" type="text" name="name" class="validate @error('name') invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name">
                                <label for="name">Nome</label>
                                @error('name')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" name="email" class="validate @error('email') invalid @enderror" value="{{ old('email') }}" required autocomplete="username">
                                <label for="email">Email</label>
                                @error('email')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="validate @error('password') invalid @enderror" required autocomplete="new-password">
                                <label for="password">Senha</label>
                                @error('password')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="validate @error('password_confirmation') invalid @enderror" required autocomplete="new-password">
                                <label for="password_confirmation">Confirmar Senha</label>
                                @error('password_confirmation')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col s12 center-align">
                                    <a class="btn-flat waves-effect waves-light grey-text text-darken-1" href="{{ route('login') }}">
                                        {{ __('Já cadastrado?') }}
                                    </a>
                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3 ms-4">
                                        {{ __('Registrar') }}
                                        <i class="material-icons right">person_add</i>
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
