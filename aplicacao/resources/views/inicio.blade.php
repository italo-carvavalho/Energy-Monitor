@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h2>Bem-vindo(a) ao Sistema de Monitoramento de Corrente</h2>
                        <p>Para visualizar o gráfico com os últimos 10 valores medidos, clique no botão abaixo:</p>
                        <a href="{{ route('sensor.ultimos-dez') }}" class="btn btn-primary">Visualizar Gráfico</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
