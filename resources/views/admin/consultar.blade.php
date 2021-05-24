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
                        <a class="nav-link" href="/consultar">
                            <i class="fas fa-chalkboard text-blue"></i>
                            <span class="nav-link-text">Consultar Sistemas</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/usuarios-registrados">
                            <i class="fas fa-chalkboard-teacher text-orange"></i>
                            <span class="nav-link-text">Permissões</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-server text-primary"></i>
                            <span class="nav-link-text">Servidor IDEOP</span>
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

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Cadastar novos sistemas</h3>
                            <hr class="my-0">
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-plus">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para cadastrar um novo sistema na plataforma.</h4>
                        <div>
                            <br><a href="/cadastrar-sistemas" class="btn btn-outline-primary ">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Consultar Sistemas Existentes</h3>
                            <hr class="my-0">
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-search">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para consultar sistemas existentes.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-primary ">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Alterar Dados de Sistemas Existentes</h3>
                            <hr class="my-0">
                        </div>
                        <div class="col-auto">
                            <div class="far fa-edit">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para alterar dados de sistemas existentes.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-primary ">Alterar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Excluir Sistemas Existentes</h3>
                            <hr class="my-0">
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-trash-alt">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para excluir algum sistema existente.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-danger">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection

@section('scripts')

@endsection