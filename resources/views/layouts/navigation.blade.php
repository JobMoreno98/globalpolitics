<div class="sidebar">

    <ul class="nav-list">

        <li><!-- validaciones de usuario autenticado  si es un administrador o un usuario Editor-->
            @if (Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">{{ __('Principal') }}</span>
                </x-nav-link>
                <span class="tooltip">Principal</span>
        </li>

        <li>
            <x-nav-link :href="route('investigadores')" :active="request()->routeIs('investigadores')">
                <i class='bx bx-user'></i>
                <span class="links_name">{{ __('NAB') }}</span>
            </x-nav-link>
            <span class="tooltip">investigadores</span>
        </li>
        <li>

            <x-nav-link :href="route('eventos')" :active="request()->routeIs('eventos')">
                <i class='bx bx-calendar-event'></i>
                <span class="links_name">{{ __('Eventos') }}</span>
            </x-nav-link>
            <span class="tooltip">Eventos</span>
        </li>
        <li>
            <x-nav-link :href="route('noticias')" :active="request()->routeIs('noticias')">
                <i class='bx bx-news'></i>
                <span class="links_name">Noticias</span>
            </x-nav-link>
            <span class="tooltip">Noticias</span>
        </li>
        <li>
            <x-nav-link :href="route('galerias')" :active="request()->routeIs('galerias')">
                <i class='bx bx-image'></i>
                <span class="links_name">{{ __('Galeria') }}</span>
            </x-nav-link>
            <span class="tooltip">Galeria</span>
        </li>
        <li>
            <x-nav-link :href="route('requisitos1')" :active="request()->routeIs('requisitos1')">
                <i class='bx bx-laptop'></i>
                <span class="links_name">{{ __('Requisitos') }}</span>
            </x-nav-link>
            <span class="tooltip">Requisitos</span>
        </li>
        <li>
            <x-nav-link :href="route('estudiantes1')" :active="request()->routeIs('estudiantes1')">
                <i class='bx bx-pen'></i>
                <span class="links_name">{{ __('Estudiantes') }}</span>
            </x-nav-link>
            <span class="tooltip">Estudiantes</span>
        </li>
        <!-- validacion Administrador -->
        @if (Auth::user()->tipo == 'Administrador')
            <li>
                <x-nav-link :href="route('usuarios')" :active="request()->routeIs('usuarios')">
                    <i class='bx bx-user-plus'></i>
                    <span class="links_name">{{ __('Usuarios') }}</span>
                </x-nav-link>
                <span class="tooltip">Usuarios</span>
            </li>
            <!-- fin de validación de Administrador -->
        @endif
        <!-- fin del navigation Admin y Editor -->
        @endif
        <li>
        <li class="profile">
            <div class="profile-details">
                <div class="name_job">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out' id="log_out"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
