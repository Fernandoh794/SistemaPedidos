@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1 style="text-align: center">Produtos Disponiveis</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ url('home/create') }}" class=  "btn btn-primary">#filtros</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($product as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td> {{ $product->name }}</td>
                    <td> {{ $product->description }}</td>
                    <td> {{ $product->price }}</td>

                    <td style="display: flex">

                        <a h class="btn btn-primary">Editar </a>

                        <form>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <div class="pagination" style="display: flex; justify-content: center">
             </div>


    </div>


@stop

@section('css')

@stop

@section('js')

@stop
