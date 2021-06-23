@extends('layouts.master')

@section('title')
Página Inicial
@endsection

@section('content')
<!-- Header -->
<!-- Header -->
<hr class="my-0">
<br>


<img src="/assets/img/brand/brasao-do-brasil-republica.png" class="rounded mx-auto d-block " alt="Imagem responsiva"> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col ">
                            <h3 class="card-title text-uppercase text-default mb-0 ">Pesquisar</h3>

                        </div>
                        <div class="col-auto">
                            <div class="fas fa-search">
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="my-0">
                <br>

                <div class="row">
                    <div class="col ">
                        <form class="navbar-search navbar-search-light form-inline mr-sm-6" id="navbar-search-main">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

















@endsection

@section('scripts')



@endsection