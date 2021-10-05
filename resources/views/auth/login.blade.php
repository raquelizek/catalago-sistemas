@extends('layouts.user')

@section('title')
Login
@endsection

@section('content')

<body class="bg-secondary">
    <div class="main-content">
        <div class="header bg-gradient-default py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Catálogo de Sistemas</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="/assets/img/brand/258472.svg" class="rounded mx-auto d-block " width="100" height="100" alt="Imagem responsiva"> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header text-center "><b>{{ __('Formulário de login') }}</b></div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form method="POST" action="{{ route('login') }}" >
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-default">
                                            {{ __('Login') }}
                                        </button>
                                        
                                        <button type="submit" href="/register" class="btn btn-default">
                                            {{ __('Registrar-se') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




@endsection