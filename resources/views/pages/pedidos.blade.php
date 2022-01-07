@extends('adminlte::page')

@section('title', 'Atualizar Usuario')

@section('content_header')
    <h1 style="text-align: center">Pedidos de Usuarios</h1>
@stop

@section('content')

    <div style="display: flex; justify-content: center" class="row" >

        <div class="card" style="width: 40vw; text-align: center" >
            <div class="card-body">
                <h5 class="card-title">Fernando Henrique</h5>

                <p class="card-text">Capacete || Calça</p>
                <div class="alert alert-danger" role="alert">
                    PEDIDO EM ABERTO! Finalize, ou cancele.
                </div>
                <a href="#" class="btn btn-primary">Finalizar</a>
                <a href="#" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

        <div class="card" style="width: 40vw; text-align: center" >
            <div class="card-body">
                <h5 class="card-title">Fernando Henrique</h5>

                <p class="card-text">Capacete || Calça</p>
                <div class="alert alert-danger" role="alert">
                    PEDIDO EM ABERTO! Finalize, ou cancele.
                </div>
                <a href="#" class="btn btn-primary">Finalizar</a>
                <a href="#" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>



    </div>




@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
