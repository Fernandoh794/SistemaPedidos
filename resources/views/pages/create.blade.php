@extends('adminlte::page')
@section('title', 'Cadastrar Usuario')
@section('content_header')
    <h1 style="text-align: center">Cadastrar novo Usuario</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{  route('user.store') }}" method="POST" class="form">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp"
                           placeholder="Nome...">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email:</label>
                    <input type="email" class="form-control"  placeholder="Email..." name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha:</label>
                    <input type="password" class="form-control"  placeholder="Password" name="password">
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
