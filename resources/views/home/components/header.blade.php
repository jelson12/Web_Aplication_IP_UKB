<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Modal Login Start -->
<div class="modal fade" id="authModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="loginSection" class="active">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" id="loginEmail" placeholder="Email" autofocus
                                name="email" required autocomplete="off" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="loginPassword" placeholder="Senha"
                                name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" btn btn-primary">Entrar</button>
                        </div>
                    </form>
                    <div class="d-md-flex justify-content-between mt-4">
                        <div class="mb-2 mb-md-0"><a class="fs-5" href="#" id="showRegister">Criar conta? </a>
                        </div>
                        <div><a class="text-inherit fs-5" href="#" id="showForgot">Esqueceu a senha?</a></div>
                    </div>
                </section>

                {{-- REGISTER --}}
                <section id="registerSection">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="registerName" placeholder="Nome"
                                name="name" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="registerEmail" placeholder="Email"
                                name="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="registerPassword" placeholder="Senha"
                                name="password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="registerPassword"
                                placeholder="Confirmar a senha" name="password_confirmation" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class=" btn btn-primary">Registrar</button>
                        </div>
                    </form>
                    <p class="mt-3">Já tem uma conta? <a class="fs-5" href="#" id="showLogin">Login</a></p>
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
                        <p class="mb-0 text-dark fs-6 fw-normal">Tendência</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="{{ asset('assets/img/features-fashion.jpg') }}"
                                class="img-fluid rounded-circle border border-3 border-primary me-2"
                                style="width: 30px; height: 30px;" alt="">
                            <a href="#">
                                <p class="text-dark mb-0 link-hover">Convênio entre a UKB e o banco BCI gera bolsa de
                                    estudos aos estudantes.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Route::has('login'))
        @auth
            @include('home.components.partials.menu1')
        @else
            @include('home.components.partials.menu')
        @endauth
    @endif

</div>
<!-- Navbar End -->
