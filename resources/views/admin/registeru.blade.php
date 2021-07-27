@extends('layouts.master')

@section('title')
Editar Permissões
@endsection

@section('content')

<hr class="my-0">
<br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header "> Usuários Registrados </div>
                @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table">

                            <thead class=" text-black">
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Tipo de usuário</th>
                                <th>Email</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->usertype}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <a href="/edit/{{ $row->id }}" button type="button" class="btn btn-outline-success">Editar</a>
                                    </td>
                                    <td>
                                        <form action="/usuarios-deletados/ {{ $row->id }}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
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