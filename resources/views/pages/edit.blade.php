@extends('adminlte::page')

@section('title', 'Atualizar Usuario')

@section('content_header')
    <h1 style="text-align: center">Editar Usuario</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{  route('user.update', ['id'=> $user->id]) }}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp"
                           placeholder="Nome..." value="{{ $user->name  }}">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email:</label>
                    <input type="email" class="form-control"  placeholder="Email..." name="email" value="{{ $user->email }}">
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
