<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>
        Tela Inicial
    </title>
    <!-- Favicon -->
    <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand pt-4" href="/dashboard">
                    Catálogo de Sistemas
                </a>
            </div>
            <hr class="my-0">
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
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-white border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                                        <img alt="Image placeholder" src="/assets/img/theme/usuarios-1.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm text-dark font-weight-bold">Usuário Administrador</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">


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
            <div class="col-md-12">
                <img src="/assets/img/brand/258472.svg" class="rounded mx-auto d-block " width="100" height="100" alt="Imagem responsiva"> <br>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col ">
                    <form class="navbar-search navbar-search-light  mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <a href="/"><span class="input-group-text"><i class=" fas fa-search"></i></span></a>
                                </div>
                                <input class="form-control mr-sm-3" placeholder="Pesquisar" type="text">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="card" style="width: 100rem;">
                <div class="card-body">
                    <h3 class="card-title">Últimos Sistemas Cadastrados</h3>
                    <div class="card-title">
                        <a href="consultar" button type="button" class="btn btn-outline-primary">Visualizar todos os Sistemas</a>

                    </div>
                    <div class="table-responsive ">
                        <table class="table">
                            <thead class=" text-black">
                                <tr>
                                    <th><b>Nome do Sistema</b></th>
                                    <th><b>Endereço do Sistema</b></th>
                                    <th><b>Área Demandante</b></th>
                                    <th><b>Intranet/Internet</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sistemasinicial as $row)
                                <tr>
                                    <td>{{$row->sistnm}}</td>
                                    <td>{{$row->endereco}}</td>
                                    <td>{{$row->diretsi}}</td>
                                    <td>{{$row->intra_inter}}</td>

                                    @endforeach
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>