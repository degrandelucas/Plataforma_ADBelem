@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Entrar</span>

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

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" name="email" class="validate @error('email') invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">Email</label>
                                @error('email')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="validate @error('password') invalid @enderror" required autocomplete="current-password">
                                <label for="password">Senha</label>
                                @error('password')
                                <span class="helper-text red-text">{{ $message }}</span>
                                @enderror
                            </div>

                            <p>
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                    <span>Lembrar-me</span>
                                </label>
                            </p>

                            <div class="row">
                                <div class="col s12 center-align">
                                    @if (Route::has('password.request'))
                                        <a class="btn-flat waves-effect waves-light grey-text text-darken-1" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif

                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3 ms-3"> {{-- 'ms-3' do Breeze é 'margin-left: 0.75rem' --}}
                                        {{ __('Entrar') }}
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12 center-align">
                                    <p>Não tem uma conta? <a href="{{ route('register') }}" class="indigo-text text-darken-3">Registre-se</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
