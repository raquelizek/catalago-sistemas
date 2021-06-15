@extends('layouts.master')

@section('title')
Página Inicial
@endsection

@section('content')
<!-- Header -->
<!-- Header -->
<hr class="my-0">
<br>
<div class="container">
    <!-- Card stats -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Sistemas Urgentes</h3>
                            <hr class="my-0">
                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-exclamation-triangle">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para acessar os sistemas que são urgentes.</h4>
                        <div>
                            <br><a href="/cadastrar-sistemas" class="btn btn-outline-primary">Consultar</a>
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
                            <h3 class="card-title text-uppercase text-default mb-0 ">Sistemas em atenção</h3>
                            <hr class="my-0">
                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-lightbulb">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para acessar os sistemas em atenção.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-primary">Consultar</a>
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
                            <h3 class="card-title text-uppercase text-default mb-0 ">Sistemas Migrados</h3>
                            <hr class="my-0">
                            
                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-thumbs-up">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para visualizar os sistemas migrados.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-primary">Consultar</a>
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
                            <h3 class="card-title text-uppercase text-default mb-0 ">Sistemas para migração</h3>
                            <hr class="my-0">
                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="fas fa-trash-alt">
                            </div>
                        </div>
                        <br>
                        <h4 class="card-text  text-muted mb-0 "><br>Clique no botão abaixo para visualizar os sistemas a serem migrados.</h4>
                        <div>
                            <br><a href="#" class="btn btn-outline-primary">Consultar</a>
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