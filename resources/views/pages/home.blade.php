@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align: center">Usuarios Cadastrados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
          <a href="{{ url('home/create') }}" class=  "btn btn-primary">Adicionar Usuario</a>
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
                @foreach($user as $users)
                    <tr>
                        <th scope="row">{{ $users->id }}</th>
                        <td> {{ $users->name }}</td>
                        <td> {{ $users->email }}</td>

                        <td style="display: flex">

                            <a href="{{route('user.edit', ['id'=>$users->id])}}" class="btn btn-primary">Editar </a>

                            <form action="/home/delete/{{ $users->id }}" method="POST">
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
                {!! $user->links('pagination::bootstrap-4') !!} </div>


        </div>







        @stop

        @section('css')

        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
