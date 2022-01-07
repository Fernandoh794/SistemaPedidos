<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\DB;
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

    public function destroy($id) {   // Função para deletar usuarios a partir do ID
        product::findOrFail($id)->delete();
        return redirect('/produtos')->with('msg', 'Produto Excluido');
    }

    public function edit($id){
        $product = product::where('id', $id)->first();
        if(!empty($product)) {
            return view('pages.editproduct', ['product'=>$product]);
        } else {
            return redirect()->route('produtos.store');
        }
    }
    public function update(Request $request, $id) {

        $data = [
            'name' => $request->name,
            'description'=> $request->description,
            'price' => $request->price,


        ];
        product::where('id',$id)->update($data);
        return redirect('/produtos');

    }

    public function search(Request $request)
    {
    $product = product::where('name','=', "%{$request->search}%" )
        ->orwhere('description', 'LIKE', "%{$request->search}%" )
        ->paginate(10);

    return view('pages.produtos', compact('product'));

    }









}
