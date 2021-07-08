@extends('layouts.master')

@section('title')
Informações dos Sistemas
@endsection

@section('content')

<br>
<tbody>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Nome Sistema</h3>
                </div>
                <br>
                <div class="card-title">
                    <div class="row justify-content-center align-items-center ">
                        <h3>Informações da Aréa de negócio</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <form action="/consultar-sist/{{$consultarsistema->sitt_id}}" method="get">
                            @foreach ($consultarsistema as $row)
                            @csrf
                            <tbody>
                                <tr>
                                    <th scope="row">Desenvolvedor</th>
                                    <td>{{$row->dev}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Atuação</th>
                                    <td>{{$row->atuacao}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Autenticação</th>
                                    <td>{{$row->auth}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>

</tbody>


@endsection

@section('scripts')

@endsection