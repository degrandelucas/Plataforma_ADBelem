{{-- Logo/Nome do Site (dentro do nav-wrapper) --}}
<a href="{{ url('/courses') }}" class="brand-logo hide-on-med-and-down">
    <img src="{{ asset('img/logo-curso.svg') }}" alt="logo-curso">
</a>

{{-- Ícone de Hamburguer para Mobile (sidenav-trigger) --}}
<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

{{-- Links do Menu para Desktop (escondidos em telas pequenas) --}}
<ul class="right hide-on-med-and-down">
    {{-- Links Visíveis para TODOS --}}
    <li><a href="{{ route('courses.index') }}">Cursos</a></li>
    <li><a href="{{ route('pages.about') }}">Sobre</a></li>

    @guest {{-- Se o usuário NÃO estiver logado --}}
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Registro</a></li>
    @endguest

    @auth {{-- Se o usuário ESTIVER logado --}}
        <li><a href="{{ route('dashboard') }}" @if(request()->routeIs('dashboard')) class="active" @endif>Dashboard</a></li>

        {{-- Dropdown para o usuário logado --}}
        <li>
            <a class="dropdown-trigger" href="#!" data-target="userDropdown">
                {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
            </a>
        </li>
    @endauth
</ul>

{{-- Script para inicializar Materialize Components (dropdown e sidenav) --}}
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa o Dropdown
            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdownElems, {
                constrainWidth: false
            });

            // Inicializa o Sidenav
            var sidenavElems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenavElems);
        });
    </script>
@endpush
