@extends('layouts.master')

@section('title')
Consultar Sistemas
@endsection


@section('content')

<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="/dashboard">
                <img src="assets/img/brand/inss-logo-4.png" class="navbar-brand-img" alt="..."> <br>
                Catálogo de Sistemas
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="fas fa-brain text-green"></i>
                            <span class="nav-link-text">Página Inicial</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fas fa-chalkboard text-blue"></i>
                            <span class="nav-link-text">Sistemas</span>
                        </a>

                        <div class="collapse" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/consultar">
                                        Catálogo de Sistemas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consultar">
                                        Gestão de Sistemas
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/usuarios-registrados">
                            <i class="fas fa-chalkboard-teacher text-orange"></i>
                            <span class="nav-link-text">Permissões</span>
                        </a>
                    </li>

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Prioridades</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                            <i class="far fa-circle text-danger"></i>
                            <span class="nav-link-text">Urgente</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                            <i class="far fa-circle text-warning"></i>
                            <span class="nav-link-text">Atenção</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                            <i class="far fa-circle text-primary"></i>
                            <span class="nav-link-text">Informal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                            <i class="fas fa-box-open"></i>
                            <span class="nav-link-text">Requisitos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                            <i class="far fa-address-card"></i>
                            <span class="nav-link-text">Responsáveis</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-white border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Pesquisar" type="text">
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="../../assets/img/theme/usuarios-1.png">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm text-dark font-weight-bold">Usuário Administrador</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bem vindo</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Configurações</span>
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-door-open"></i>
                                <span>Sair</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<hr class="my-0">
<br>





<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">

            <div class="card-header" class="card-title text-uppercase text-default mb-0 ">
                <h2 class="card-title text-uppercase text-default mb-0 ">Adicionar Informações Técnicas</h2>
                <br>
                <button type="submit" class="btn btn btn-outline-primary">Salvar</button>

            </div>
            <div class="card-body">
                <div class="row justify-content-center align-items-center ">
                    <h3>Informações Técnicas</h3>
                </div>
                <hr class="my-3">
                <br>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Ambiente Atual da Hospedagem</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Linguagem/Versão</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Framework</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Tipo de Banco de Dados/Versão</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Nome do Banco</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">IP Hospedagem da Aplicação</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">IP Hospedagem do Banco</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>

                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">
                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Sistemas Integrados</label>
                                    <input type="text" class="form-control" disabled />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">

                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Sistemas Integrados</label>
                                    <input type="text" class="form-control" disabled />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui integração com outros bancos de dados?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">

                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Banco de Dados Integrados</label>
                                    <input type="text" class="form-control" disabled />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui integração com outras base de dados?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">

                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Base de Dados Integrados</label>
                                    <input type="text" class="form-control" disabled />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui integração com outros serviços?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">

                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Serviços Integrados</label>
                                    <input type="text" class="form-control" disabled />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Endereço no GITINSS</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Autenticação</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 md-8">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-name">Observação</label>
                                <textarea class="form-control form-control-alternative" rows="3" placeholder="Adicione algum comentário aqui."></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection