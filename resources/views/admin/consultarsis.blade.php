@extends('layouts.master')

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
                    <h3 class="card-title">{{@$GEST->sistnm}}</h3>
                    <hr class="my-0">
                    <br>
                    <div class="card-title">
                        <div class="row justify-content-center align-items-center ">
                            <h2>Informações da Aréa de negócio</h2>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table">
                            
                            
                            <tr>
                            <thead>
                                <th><b>Desenvolvedor </b> 
                                <td> {{@$GEST->dev}}</td>
                                </th>
                            </tr>
                            <thead>
                            <tr>
                                <th><b>Atuação</b></th>
                                <td>{{@$GEST->atuacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{@$GEST->auth}}</td>
                            </tr>
                            <tr>
                                <th><b>Diretoria (SIGLA)</b></th>
                                <td>{{@$GEST->diretsi}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Sistema</b></th>
                                <td>{{@$GEST->sistnm}}</td>
                            </tr>
                            <tr>
                                <th><b>Sigla do Sistema</b></th>
                                <td>{{@$GEST->sissig}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço do Sistema</b></th>
                                <td>{{@$GEST->endereco}}</td>
                            </tr>
                            <tr>
                                <th><b>Status do Sistema</b></th>
                                <td>{{@$GEST->status}}</td>
                            </tr>
                            <tr>
                                <th><b>DNS</b></th>
                                <td>{{@$GEST->dns}}</td>
                            </tr>
                            <tr>
                                <th><b>PDTI</b></th>
                                <td>{{@$GEST->pdti}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui processo no SEI?</b></th>
                                <td>{{@$GEST->prsei}}</td>
                            </tr>
                            <tr>
                                <th><b>Número Processo SEI</b></th>
                                <td>{{@$GEST->numerosei}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Acesso Central</b></th>
                                <td>{{@$GEST->gac}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Sistemas</b></th>
                                <td>{{@$GEST->gds}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Titular</b></th>
                                <td>{{@$GEST->gnt}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{@$GEST->siapegnt}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Substituto</b></th>
                                <td>{{@$GEST->gns}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{@$GEST->siapegns}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Informação Titular</b></th>
                                <td>{{@$GEST->git}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{@$GEST->siapegit}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor da Informação Substituto</b></th>
                                <td>{{@$GEST->gis}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{@$GEST->siapegis}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive ">
                        <br>
                        <table class="table">
                            <div class="card-title">
                                <div class="row justify-content-center align-items-center ">
                                    <h3>Informações Técnicas</h3>
                                </div>
                            </div>
                            <br>
                            <tr>
                                <th><b>Ambiente Atual da Hospedagem</b></th>
                                <td>{{@$GEST->ambiente_hospedagem}}</td>
                            </tr>
                            <tr>
                                <th><b>Prioridade</b></th>
                                <td>{{@$GEST->prioridade}}</td>
                            </tr>
                            <tr>
                                <th><b>Linguagem/Versão</b></th>
                                <td>{{@$GEST->linguagem_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Framework</b></th>
                                <td>{{@$GEST->framework}}</td>
                            </tr>
                            <tr>
                                <th><b>Tipo de Banco de Dados/Versão</b></th>
                                <td>{{@$GEST->banco_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Intranet/Internet</b></th>
                                <td>{{@$GEST->intra_inter}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Banco</b></th>
                                <td>{{@$GEST->nome_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem da Aplicação</b></th>
                                <td>{{@$GEST->ip_hospedagemapp}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem do Banco</b></th>
                                <td>{{@$GEST->ip_hospedagembd}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Aplicação</b></th>
                                <td>{{@$GEST->tamanho_app}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Base de Dados</b></th>
                                <td>{{@$GEST->tamanho_bd}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros sistemas?</b></th>
                                <td>{{@$GEST->ps_sistemas}}</td>
                            </tr>
                            <tr>
                                <th><b>Sistemas Integrados</b></th>
                                <td>{{@$GEST->sistemas_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outras bases de dados?</b></th>
                                <td>{{@$GEST->ps_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>Base de Dados Integrados</b></th>
                                <td>{{@$GEST->banco_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros serviços?</b></th>
                                <td>{{@$GEST->ps_servico}}</td>
                            </tr>
                            <tr>
                                <th><b>Serviços Integrados</b></th>
                                <td>{{@$GEST->servico_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço no GITINSS</b></th>
                                <td>{{@$GEST->end_gitinss}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{@$GEST->autenticacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Observação Informações Técnicas</b></th>
                                <td>{{@$GEST->obsvr}}</td>
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