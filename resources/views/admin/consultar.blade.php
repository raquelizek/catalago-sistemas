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
                                    <a class="nav-link" href="/cadastrar-sistemas">
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


<div class="table-responsive">
    <table class="table align-items-center">
    <thead class="thead-light">
        <tr>
            <th scope="col">Project</th>
            <th scope="col">Budget</th>
            <th scope="col">Status</th>
            <th scope="col">Users</th>
            <th scope="col">Completion</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                </div>
            </th>
            <td>
                $2,500 USD
            </td>
            <td>
                <span class="badge badge-dot mr-4">
                  <i class="bg-warning"></i> pending
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../../assets/img/theme/angular.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                </div>
            </th>
            <td>
                $1,800 USD
            </td>
            <td>
                <span class="badge badge-dot">
                  <i class="bg-success"></i> completed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../../assets/img/theme/sketch.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Black Dashboard</span>
                    </div>
                </div>
            </th>
            <td>
                $3,150 USD
            </td>
            <td>
                <span class="badge badge-dot mr-4">
                  <i class="bg-danger"></i> delayed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">72%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../../assets/img/theme/react.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">React Material Dashboard</span>
                    </div>
                </div>
            </th>
            <td>
                $4,400 USD
            </td>
            <td>
                <span class="badge badge-dot">
                  <i class="bg-info"></i> on schedule
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">90%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../../assets/img/theme/vue.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                </div>
            </th>
            <td>
                $2,200 USD
            </td>
            <td>
                <span class="badge badge-dot mr-4">
                  <i class="bg-success"></i> completed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

</div>








@endsection

@section('scripts')

@endsection