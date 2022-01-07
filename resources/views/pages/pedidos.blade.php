@extends('adminlte::page')

@section('title', 'Atualizar Usuario')

@section('content_header')
    <h1 style="text-align: center">Pedidos de Usuarios</h1>
@stop

@section('content')

    <div class="card" style="width: 30%">
        <div class="card-header"> <p> Usuario: {{  $user->name   }} </p> </div>
        <div class="card-body">
            <h5>Pedidos:</h5>
            @foreach ($user->pedidos as $pedido)
                {{$pedido->name}}

            @endforeach


        </div>
    </div>





@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
