<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
<!-- Modal start -->
<div class="modal fade" id="authModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="loginSection" class="active">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="loginEmail" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="loginPassword" placeholder="Senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" btn btn-primary">Entrar</button>
                        </div>
                    </form>
                    <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0"><a class="fs-5" href="#" id="showRegister">Criar conta? </a></div>
                                    <div><a class="text-inherit fs-5" href="#" id="showForgot">Esqueceu a senha?</a></div>
                                </div>
                </section>

                <section id="registerSection">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="registerName" placeholder="Nome" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="registerEmail" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="registerPassword" placeholder="Senha" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="registerPassword" placeholder="Confirmar a senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" btn btn-primary">Registrar</button>
                        </div>
                    </form>
                    <p class="mt-3">Já tem uma conta? <a class="fs-5" href="#" id="showLogin">Entre</a></p>
                </section>

                <section id="forgotSection">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="forgotEmail" placeholder="Email" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" btn btn-primary">Recuperar senha</button>
                        </div>
                    </form>
                    <p class="mt-3"><a href="#" class="fs-5" id="backToLogin">Entre</a></p>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-white d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-dark d-flex align-items-center">
                        <p class="mb-0 text-dark fs-6 fw-normal">Trending</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="{{asset('assets/img/features-fashion.jpg')}}" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                            <a href="#"><p class="text-dark mb-0 link-hover">Newsan unknown printer took a galley of type andscrambled Newsan.</p></a>
                        </div>
                    </div>
                </div>
                <div class="top-link flex-lg-wrap">
                    <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span class="text-body">Tuesday, Sep 12, 2024</span></i>
                    <div class="d-flex icon">
                        <p class="mb-0 text-white me-2">Siga-nos:</p>
                        <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                        <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                        <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-transparent">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl" >
                <a href="{{route('home')}}" class="navbar-brand mt-3">
                    <p class="text-light display-6 mb-2" style="line-height: 0;">Newsers</p>
                    <small class="text-dark fw-normal" style="letter-spacing: 12px;">Nespaper</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-light"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent py-3"  id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('detalhes')}}" class="nav-item nav-link">Artigos</a>
                        <a href="{{route('404')}}" class="nav-item nav-link">404 Page</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="#" class="dropdown-item">Dropdown 1</a>
                                <a href="#" class="dropdown-item">Dropdown 2</a>
                                <a href="#" class="dropdown-item">Dropdown 3</a>
                                <a href="#" class="dropdown-item">Dropdown 4</a>
                            </div>
                        </div>
                        <a href="{{route('contactos')}}" class="nav-item nav-link">Contactos</a>
                        <div class="d-grid"><button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#authModal">Login</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
