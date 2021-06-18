@extends('layouts.master')

@section('title')
Consultar Sistemas
@endsection



@section('content')
<hr class="my-0">
<br>
<div class="container">
    <div class="row justify">
        <div class="col-mt-12">
            <div class="card">
                <div class="card-header" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Consulta de Sistemas</h2>
                    <br>
                    <div class="col-7 text-left">
                        <a href="cadastrar-sistemas" class="btn btn-sm btn-outline-info text-info">Cadastrar Novo Sistema</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row justify-content-center align-items-center">
                        <h3>Sistemas Cadastrados</h3>
                    </div>
                    <br>
                    <div class="table-responsive ">
                        <table class="table">
                            <thead class=" text-black">
                                <tr>
                                    <th><b>Nome do Sistema</b></th>
                                    <th><b>Endereço do Sistema</b></th>
                                    <th><b>Área Demandante</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Informações Técnicas</b></th>
                                    <th><b>SEI</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sistemas as $row)
                                <tr>
                                    <td>{{$row->sistnm}}</td>
                                    <td>{{$row->endereco}}</td>
                                    <td>{{$row->diretsi}}</td>
                                    <td>{{$row->status}}</td>
                                    <td><a href="/info-tec" class="badge badge-danger">Informações Técnicas</a></td>
                                    <td><a href="#" class="badge badge-info">Processo do SEI</a></td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











@endsection

@section('scripts')


@endsection