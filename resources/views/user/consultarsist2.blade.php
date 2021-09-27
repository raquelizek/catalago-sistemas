@extends('layouts.main')

@section('title')
Informações dos Sistemas
@endsection

@section('content')


<tbody>
    
    <br>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 100rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$SISTG->sistnm}}</h3>
                    <hr class="my-0">
                    <br>
                    
                    <div class="card-title">
                        <div class="row justify-content-center align-items-center ">
                            <h3>Informações da Aréa de negócio</h3>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table">
                            <tr>
                                <thead>
                                    <th><b>Desenvolvedor </b>
                                    <td> {{$SISTG->dev}}</td>
                                    </th>
                            </tr>
                            <tr>
                                <th><b>Atuação</b></th>
                                <td>{{$SISTG->atuacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{$SISTG->auth}}</td>
                            </tr>
                            <tr>
                                <th><b>Diretoria (SIGLA)</b></th>
                                <td>{{$SISTG->diretsi}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Sistema</b></th>
                                <td>{{$SISTG->sistnm}}</td>
                            </tr>
                            <tr>
                                <th><b>Sigla do Sistema</b></th>
                                <td>{{$SISTG->sissig}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço do Sistema</b></th>
                                <td>{{$SISTG->endereco}}</td>
                            </tr>
                            <tr>
                                <th><b>Status do Sistema</b></th>
                                <td>{{$SISTG->status}}</td>
                            </tr>
                            <tr>
                                <th><b>DNS</b></th>
                                <td>{{$SISTG->dns}}</td>
                            </tr>
                            <tr>
                                <th><b>PDTI</b></th>
                                <td>{{$SISTG->pdti}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui processo no SEI?</b></th>
                                <td>{{$SISTG->prsei}}</td>
                            </tr>
                            <tr>
                                <th><b>Número Processo SEI</b></th>
                                <td>{{$SISTG->numerosei}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Acesso Central</b></th>
                                <td>{{$SISTG->gac}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Sistemas</b></th>
                                <td>{{$SISTG->gds}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Titular</b></th>
                                <td>{{$SISTG->gnt}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$SISTG->siapegnt}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Substituto</b></th>
                                <td>{{$SISTG->gns}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$SISTG->siapegns}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Informação Titular</b></th>
                                <td>{{$SISTG->git}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$SISTG->siapegit}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor da Informação Substituto</b></th>
                                <td>{{$SISTG->gis}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$SISTG->siapegis}}</td>
                            </tr>
                            <tr>
                                <th><b>Observação </b></th>
                                <td>{{$SISTG->obsv}}</td>
                            </tr>
                        </table>
                    </div>

                    <hr class="my-0">
                    <br>
                    <div class="card-title">
                        <div class="row justify-content-center align-items-center ">
                            <br>
                            <h3>Informações Técnicas</h3>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table">
                            <tr>
                                <thead>
                                    <th><b>Ambiente Atual da Hospedagem</b>
                                    <td> {{$SISTG->ambiente_hospedagem}}</td>
                                    </th>
                            </tr>
                            <tr>
                                <th><b>Prioridade</b></th>
                                <td>{{$SISTG->prioridade}}</td>
                            </tr>
                            <tr>
                                <th><b>Linguagem/Versão</b></th>
                                <td>{{$SISTG->linguagem_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Framework</b></th>
                                <td>{{$SISTG->framework}}</td>
                            </tr>
                            <tr>
                                <th><b>Tipo de Banco de Dados/Versão</b></th>
                                <td>{{$SISTG->banco_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Intranet/Internet</b></th>
                                <td>{{$SISTG->intra_inter}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Banco</b></th>
                                <td>{{$SISTG->nome_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem da Aplicação</b></th>
                                <td>{{$SISTG->ip_hospedagemapp}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem do Banco</b></th>
                                <td>{{$SISTG->ip_hospedagembd}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Aplicação</b></th>
                                <td>{{$SISTG->tamanho_app}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Base de Dados</b></th>
                                <td>{{$SISTG->tamanho_bd}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros sistemas?</b></th>
                                <td>{{$SISTG->ps_sistemas}}</td>
                            </tr>
                            <tr>
                                <th><b>Sistemas Integrados</b></th>
                                <td>{{$SISTG->sistemas_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outras bases de dados?</b></th>
                                <td>{{$SISTG->ps_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>Base de Dados Integrados</b></th>
                                <td>{{$SISTG->banco_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros serviços?</b></th>
                                <td>{{$SISTG->ps_servico}}</td>
                            </tr>
                            <tr>
                                <th><b>Serviços Integrados</b></th>
                                <td>{{$SISTG->servico_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço no GITINSS</b></th>
                                <td>{{$SISTG->end_gitinss}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{$SISTG->autenticacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Observação Informações Técnicas</b></th>
                                <td>{{$SISTG->obsvr}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</tbody>


@endsection

@section('scripts')

@endsection