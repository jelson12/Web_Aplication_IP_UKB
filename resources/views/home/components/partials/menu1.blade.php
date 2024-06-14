<div class="container-fluid bg-transparent">
    <div class="container px-0">
        <nav class="navbar navbar-light navbar-expand-xl" >
            <a href="{{route('home')}}" class="navbar-brand mt-3">
                <p class="text-light display-6 mb-2" style="line-height: 0;">IP-News</p>
                <small class="text-dark fw-normal" style="letter-spacing: 12px;">Newspaper</small>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-light"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent py-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto border-top">
                    <a href="{{route('home')}}" class="nav-item nav-link @yield("home")">Home</a>
                    <li class="nav-item dropdown has-arrow new-user-menus">
                        <a href="#" class="dropdown-toggle nav-link d-flex align-items-center" data-bs-toggle="dropdown">Artigos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('user.dashboard')}}">Meus artigos</a>
                            <a class="dropdown-item" href="#">Outros artigos</a>
                        </div>
                    </li>
                    <a href="{{route('contactos')}}" class="nav-item nav-link @yield("contacto")">Contactos</a>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown has-arrow new-user-menus">
                        <a href="#" class="dropdown-toggle nav-link d-flex align-items-center" data-bs-toggle="dropdown">
                            <img class="rounded-circle" src="{{asset('assets/img/avatar/avatar-10.jpg')}}" width="31" alt="Soeng Souy">
                            <div class="user-text ms-2">
                                <h6 class="mb-0 text-nowrap">{{Auth::user()->name}}</h6>
                            </div>
                        </a>
                        <div class="dropdown-menu">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>
