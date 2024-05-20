@extends('home.layout.default')
@section('title', 'Newspaper')
@section('contacto', 'active')

@section('content')

<!-- Contact Us Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-light rounded p-5">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="">
                        <div class="rounded">
                            <iframe class="rounded w-100"
                            style="height: 425px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1986.640258294833!2d13.512566!3d-12.4393632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bae2b35b459d319%3A0x429095b0d7fc3b7c!2sUKB%20-%20Campus%20Universit%C3%A1rio%20da%20Catumbela!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="" class="mb-4">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="name" placeholder="Nome">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="w-100 form-control border-0 py-3" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="phone" placeholder="Nº de telefone">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="w-100 form-control border-0 py-3" name="subject" placeholder="Assunto">
                            </div>
                            <div class="col-12">
                                <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="w-100 btn btn-primary form-control py-3" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Endereço</h4>
                                    <p class="mb-0">UKB Catumbela-Benguela</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Envie um email</h4>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telefone</h4>
                                    <p class="mb-0">+244 940733032</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-share-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Partilhe</h4>
                                    <div class="d-flex">
                                        <a class="me-3" href=""><i class="fab fa-twitter text-dark link-hover"></i></a>
                                        <a class="me-3" href=""><i class="fab fa-facebook-f text-dark link-hover"></i></a>
                                        <a class="me-3" href=""><i class="fab fa-youtube text-dark link-hover"></i></a>
                                        <a class="" href=""><i class="fab fa-linkedin-in text-dark link-hover"></i></a>
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
<!-- Contact Us End -->

@endsection
