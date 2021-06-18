@extends('layouts.master')

@section('title')
Informações Técnicas
@endsection


@section('content')


<hr class="my-0">
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Adicionar Informações Técnicas</h2>
                    <br>
                    <button type="submit" class="btn btn btn-outline-primary">Salvar</button>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center align-items-center ">
                        <h3>Informações Técnicas</h3>
                    </div>
                    <hr class="my-3">
                    <br>
                    <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Ambiente Atual da Hospedagem</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Linguagem/Versão</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Framework</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Tipo de Banco de Dados/Versão</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Nome do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">IP Hospedagem da Aplicação</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">IP Hospedagem do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tamanho da Aplicação</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tamanho da Base de Dados</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>

                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-17" class="custom-control-input" id="customRadio17" type="radio">
                                            <label class="custom-control-label" for="customRadio17">Sim</label>

                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-18" class="custom-control-input" id="customRadio18" type="radio">
                                            <label class="custom-control-label" for="customRadio18">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Sistemas Integrados</label>
                                        <input type="text" class="form-control" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outras bases de dados?</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-12" class="custom-control-input" id="customRadio12" type="radio">
                                            <label class="custom-control-label" for="customRadio12">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-13" class="custom-control-input" id="customRadio13" type="radio">
                                            <label class="custom-control-label" for="customRadio13">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Base de Dados Integrados</label>
                                        <input type="text" class="form-control" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outros serviços?</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-15" class="custom-control-input" id="customRadio15" type="radio">
                                            <label class="custom-control-label" for="customRadio15">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-16" class="custom-control-input" id="customRadio16" type="radio">
                                            <label class="custom-control-label" for="customRadio16">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Serviços Integrados</label>
                                        <input type="text" class="form-control" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Endereço no GITINSS</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Autenticação</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 md-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Observação</label>
                                        <textarea class="form-control form-control-alternative" rows="3" placeholder="Adicione algum comentário aqui."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection