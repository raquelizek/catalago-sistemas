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
                    <h2 class="card-title text-uppercase text-default mb-0 ">Cadastar novos sistemas</h2>
                    <br>
                </div>
                <form action="/salvarsistema" method="post">
                    <div class="card-header" class="card-title">
                        <input type="submit" class="btn btn btn-outline-primary" value="Salvar">
                    </div>
                    @csrf
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center ">
                            <h3>Informações da Aréa de negócio</h3>
                        </div>
                        <hr class="my-3">
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-dev">Desenvolvedor</label>
                                    <input type="text" name="dev" id="dev" value="{{@$VAI->dev}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Atuação</label>
                                    <input type="text" name="atuacao" id="atuacao" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Autenticação</label>
                                    <input type="text" name="auth" id="auth" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group focused">
                                    <label class="form-control-label " for="">Diretoria (Sigla)</label>
                                    <input type="text" name="diretsi" id="diretsi" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Sistema (Nome)</label>
                                    <input type="text" name="sistnm" id="sistnm" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Sistema (Sigla)</label>
                                    <input type="text" name="sissig" id="sissig" class="form-control ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control ">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Status do Sistema</label>
                                    <select class="form-control" name="status">
                                        <option value="Ativado">Ativado</option>
                                        <option value="Desativado">Desativado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">DNS</label>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="dns" value="Sim" /> Sim
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="dns" value="Não" /> Não
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group focused">
                                     <label class="form-control-label" for="input-name">PDTI</label>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="pdti" value="Sim" /> Sim
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="pdti" value="Não" /> Não
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group focused">
                                <label class="form-control-label" for="input-name">Possui processo no SEI?</label>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="prsei" value="Sim" /> Sim
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" name="prsei" value="Não" /> Não
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-name">Número do Processo</label>
                                    <input type="text" name="numerosei" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Acesso Central</label>
                                    <input type="text" name="gac" id="gac" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Sistemas</label>
                                    <input type="text" name="gds" id="gds" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Negócio Titular</label>
                                    <input type="text" name="gnt" id="gnt" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 1 -->
                                    <input type="text" name="siapegnt" id="siapegnt" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Negócio Substituto</label>
                                    <input type="text" name="gns" id="gns" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 2 -->
                                    <input type="text" name="siapegns" id="siapegns" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor de Informação Titular</label>
                                    <input type="text" name="git" id="git" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 3 -->
                                    <input type="text" name="siapegit" id="siapegit" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Gestor da Informação Substituto </label>
                                    <input type="text" name="gis" id="gis" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-black focused">
                                    <label class="form-control-label" for="">SIAPE</label> <!-- siape vai ser endereço unico siape 4 -->
                                    <input type="text" name="siapegis" id="siapegis" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 md-8">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="">Observação</label>
                                    <textarea class="form-control form-control-alternative" name="obsv" id="obsv" rows="3" placeholder="Adicione algum comentário aqui."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection

@section('scripts')


@endsection