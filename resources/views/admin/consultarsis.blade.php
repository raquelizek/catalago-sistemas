@extends('layouts.master')

@section('title')
Consultar Sistemas
@endsection

@section('content')

<hr class="my-0">
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Consultar Sistemas Cadastrados</h2>
                    <br>
                </div>
                <form action="/salvarsistema" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center ">
                            <h3>Informações da Aréa de negócio</h3>
                        </div>
                        <hr class="my-3">
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Desenvolvedor</label>
                                    <input type="text" name="dev" id="dev" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Atuação</label>
                                    <input type="text" name="atuacao" id="atuacao" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Autenticação</label>
                                    <input type="text" name="auth" id="auth" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label " for="">Diretoria (Sigla)</label>
                                    <input type="text" name="diretsi" id="diretsi" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Sistema (Nome)</label>
                                    <input type="text" name="sistnm" id="sistnm" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Sistema (Sigla)</label>
                                    <input type="text" name="sissig" id="sissig" class="form-control " disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">DNS</label>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-5" class="custom-control-input" id="customRadio5" type="radio">
                                        <label class="custom-control-label" for="customRadio5">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-6" class="custom-control-input" id="customRadio6" type="radio">
                                        <label class="custom-control-label" for="customRadio6">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">PDTI</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Acesso Central</label>
                                    <input type="text" name="gac" id="gac" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Sistemas</label>
                                    <input type="text" name="gds" id="gds" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Negócio Titular</label>
                                    <input type="text" name="gnt" id="gnt" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 1 -->
                                    <input type="text" name="siapegnt" id="siapegnt" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Negócio Substituto</label>
                                    <input type="text" name="gns" id="gns" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 2 -->
                                    <input type="text" name="siapegns" id="siapegns" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Informação Titular</label>
                                    <input type="text" name="git" id="git" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 3 -->
                                    <input type="text" name="siapegit" id="siapegit" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor da Informação Substituto </label>
                                    <input type="text" name="gis" id="gis" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 4 -->
                                    <input type="text" name="siapegis" id="siapegis" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Possui processos gerados no SEI?</label>

                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-9" class="custom-control-input" id="customRadio9" type="radio">
                                        <label class="custom-control-label" for="customRadio9">Sim</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3 ">
                                        <input name="custom-radio-10" class="custom-control-input" id="customRadio10" type="radio">
                                        <label class="custom-control-label" for="customRadio10">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Número do Processo</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12 md-8">
                            <div class="form-group focused">
                                <label class="form-control-label" for="">Observação</label>
                                <textarea class="form-control form-control-alternative" name="obsv" id="obsv" rows="3" disabled></textarea>
                            </div>
                        </div>
                    </div>
                



                <hr class="my-3">
                    <div class="row justify-content-center align-items-center ">
                        <h3>Informações Técnicas</h3>
                    </div>
                    <hr class="my-3">
                    <br>
                   
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Ambiente Atual da Hospedagem</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Linguagem/Versão</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Framework</label>
                                        <input type="text" name="name" id="input-name" class="form-control"disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tipo de Banco de Dados/Versão</label>
                                        <input type="text" name="name" id="input-name" class="form-control"disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nome do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control "disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">IP Hospedagem da Aplicação</label>
                                        <input type="text" name="name" id="input-name" class="form-control "disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">IP Hospedagem do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control "disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group ">
                                        <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>

                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-7" class="custom-control-input" id="customRadio7" type="radio">
                                            <label class="custom-control-label" for="customRadio7">Sim</label>

                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-8" class="custom-control-input" id="customRadio8" type="radio">
                                            <label class="custom-control-label" for="customRadio8">Não</label>
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
                                        <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>

                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-7" class="custom-control-input" id="customRadio9" type="radio">
                                            <label class="custom-control-label" for="customRadio9">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">

                                            <input name="custom-radio-8" class="custom-control-input" id="customRadio10" type="radio">
                                            <label class="custom-control-label" for="customRadio10">Não</label>
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
                                        <label class="form-control-label" for="input-name">Possui integração com outros bancos de dados?</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-7" class="custom-control-input" id="customRadio11" type="radio">
                                            <label class="custom-control-label" for="customRadio11">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-8" class="custom-control-input" id="customRadio12" type="radio">
                                            <label class="custom-control-label" for="customRadio12">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Banco de Dados Integrados</label>
                                        <input type="text" class="form-control" disabled >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outras base de dados?</label>

                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-7" class="custom-control-input" id="customRadio13" type="radio">
                                            <label class="custom-control-label" for="customRadio13">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-8" class="custom-control-input" id="customRadio14" type="radio">
                                            <label class="custom-control-label" for="customRadio14">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Base de Dados Integrados</label>
                                        <input type="text" class="form-control" disabled >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outros serviços?</label>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-7" class="custom-control-input" id="customRadio15" type="radio">
                                            <label class="custom-control-label" for="customRadio15">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3 ">
                                            <input name="custom-radio-8" class="custom-control-input" id="customRadio16" type="radio">
                                            <label class="custom-control-label" for="customRadio16">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Serviços Integrados</label>
                                        <input type="text" class="form-control" disabled >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Endereço no GITINSS</label>
                                        <input type="text" name="name" id="input-name" class="form-control "disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Autenticação</label>
                                        <input type="text" name="name" id="input-name" class="form-control"disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 md-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Observação</label>
                                        <textarea class="form-control"disabled rows="3" placeholder="Adicione algum comentário aqui."></textarea>
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