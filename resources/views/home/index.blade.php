@extends('home.layout.default')
@section('title', 'Newspaper')

@section('content')

<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded">
                    <img src="{{asset('assets/img/news-1.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                    <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05 Comentários</a>
                        <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Partilhas</a>
                    </div>
                </div>
                <div class="border-bottom py-3">
                    <a href="#" class="display-4 text-dark mb-0 link-hover">Lorem Ipsum is simply dummy text of the printing</a>
                </div>
                <p class="mt-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley standard dummy text ever since the 1500s, when an unknown printer took a galley...
                </p>
                <div class="bg-light p-4 rounded">
                    <div class="news-2">
                        <h3 class="mb-4">Notícia Principal</h3>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="rounded overflow-hidden">
                                <img src="{{asset('assets/img/news-2.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <a href="#" class="h3">O teste ao primeiro telescópio.</a>
                                <p class="mb-0 fs-5"><i class="fa fa-clock"> Lida a 06 minutos</i> </p>
                                <p class="mb-0 fs-5"><i class="fa fa-eye"> 3.5 mil visualizações</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
               <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="rounded overflow-hidden">
                                <img src="{{asset('assets/img/news-3.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <a href="#" class="h4 mb-2">As melhores notícias do mercado.</a>
                                <p class="fs-5 mb-0"><i class="fa fa-clock"> Lida a 06 minutos</i> </p>
                                <p class="fs-5 mb-0"><i class="fa fa-eye"> 3.5 mil visualizações</i></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                        <small><i class="fa fa-clock"> Lida a 06 minutos</i> </small>
                                        <small><i class="fa fa-eye"> 3.5 mil visualizações</i></small>
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
<!-- Main Post Section End -->


<!-- Banner Start -->
<div class="container-fluid py-5 my-5" style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4 text-primary">IP-News</h1>
                <h1 class="mb-4">Receba as novas notícias semanais</h1>
                <p class="text-dark mb-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control w-100 py-3 rounded-pill" type="email" placeholder="Email">
                    <button type="submit" class="btn btn-primary py-3 px-5 position-absolute rounded-pill h-100" style="top: 0; right: 0;">Subscreva-se</button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="{{asset('assets/img/banner-img.jpg')}}" class="img-fluid rounded w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Últimas notícias Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4">Últimas notícias</h2>
        <div class="latest-news-carousel owl-carousel">
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover">por Jelson Rocha</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 09 Dezembro, 2024</small>
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
                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover">por Frederico Dúlio</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 08 de Agosto, 2024</small>
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
                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover">por Wandelson Silva</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>02 de Janeiro, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of...</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover">por Jelson Rocha</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
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
                        <a href="#" class="h4 ">Lorem Ipsum is simply dummy text of...</a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover">por Jelson Rocha</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Últimas notícias End -->


<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">O que há de novo?</h1>
                        <ul class="nav nav-pills d-inline-flex text-center">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 100px;">Desporto</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 100px;">Eventos</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 100px;">Politica</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 100px;">Tecnologia</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 100px;">Projectos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-4">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                            Desporto
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                    <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Desporto</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Desporto</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Desporto</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Desporto</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                            Eventos
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Eventos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                            Política
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Política</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Política</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Política</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Política</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Política</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                            Tecnológia
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Tecnológia</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Tecnológia</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Tecnológia</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Tecnológia</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Tecnológia</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                                            Projectos
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <a href="#" class="h4">World Happiness Report 2023: What's the highway to happiness?</a>
                                    </div>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 06 minutos</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Projectos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Projectos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Projectos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Projectos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Projectos</p>
                                                        <a href="#" class="h6">As melhores notícias do mercado.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-4">
                        <h2 class="my-4">Most Views News</h2>
                    </div>
                    <div class="whats-carousel owl-carousel">
                        <div class="latest-news-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{asset('assets/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">Por Wandelson Silva</a>
                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whats-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{asset('assets/img/news-6.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">Por Jelson Rocha</a>
                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whats-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{asset('assets/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">Por Frederico Dúlio</a>
                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whats-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{asset('assets/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">Por Wandelson Silva</a>
                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whats-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="{{asset('assets/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="#" class="h4">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="small text-body link-hover">Por Frederico Dúlio</a>
                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 lifestyle">
                        <div class="border-bottom mb-4">
                            <h1 class="mb-4">Estilo de Vida</h1>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="lifestyle-item rounded">
                                    <img src="{{asset('assets/img/lifestyle-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    <div class="lifestyle-content">
                                       <div class="mt-auto">
                                            <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a href="#" class="small text-white link-hover">Por Jelson Rocha</a>
                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="lifestyle-item rounded">
                                    <img src="{{asset('assets/img/lifestyle-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    <div class="lifestyle-content">
                                       <div class="mt-auto">
                                            <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a href="#" class="small text-white link-hover">Por Frederico Dúlio</a>
                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> 20 de Maio, 2024</small>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="my-4">Notícias Populares</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('assets/img/features-sports-1.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Desporto</p>
                                                    <a href="#" class="h6">
                                                        As melhores notícias do mercado.
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('assets/img/features-technology.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Tecnológia</p>
                                                    <a href="#" class="h6">
                                                        As melhores notícias do mercado.
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('assets/img/features-fashion.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Projectos</p>
                                                    <a href="#" class="h6">
                                                        As melhores notícias do mercado.
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('assets/img/features-life-style.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Estilo de Vida</p>
                                                    <a href="#" class="h6">
                                                        As melhores notícias do mercado.
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">Ver mais</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom my-3 pb-3">
                                            <h4 class="mb-0">Populares</h4>
                                        </div>
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Desporto</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Política</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Eventos</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Projectos</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Viagens académicas</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Outras notícias</span>
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
</div>
<!-- Most Populer News End -->
@endsection
