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
            <div class="collapse navbar-collapse bg-transparent py-3"  id="navbarCollapse">
                <div class="navbar-nav mx-auto border-top">
                    <a href="{{route('home')}}" class="nav-item nav-link @yield("home")">Home</a>
                    <a href="{{route('detalhes')}}" class="nav-item nav-link @yield("artigo")">Artigos</a>
                    <a href="{{route('contactos')}}" class="nav-item nav-link @yield("contacto")">Contactos</a>
                    <div class="d-grid"><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#authModal">Login</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
