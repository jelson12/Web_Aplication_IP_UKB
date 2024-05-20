@extends('home.layout.default')
@section('title', 'Newspaper')
@section('home', 'active')

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
                    <a href="#" class="display-4 text-dark mb-0 link-hover">Titulo the printing</a>
                </div>
                <p class="mt-3 mb-4">Publicações Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley standard dummy text ever since the 1500s, when an unknown printer took a galley...
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
                <p class="text-dark mb-4 pb-2">Publicações Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
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


<!-- Artigos Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4">Artigos</h2>
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


<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-9">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">Sobre</h1>
                        <ul class="nav nav-pills d-inline-flex text-center">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 100px;">Computação</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 100px;">Mecânica</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 100px;">Médicina</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 100px;">Direito</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 100px;">Lógistica</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-12">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img src="{{asset('assets/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                    <div class="my-4">
                                        <a href="#" class="h4">Publicações</a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> Lida a 6 min</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5 mil visualizações</a>
                                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comentários</a>
                                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                                    </div>
                                    <p class="my-4">Aqui você encontra as ultimas informações cientificas e academicas...
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
                                        <a href="#" class="h4">Publicações</a>
                                    </div>
                                    <p class="mt-4">Publicações Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
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
                                        <a href="#" class="h4">Publicações</a>
                                    </div>
                                    <p class="mt-4">Publicações Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy..
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
                                        <a href="#" class="h4">Publicações</a>
                                    </div>
                                    <p class="mt-4">Publicações Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
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
                                    <p class="mt-4">Publicações Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy
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
                        <h2 class="my-4">Revistas</h2>
                    </div>
                    <!-- Artigos Start -->
                    <div class="container-fluid latest-news py-5">
                        <div class="container py-5">
                            <h2 class="mb-4">Artigos</h2>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most Populer News End -->
@endsection
