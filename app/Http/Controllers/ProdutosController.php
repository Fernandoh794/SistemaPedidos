<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * @var product
     */
    private $repository;

    public function __construct(product $product)
    {
        $this->middleware('auth');
        $this->repository = $product;
    }

    public function index()   // Esse metodo foi usado para Listar os produtos e cadastrados e fazer Paginação;
    {
        $product = $this->repository->paginate(10);

        return view('pages.produtos', [
            'product'=> $product,
        ]);
    }

    public function create()
    {
        return view('pages.createproduct');
    }

    public function store(Request $request) {
        $this->repository->create($request->all());
        return redirect()->route('produtos.index');

    }


}
