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
                    <h3 class="card-title">Nome exemplo</h3>
                    
                    <div class="card-title">
                        <div class="row justify-content-center align-items-center ">
                            <h3>Informações da Aréa de negócio</h3>
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <table class="table">
                            @foreach ($consultarsist as $row)
                            <tr>
                                <th><b>Desenvolvedor </b> 
                                <td> Desenvolvedor {{$row->dev}}</td>
                                </th>
                            </tr>
                            <tr>
                                <th><b>Atuação</b></th>
                                <td>{{$row->atuacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{$row->auth}}</td>
                            </tr>
                            <tr>
                                <th><b>Diretoria (SIGLA)</b></th>
                                <td>{{$row->diretsi}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Sistema</b></th>
                                <td>{{$row->sistnm}}</td>
                            </tr>
                            <tr>
                                <th><b>Sigla do Sistema</b></th>
                                <td>{{$row->sissig}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço do Sistema</b></th>
                                <td>{{$row->endereco}}</td>
                            </tr>
                            <tr>
                                <th><b>Status do Sistema</b></th>
                                <td>{{$row->status}}</td>
                            </tr>
                            <tr>
                                <th><b>DNS</b></th>
                                <td>{{$row->dns}}</td>
                            </tr>
                            <tr>
                                <th><b>PDTI</b></th>
                                <td>{{$row->pdti}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui processo no SEI?</b></th>
                                <td>{{$row->prsei}}</td>
                            </tr>
                            <tr>
                                <th><b>Número Processo SEI</b></th>
                                <td>{{$row->numerosei}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Acesso Central</b></th>
                                <td>{{$row->gac}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Sistemas</b></th>
                                <td>{{$row->gds}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Titular</b></th>
                                <td>{{$row->gnt}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$row->siapegnt}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Negócio Substituto</b></th>
                                <td>{{$row->gns}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$row->siapegns}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor de Informação Titular</b></th>
                                <td>{{$row->git}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$row->siapegit}}</td>
                            </tr>
                            <tr>
                                <th><b>Gestor da Informação Substituto</b></th>
                                <td>{{$row->gis}}</td>
                            </tr>
                            <tr>
                                <th><b>SIAPE</b></th>
                                <td>{{$row->siapegis}}</td>
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
                                <td>{{$row->ambiente_hospedagem}}</td>
                            </tr>
                            <tr>
                                <th><b>Prioridade</b></th>
                                <td>{{$row->prioridade}}</td>
                            </tr>
                            <tr>
                                <th><b>Linguagem/Versão</b></th>
                                <td>{{$row->linguagem_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Framework</b></th>
                                <td>{{$row->framework}}</td>
                            </tr>
                            <tr>
                                <th><b>Tipo de Banco de Dados/Versão</b></th>
                                <td>{{$row->banco_v}}</td>
                            </tr>
                            <tr>
                                <th><b>Intranet/Internet</b></th>
                                <td>{{$row->intra_inter}}</td>
                            </tr>
                            <tr>
                                <th><b>Nome do Banco</b></th>
                                <td>{{$row->nome_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem da Aplicação</b></th>
                                <td>{{$row->ip_hospedagemapp}}</td>
                            </tr>
                            <tr>
                                <th><b>IP Hospedagem do Banco</b></th>
                                <td>{{$row->ip_hospedagembd}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Aplicação</b></th>
                                <td>{{$row->tamanho_app}}</td>
                            </tr>
                            <tr>
                                <th><b>Tamanho da Base de Dados</b></th>
                                <td>{{$row->tamanho_bd}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros sistemas?</b></th>
                                <td>{{$row->ps_sistemas}}</td>
                            </tr>
                            <tr>
                                <th><b>Sistemas Integrados</b></th>
                                <td>{{$row->sistemas_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outras bases de dados?</b></th>
                                <td>{{$row->ps_banco}}</td>
                            </tr>
                            <tr>
                                <th><b>Base de Dados Integrados</b></th>
                                <td>{{$row->banco_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Possui integração com outros serviços?</b></th>
                                <td>{{$row->ps_servico}}</td>
                            </tr>
                            <tr>
                                <th><b>Serviços Integrados</b></th>
                                <td>{{$row->servico_inte}}</td>
                            </tr>
                            <tr>
                                <th><b>Endereço no GITINSS</b></th>
                                <td>{{$row->end_gitinss}}</td>
                            </tr>
                            <tr>
                                <th><b>Autenticação</b></th>
                                <td>{{$row->autenticacao}}</td>
                            </tr>
                            <tr>
                                <th><b>Observação Informações Técnicas</b></th>
                                <td>{{$row->obsvr}}</td>
                            </tr>
                            @endforeach
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