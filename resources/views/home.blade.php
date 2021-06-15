@extends('layouts.main')

@section('title')
Dashboard
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Página Inicial') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        {{ __('Sessão iniciada com sucesso.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection