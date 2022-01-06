@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align: center">Usuarios Cadastrados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuario as $usuarios)
                    <tr>
                        <th scope="row">{{ $usuarios->id }}</th>
                        <td> {{ $usuarios->name }}</td>
                        <td> {{ $usuarios->email }}</td>
                        <td> <a class="btn btn-primary">Editar</a>   <a class="btn btn-danger">Excluir</a>  </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <div class="pagination" style="display: flex; justify-content: center">
                {{ $usuario->links('pagination::bootstrap-4') }} </div>
        </div>







        @stop

        @section('css')

        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
