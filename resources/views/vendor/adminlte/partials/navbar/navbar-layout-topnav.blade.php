<nav id="navBarAiex" class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand-md') }}
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}">
    {{-- style="background: linear-gradient(15deg, #11998ebe, #39be6cb7, #11998ebe, #0c857bc5" --}}

    <div class="{{ config('adminlte.classes_topnav_container', 'container') }}">

        {{-- Navbar brand logo --}}
        @if(config('adminlte.logo_img_xl'))
            @include('adminlte::partials.common.brand-logo-xl')
        @else
            @include('adminlte::partials.common.brand-logo-xs')
        @endif

        {{-- Navbar toggler button --}}
        <button class="order-1 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span id="toggle-icon" class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar collapsible menu --}}
        <div class="order-3 collapse navbar-collapse" id="navbarCollapse">
            {{-- Navbar left links --}}
            <ul class="nav navbar-nav">
                {{-- Configured left links --}}
                @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

                {{-- Custom left links --}}
                @yield('content_top_nav_left')
            </ul>
        </div>

        {{-- Navbar right links --}}
        <ul class="order-1 ml-auto navbar-nav order-md-3 navbar-no-expand">
            {{-- Custom right links --}}
            @yield('content_top_nav_right')

            {{-- resources/views/layouts/app.blade.php --}}
            <form action="#" method="POST" class="form-inline">
                @csrf
                <select name="semester" class="form-select form-select-sm">
                    @foreach($semesters as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->identificador }}</option>
                    @endforeach
                </select>
                {{-- <button type="submit" class="ml-2 btn btn-primary">Aplicar</button> --}}
            </form>

            {{-- Configured right links --}}
            @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

            {{-- User menu link --}}
            @if(Auth::user())
                @if(config('adminlte.usermenu_enabled'))
                    @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
                @else
                    @include('adminlte::partials.navbar.menu-item-logout-link')
                @endif
            @endif

            {{-- Right sidebar toggler link --}}
            @if(config('adminlte.right_sidebar'))
                @include('adminlte::partials.navbar.menu-item-right-sidebar-toggler')
            @endif
        </ul>

    </div>

</nav>
