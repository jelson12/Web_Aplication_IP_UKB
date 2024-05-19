@extends('home.layout.default')
@section('title', '404')

@section('content')
<!-- 404 Start -->
<div class="container-fluid py-5">
    <div class="container py-5 text-center">
        <ol class="breadcrumb justify-content-center mb-5">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Páginas</a></li>
            <li class="breadcrumb-item active text-dark">404</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Página não encontrada</h1>
                <p class="mb-4">Oops, A página que você estava procurando não existe no nosso site! Volte a página inicial e tente procurar?</p>
                <a class="btn link-hover border border-primary rounded-pill py-3 px-5" href="{{route('home')}}">Voltar a página inicial</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->
@endsection
