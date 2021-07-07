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

                </div>
                <form action="/info-tec/{{$sistemastecnico->sistt_id}}" method="post">
                    {{csrf_field() }}
                    {{method_field('put') }}
                    <div class="card-header" class="card-title">
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
                                    <div class="col-md-8">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Ambiente Atual da Hospedagem</label>
                                            <input type="text" name="ambiente_hospedagem" id="ambiente_hospedagem" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="">Prioridade</label>
                                            <select class="form-control" name="prioridade">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Linguagem/Versão</label>
                                            <input type="text" name="linguagem_v" id="linguagem_v" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Framework</label>
                                            <input type="text" name="framework" id="framework" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Tipo de Banco de Dados/Versão</label>
                                            <input type="text" name="banco_v" id="banco_v" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="">Intranet/Internet</label>
                                            <select class="form-control" name="intra_inter">
                                                <option value="Intranet">Intranet</option>
                                                <option value="Internet">Internet</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Nome do Banco</label>
                                            <input type="text" name="nome_banco" id="nome_banco" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">IP Hospedagem da Aplicação</label>
                                            <input type="text" name="ip_hospedagemapp" id="ip_hospedagemapp" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">IP Hospedagem do Banco</label>
                                            <input type="text" name="ip_hospedagembd" id="ip_hospedagembd" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Tamanho da Aplicação</label>
                                            <input type="text" name="tamanho_app" id="tamanho_app" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Tamanho da Base de Dados</label>
                                            <input type="text" name="tamanho_bd" id="tamanho_bd" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Possui integração com outros sistemas?</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_sistemas" value="Sim" /> Sim
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_sistemas" value="Não" /> Não
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Sistemas Integrados</label>
                                            <input type="text" name="sistemas_inte" id="sistemas_inte" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Possui integração com outras bases de dados?</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_banco" value="Sim" /> Sim
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_banco" value="Não" /> Não
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Base de Dados Integrados</label>
                                            <input type="text" name="banco_inte" id="banco_inte" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Possui integração com outros serviços?</label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_servico" value="Sim" /> Sim
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" name="ps_servico" value="Não" /> Não
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Serviços Integrados</label>
                                            <input type="text" name="servico_inte" id="servico_inte" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Endereço no GITINSS</label>
                                            <input type="text" name="end_gitinss" id="end_gitinss" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Autenticação</label>
                                            <input type="text" name="autenticacao" id="autenticacao" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 md-8">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-name">Observação</label>
                                            <textarea class="form-control form-control-alternative" name="obsvr" id="obsvr" rows="3" placeholder="Adicione algum comentário aqui."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection