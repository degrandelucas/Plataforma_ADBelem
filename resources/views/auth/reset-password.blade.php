@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Redefinir Senha</span>

                        @if ($errors->any())
                            <div class="card-panel red lighten-4 red-text text-darken-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" name="email" class="validate @error('email') invalid @enderror" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                                <label for="email">Email</label>
                                @error('email')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">lock_open</i>
                                <input id="password" type="password" name="password" class="validate @error('password') invalid @enderror" required autocomplete="new-password">
                                <label for="password">Nova Senha</label>
                                @error('password')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="validate @error('password_confirmation') invalid @enderror" required autocomplete="new-password">
                                <label for="password_confirmation">Confirmar Nova Senha</label>
                                @error('password_confirmation')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col s12 right-align">
                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3">
                                        {{ __('Redefinir Senha') }}
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
