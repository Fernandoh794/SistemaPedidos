@extends('adminlte::page')

@section('title', 'Atualizar Usuario')

@section('content_header')
    <h1 style="text-align: center">Editar Produto</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{  route('produtos.update', ['id'=> $product->id]) }}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input name="name" type="text" class="form-control"  value="{{ $product->name  }}">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descrição:</label>
                    <input type="text" class="form-control"   name="description" value="{{ $product->description }}">
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Preço:</label>
                    <input type="text" class="form-control"   name="price" value="{{ $product->price }}">
                </div>


                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>






        </div>



    </div>








@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
