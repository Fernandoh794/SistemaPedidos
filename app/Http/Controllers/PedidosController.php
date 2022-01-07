<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\User;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index() {
        return view('pages.pedidos');
    }


    public function umparamuitos(){
        $user = \App\Models\User::with('pedidos')->first();
        echo $user->name;
        echo '<br>';
        foreach ($user->pedidos as $pedido){
                echo "pedidos: {$pedido->name}";

        }




        $pedidos = $user->pedidos;
        dd($pedidos);

    }




}
