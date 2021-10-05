@extends('layouts.main')

@section('title')
Gráficos de Sistemas
@endsection




@section('content')

<br>
<div class="container-mt-8">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="width: 1150px;">
                <div class="card-header border-0" class="card-title text-uppercase text-default mb-0 ">
                    <h2 class="card-title text-uppercase text-default mb-0 ">Diretorias do Catálogo</h2>
                    <br>
                    <hr class="my-0">
                    <div class="card-body">
                        <canvas id="myChart" width="1000" height="300"></canvas>
                        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
                       
                       <script id="rendered-js">
                            
                            var data = [{
                                    value: 300,
                                    color: "#F7464A",
                                    highlight: "#FF5A5E",
                                    label: "Prioridade 1"
                                },

                                {
                                    value: 50,
                                    color: "#00BFFF",
                                    highlight: "#1E90FF	",
                                    label: "Prioridade 3 e 4"
                                },

                                {
                                    value: 100,
                                    color: "#FDB45C",
                                    highlight: "#FFC870",
                                    label: "Prioridade 2"
                                }
                            ];
                            var ctx = document.getElementById("myChart").getContext("2d");
                            new Chart(ctx).Pie(data);
                        </script>

                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                        <br>
                        <div class="legend">
                            <i class="fa fa-circle text-danger"></i> {{ __('Prioridade 1') }}
                            <br>
                            <i class="fa fa-circle text-warning"></i> {{ __('Prioridade 2') }}
                            <br>
                            <i class="fa fa-circle text-info"></i> {{ __('Prioridade 3 e 4') }}


                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> {{ __('Atualizado 2 dias atrás') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('scripts')


@endsection