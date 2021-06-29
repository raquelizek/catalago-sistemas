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
                    @foreach ($query as $row)
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
                                    <input type="text" name="dev" id="{{ $row->dev }}" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Atuação</label>
                                    <input type="text" name="atuacao" id="atuacao" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Autenticação</label>
                                    <input type="text" name="auth" id="auth" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label " for="">Diretoria (Sigla)</label>
                                    <input type="text" name="diretsi" id="diretsi" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Sistema (Nome)</label>
                                    <input type="text" name="sistnm" id="sistnm" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Sistema (Sigla)</label>
                                    <input type="text" name="sissig" id="sissig" class="form-control " disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">DNS</label>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">PDTI</label>


                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor de Acesso Central</label>
                                    <input type="text" name="gac" id="gac" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor de Sistemas</label>
                                    <input type="text" name="gds" id="gds" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor de Negócio Titular</label>
                                    <input type="text" name="gnt" id="gnt" class="form-control " disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 1 -->
                                    <input type="text" name="siapegnt" id="siapegnt" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor de Negócio Substituto</label>
                                    <input type="text" name="gns" id="gns" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 2 -->
                                    <input type="text" name="siapegns" id="siapegns" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor de Informação Titular</label>
                                    <input type="text" name="git" id="git" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 3 -->
                                    <input type="text" name="siapegit" id="siapegit" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="">Gestor da Informação Substituto </label>
                                    <input type="text" name="gis" id="gis" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 4 -->
                                    <input type="text" name="siapegis" id="siapegis" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Possui processos gerados no SEI?</label>


                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Número do Processo</label>
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 md-8">
                                <div class="form-group ">
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
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tipo de Banco de Dados/Versão</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nome do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control " disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">IP Hospedagem da Aplicação</label>
                                        <input type="text" name="name" id="input-name" class="form-control " disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">IP Hospedagem do Banco</label>
                                        <input type="text" name="name" id="input-name" class="form-control " disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tamanho da Aplicação</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Tamanho da Base de Dados</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>


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
                                        <label class="form-control-label" for="input-name">Possui integração com outras base de dados?</label>


                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Base de Dados Integrados</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-name">Possui integração com outros serviços?</label>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Serviços Integrados</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Endereço no GITINSS</label>
                                        <input type="text" name="name" id="input-name" class="form-control " disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Autenticação</label>
                                        <input type="text" name="name" id="input-name" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 md-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Observação</label>
                                        <textarea class="form-control" disabled rows="3" placeholder="Adicione algum comentário aqui."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection