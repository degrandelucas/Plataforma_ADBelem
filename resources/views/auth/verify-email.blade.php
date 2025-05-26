@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align indigo-text text-darken-3">Verifique seu Email</span>

                        <div class="row">
                            <div class="col s12">
                                <p class="grey-text text-darken-1">
                                    {{ __('Obrigado por se inscrever! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar? Caso não tenha recebido o e-mail, teremos prazer em enviar outro.') }}
                                </p>
                            </div>
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="card-panel green lighten-4 green-text text-darken-4">
                                {{ __('Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col s12 flex-container-between"> {{-- Adicionei uma classe para flexbox --}}
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn waves-effect waves-light indigo darken-3">
                                        {{ __('Reenviar Email de Verificação') }}
                                        <i class="material-icons right">email</i>
                                    </button>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn-flat waves-effect waves-light grey-text text-darken-1">
                                        {{ __('Sair') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
