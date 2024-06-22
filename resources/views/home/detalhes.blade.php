@extends('home.layout.default')
@section('title', 'Artigos')
@section('artigo', 'active')

@section('content')

<!-- Single Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-dark">Artigos</li>
        </ol>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="#" class="h1 display-5">Artigos e revistas científcas.</a>
                </div>
                <!-- Artigos publicados Start -->
                <div class="container-fluid latest-news py-5">
                    <div class="container py-5">
                        <h2 class="mb-4">Artigos publicados</h2>
                        <div class="latest-news-carousel owl-carousel">
                            <div class="latest-news-item">
                                <div class="bg-light rounded">
                                    <div class="rounded-top overflow-hidden">
                                        <img src="{{asset('assets/img/w2.jpg')}}" class="img-zoomin img-fluid rounded-top w-101" alt="">
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <a href="#" class="h4">I.A e psicologia</a>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="small text-body link-hover">Autor: Dean A. Pormeleau</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data:13/03/1990</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-item">
                                <div class="bg-light rounded">
                                    <div class="rounded-top overflow-hidden">
                                        <img src="{{asset('assets/img/w1.jpg')}}" class="img-zoomin img-fluid rounded-top w-101" alt="">
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <a href="#" class="h4">Does Machine Learning work</a>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="small text-body link-hover">Autor:Associação Américana</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data: 24/07/2007</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-item">
                                <div class="bg-light rounded">
                                    <div class="rounded-top overflow-hidden">
                                        <img src="{{asset('assets/img/w4.jpg')}}" class="img-zoomin img-fluid rounded-top" alt="">
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <a href="#" class="h4">Inteligência Articial</a>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="small text-body link-hover">Autor: Alan Turing</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data: 17/07/1998</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest-news-item">
                                <div class="bg-light rounded">
                                    <div class="rounded-top overflow-hidden">
                                        <img src="{{asset('assets/img/w5.jpg')}}" class="img-zoomin img-fluid rounded-top w-101" alt="">
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <a href="#" class="h4 ">Medicina</a>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="small text-body link-hover">Autor: Ribeiro Pedro</a><br>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data: 23/09/2009</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Artigos publicados End -->
                <div class="bg-light p-4 mb-4 rounded border-start border-3 border-primary">
                    <h1 class="mb-2">Comentários sobre alguns arquivos ou revistas.</h1>
                </div>

                <div class="bg-light rounded p-4">
                    <div class="p-4 bg-white rounded mb-4">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>Jelson Rocha</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Resposta</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                <p class="mb-0">O uso de redes neurais convolucionais neste estudo foi particularmente inovador. A capacidade de capturar características espaciais nos dados melhorou significativamente a precisão do modelo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded mb-0">
                        <div class="row g-4">
                            <div class="col-3">
                                <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-9">
                                <div class="d-flex justify-content-between">
                                    <h5>Frederico Dúlio</h5>
                                    <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Resposta</a>
                                </div>
                                <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                <p class="mb-0">Os resultados mostram uma precisão de 95%, o que é impressionante. No entanto, seria interessante ver como o modelo se comporta em um conjunto de dados mais diversificado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded p-4 my-4">
                    <h4 class="mb-4">Deixe um comentário</h4>
                    <form action="#">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="form-control py-3" placeholder="Nome Completo">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control py-3" placeholder="Email do usuário">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Deixe aqui o seu comentário"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="form-control btn btn-primary py-3" type="button">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-3 rounded border">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="search" class="form-control p-3" placeholder="Pesquisar" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                            </div>
                            <h4 class="mb-4">Categorias</h4>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Ciencias da computação
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Engenharia Mecânica
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Lógistica e Transportes
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Médicina Geral
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Economia
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3 mb-4">
                                        Direito
                                    </a>
                                </div>
                            </div>
                            <h4 class="my-4">Noticias Populares</h4>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-computação-1.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">computação</p>
                                                <a href="#" class="h6">
                                                    Mantenha-se informado,  e aconpanhe as novas publicações
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-Big Data.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Big Data</p>
                                                <a href="#" class="h6">
                                                    Mantenha-se informado,  e aconpanhe as novas publicações
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-Engenharia dos Materiais.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Engenharia dos Materiais</p>
                                                <a href="#" class="h6">
                                                    Mantenha-se informado,  e aconpanhe as novas publicações
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="img/features-life-style.jpg" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Cadeia de suprimento</p>
                                                <a href="#" class="h6">
                                                    Mantenha-se informado,  e aconpanhe as novas publicações
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">Ver Mais</a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom my-3 pb-3">
                                        <h4 class="mb-0">Assuntos Sobre</h4>
                                    </div>
                                    <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Economia</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">computação</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Logistica</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Mecânica</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Matemática</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Direito</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Medicina</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Gestão</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->
@endsection
