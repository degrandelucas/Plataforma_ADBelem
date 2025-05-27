{{-- resources/views/layouts/navigation.blade.php (Convertido para Materialize CSS) --}}

<nav class="indigo darken-3">
    <div class="nav-wrapper container">
        <a href="{{ route('dashboard') }}" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('dashboard') }}" @if(request()->routeIs('dashboard')) class="active" @endif>Dashboard</a></li>

            {{-- Dropdown para o usuário logado --}}
            <li>
                <a class="dropdown-trigger" href="#!" data-target="userDropdown">
                    {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
        </ul>
    </div>
</nav>

{{-- Estrutura do Dropdown (deve estar fora da nav, geralmente no final do body ou antes do script Materialize) --}}
<ul id="userDropdown" class="dropdown-content">
    <li><a href="{{ route('profile.edit') }}" class="indigo-text text-darken-3">Perfil</a></li>
    <li class="divider"></li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="indigo-text text-darken-3">Sair</a>
        </form>
    </li>
</ul>

{{-- Sidenav para Mobile --}}
<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('dashboard') }}" class="indigo-text text-darken-3">Dashboard</a></li>
    <li class="divider"></li>
    <li>
        <a href="{{ route('profile.edit') }}" class="indigo-text text-darken-3">Perfil ({{ Auth::user()->name }})</a>
    </li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="indigo-text text-darken-3">Sair</a>
        </form>
    </li>
</ul>

{{-- Script para inicializar Materialize Components (dropdown e sidenav) --}}
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa o Dropdown
            var dropdownElems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(dropdownElems, {
                constrainWidth: false // Opcional: para o dropdown não ser limitado pela largura do gatilho
            });

            // Inicializa o Sidenav
            var sidenavElems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenavElems);
        });
    </script>
@endpush
