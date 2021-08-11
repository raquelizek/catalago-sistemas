@extends('layouts.master')

@section('title')
Consultar Sistemas
@endsection



@section('content')

<br>
<div class="container-mt-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 90rem;">
                <div class="card-header border-0" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Últimos Sistemas Cadastrados</h2>
                    <br>
                    <div class="col-7 text-left">
                        <a href="cadastrar-sistemas" class="btn btn-sm btn-outline-info text-info">Cadastrar Novo Sistema</a>
                    </div>
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
                        <div class="table-sm table-responsive-sm" style="width: 75rem;">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th><b>Nome do Sistema</b></th>
                                        <th><b>Endereço do Sistema</b></th>
                                        <th><b>Área Demandante</b></th>
                                        <th><b>Status</b></th>
                                        <th><b>Informações Técnicas</b></th>
                                        <th><b>SEI</b></th>
                                    </tr>

                                </thead>
                                <tbody class="list">
                                    @foreach ($sistemasinicial as $row)

                                    <tr>
                                        <td><a href="/consultar-sist/{{$row->sistemasID}}"><b>{{$row->sistnm}}</b></a></td>
                                        <td>{{@$row->endereco}}</td>
                                        <td>{{@$row->diretsi}}</td>
                                        <td>{{@$row->status}}</td>
                                        <td><a href="/info-tec/{{$row->sistemasID}}" class="badge {{@$row->ambiente_hospedagem==''? 'badge-danger' : 'badge-success'}}">Informações Técnicas</a></td>
                                        <td><a href="/cadastar-sistemas/{{$row->sistemasID}}" class="badge badge-info">Processo do SEI</a></td>
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
</div>











@endsection

@section('scripts')


@endsection