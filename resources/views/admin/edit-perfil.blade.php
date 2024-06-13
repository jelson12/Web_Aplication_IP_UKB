@extends('admin.layout.default')

@section('title', 'Editar Perfil')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Editar perfil</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('perfil') }}">Perfil</a>
                            </li>
                            <li class="breadcrumb-item active">Editar Perfil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">
                                        Informações pessoais
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Nome Completo <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text"
                                               name="nome_completo" autofocus
                                               placeholder="Digite o teu nome completo" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <input class="form-control" type="email"
                                               name="email"
                                               placeholder="examplo@ip.ukb.ao" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Endereço</label>
                                        <input class="form-control" type="text"
                                               name="endereco"
                                               placeholder="Digite o endereço" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Telefone<span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" name="telefone_principal"
                                               placeholder="Digite o teu telefone principal" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary mt-3 ms-2">Salvar</button>
                                    <a href="{{ route('perfil') }}" class="btn btn-danger mt-3">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
