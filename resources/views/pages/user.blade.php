@extends('home.layout.default1')
@section('title', 'User')
@section('user', 'active')

@section('content')
    <div class="p-6 container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 ">
                    <h3 class="mb-0 fw-bold">Overview</h3>
                </div>
            </div>
        </div>
        <div class="align-items-center row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="pt-20 rounded-top"
                            style="background-image:url('{{ asset('assets/img/profile-cover.jpg') }}') background-size: cover; background-repeat: no-repeat;">
                        </div>
                        <div class="bg-white rounded-bottom smooth-shadow-sm ">
                            <div class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10">
                                        <img src="{{ asset('assets/img/footer-2.jpg') }}"
                                            class="img-zoominimg-fluid rounded-circle w-100" alt=""
                                            class="avatar-xxl rounded-circle border border-4 border-white-color-40"><a
                                            class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Verified"
                                            href="/pages/profile#!"><img src="{{ asset('assets/img/checked-mark.svg') }}"
                                                alt="" height="30" width="30" class=""></a>
                                    </div>
                                    <div class="lh-1">
                                        <h2 class="mb-0">{{Auth::user()->name}}<a class="text-decoration-none"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Beginner" href="#"></a></h2>
                                        <p class="mb-0 d-block">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div><a class="btn btn-secondary d-none d-md-block" data-bs-toggle="modal"
                                        data-bs-target="#editarModal">Editar Perfil</a>
                                </div>
                                <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editarModalLabel">Editar Perfil</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="">
                                                    <div class="mb-3">
                                                        <input name="Id" value="" hidden>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nome" class="form-label">Nome</label>
                                                        <input type="text" class="form-control" id="nome"
                                                            aria-describedby="emailHelp" name="nome" value="">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            aria-describedby="emailHelp" name="email" value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="paginas" class="form-label">Telefone</label>
                                                        <input type="text" class="form-control" id="paginas"
                                                            aria-describedby="emailHelp" name="paginas" value=""
                                                            required>

                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <div class="form-group students-up-files nn">
                                                            <label>Carregar foto</label>
                                                            <div class="upload">
                                                                <input type="file" class="form-control" id="file"
                                                                    name="file" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="py-6">
            <div class="row">
                <div class="mb-6 col-xl-6 col-lg-12 col-md-12 col-12 nn">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sobre Mim</h4><span
                                class="text-uppercase fw-medium text-dark fs-5 ls-2">Bio</span>
                            <p class="mt-2 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var
                                ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                                interdum nulla, ut commodo diam libero vitae erat.</p>
                            <div class="row">
                                <div class="mb-5 col-12">
                                    <h6 class="text-uppercase fs-5 ls-2">Cargo</h6>
                                    <p class="mb-0">Theme designer at Bootstrap.</p>
                                </div>
                                <div class="mb-5 col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Telefone </h6>
                                    <p class="mb-0">+32112345689</p>
                                </div>
                                <div class="mb-5 col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Data de Nascimento </h6>
                                    <p class="mb-0">01.10.1997</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                                    <p class="mb-0">Dashui@gmail.com</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Endereço</h6>
                                    <p class="mb-0">Ahmedabad, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6 col-xl-6 col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Artigos</h4>
                        </div>
                        <div class="d-grid">
                            <button type="button" class=" btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#artigoModal">Publicar artigo</button>
                        </div>
                        <div class="modal fade" id="artigoModal" tabindex="-1" aria-labelledby="artigoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="artigoModalLabel">Adicionar Artigo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="">
                                            <div class="mb-3">
                                                <label for="titulo" class="col-form-label">Título:</label>
                                                <input type="text" class="form-control" id="titulo">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Descrição</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>

                                            <div class="col-12 col-sm-12">
                                                <div class="form-group students-up-files nn">
                                                    <label>Carregar foto</label>
                                                    <div class="upload">
                                                        <input type="file" class="form-control" id="file"
                                                            name="file" accept=".jpg,.jpeg,.png" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <div class="form-group students-up-files nn">
                                                    <label>Carregar arquivo</label>
                                                    <div class="upload">
                                                        <input type="file" class="form-control" id="file"
                                                            name="file" accept=".pdf" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Publicar</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Artigos Start -->
        <div class="container-fluid latest-news py-5">
            <div class="container py-5">
                <h2 class="mb-4">Artigos Recentes</h2>
                <div class="latest-news-carousel owl-carousel">
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Titulo...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">Autor</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>data</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Titulo...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">Autor</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>data</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4">Titulo...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">Autor</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>data</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-news-item">
                        <div class="bg-light rounded">
                            <div class="rounded-top overflow-hidden">
                                <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            </div>
                            <div class="d-flex flex-column p-4">
                                <a href="#" class="h4 ">Titulo...</a>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="small text-body link-hover">autor</a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>data</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Artigos End -->

        <script>
            "use strict";
            var o = "rtl" === $("html").attr("data-textdirection");
            @if (session('login'))
            toastr.success("{{ session('login') }}",
                "", {
                    closeButton: !0,
                    tapToDismiss: !0,
                    progressBar: !0,
                    positionClass: "toast-bottom-right",
                    rtl: o
                }
            );
            @endif
        </script>
    </div>
    @endsection
