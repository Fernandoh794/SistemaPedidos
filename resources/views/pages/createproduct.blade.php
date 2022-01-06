@extends('adminlte::page')

@section('title', 'Cadastrar Produto')

@section('content_header')
    <h1 style="text-align: center">Cadastrar novo Produto</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('produtos.store') }}" method="POST" class="form">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp"
                           placeholder="Nome...">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email:</label>
                    <input type="text" class="form-control"  placeholder="Uma Breve descrição do Produto.." name="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preço:</label>
                    <input type="text" class="form-control"  placeholder="Preço do produto..." name="price">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>






        </div>



    </div>








@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
