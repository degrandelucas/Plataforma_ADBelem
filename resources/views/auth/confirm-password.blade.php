@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Confirme sua Senha</span>

                        <div class="row">
                            <div class="col s12">
                                <p class="grey-text text-darken-1">
                                    {{ __('Esta é uma área segura do aplicativo. Confirme sua senha antes de continuar.') }}
                                </p>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="card-panel red lighten-4 red-text text-darken-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="validate @error('password') invalid @enderror" required autocomplete="current-password">
                                <label for="password">Senha</label>
                                @error('password')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col s12 right-align">
                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3">
                                        {{ __('Confirmar') }}
                                        <i class="material-icons right">check</i>
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
