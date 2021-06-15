@extends('layouts.master')

@section('title')
Editar Permissões
@endsection

@section('content')
<!-- Sidenav -->
<title>Editar Usuário</title>
<!-- Header -->
<!-- Header -->
<hr class="my-0">
<br>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Editar Permissões de Usuário</h3>
            </div>
            <div class="card-body">
                <form action="/usuarios-registrados/{{$users->id}}" method="post">
                    {{csrf_field() }}
                    {{method_field('put') }}
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="username" value="{{ $users->name }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label>Tipo de Usuário</label>
                            <br>
                            <select class="form-control" name="usertype">
                                <option value="admin">Administrador</option>
                                <option value="user">Usuário Comum</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn btn-outline-primary">Salvar</button>
                    <a href="/usuarios-registrados" class="btn btn-outline-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection