@extends('layouts.main')

@section('title')
Consultar Sistemas
@endsection




@section('content')

<br>
<div class="container-mt-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 1150px;">
                <div class="card-header border-0" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Últimos Sistemas Cadastrados</h2>
                    <br>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/img/brand/258472.svg" class="rounded mx-auto d-block " width="100" height="100" alt="Imagem responsiva"> <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container" style="width: 100%;">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col ">
                                    <form class="navbar-search navbar-search-light  mr-sm-3" id="navbar-search-main">
                                        <div class="form-group mb-0">
                                            <div class="input-group input-group-alternative input-group-merge">
                                                <form action="/" method="get">
                                                    <div class="input-group-prepend">
                                                        <input class="form-control mr-sm-3" name="pesquisar" placeholder="Pesquisar" type="text">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-primary" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <br>

                        <br>
                        <style>
                            .w-10p {
                                width: 10% !important;
                            }
                        </style>

                        <div class="table-sm table-responsive" style="width: 90%;">
                            <div class="col-7 text-left">
                                <i class="fas fa-file-pdf"></i>
                                <button class="  btn btn-danger" a href=" URL::to('/pdf') ">Gerar PDF</button>
                                
                            </div>
                            <br>
                            <table class="table ">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-10p"><b>Nome do Sistema</b></th>
                                        <th class="w-10p"><b>Endereço do Sistema</b></th>
                                        <th class="w-10p"><b>Área Demandante</b></th>
                                        <th class="w-10p"><b>Status</b></th>
                                        <th class="w-10p"><b>Responsáveis</b></th>

                                    </tr>

                                </thead>
                                <tbody class="list">
                                    @foreach ($sistemasinicial as $row)

                                    <tr class="table">
                                        <td>
                                            <div style="width: 250px; overflow: hidden;">
                                                <a href="/consultar-sist/{{$row->sistemasID}}"><b>{{$row->sistnm}}</b></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 150px; overflow: hidden;">
                                                {{@$row->endereco}}
                                            </div>
                                        </td>
                                        <td>{{@$row->diretsi}}</td>
                                        <td>{{@$row->status}}</td>

                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center" style="width: 80%;">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

@endsection

@section('scripts')


@endsection