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

            @foreach($product as $products)
                <tr>
                    <th scope="row">{{ $products->id }}</th>
                    <td> {{ $products->name }}</td>
                    <td> {{ $products->description }}</td>
                    <td> {{ $products->price }}</td>

                    <td style="display: flex">
                        <a href="" class="btn btn-secondary">Inserir no Pedido</a>
                        <a href="{{ route('produtos.edit', ['id'=> $products-> id]) }}" class="btn btn-primary">Editar </a>

                        <form action="/produtos/delete/{{ $products->id }}" method="POST">
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
            {!! $product->links('pagination::bootstrap-4') !!} </div>



    </div>


@stop

@section('css')

@stop

@section('js')

@stop
