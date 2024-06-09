@extends('admin.layout.default')

@section('title', 'Perfil')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Perfil</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="Perfil-header">
                        <div class="row align-items-center">
                            <div class="col-auto Perfil-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="{{asset('assets/img//avatar/avatar-5.jpg')}}" width="120">
                                </a>
                            </div>
                            <div class="col ms-md-n2 Perfil-user-info">
                                <h4 class="user-name mb-0">Jelson Rocha</h4>
                                <h6 class="text-muted">Admin</h6>
                                <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Benguela, Angola
                                </div>
                                <div class="about-text">Lorem ipsum dolor sit amet.</div>
                            </div>
                            <div class="col-auto Perfil-btn">
                                <a href="{{route('edit-perfil')}}" class="btn btn-primary">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="Perfil-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">Sobre mim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Senha</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content Perfil-tab-cont">

                        <div class="tab-pane fade show active" id="per_details_tab">

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Nome</p>
                                                <p class="col-sm-9">Jelson Rocha</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Data de Nascimento
                                                </p>
                                                <p class="col-sm-9">24 Jul 1983</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Telefone</p>
                                                <p class="col-sm-9">305-310-5857</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0">Endereço</p>
                                                <p class="col-sm-9 mb-0">Benguela<br>
                                                    Benguela,<br>
                                                    Angola<br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="password_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Alterar Senha</h5>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label>Senha antiga</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nova senha</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmar a senha</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <button class="btn btn-primary mt-3" type="submit">Salvar alterações</button>
                                            </form>
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
@endsection
