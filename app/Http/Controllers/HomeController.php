<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $repository;
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->repository = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     *
     *
     */



    public function index()   // Esse metodo foi usado para Listar os ususarios cadastrados e fazer Paginação;
    {
      $user = $this->repository->paginate(10);




        return view('pages.home', [
            'user'=> $user,
        ]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request) {
       $this->repository->create($request->all());
       return redirect()->route('user.index');

    }

    public function destroy($id) {   // Função para deletar usuarios a partir do ID
        User::findOrFail($id)->delete();
        return redirect('/home')->with('msg', 'Usuario Excluido');
    }

    public function edit($id){


    }









}

