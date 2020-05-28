<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;

class ProductController extends Controller
{	
	protected $ProductService;

	public function __construct(ProductService $ProductService){
		$this->ProductService = $ProductService;
        //dd($ProductService);
    }

    public function index(){

        $pro = $this->ProductService->getAll();
        return view('index', ['products' => $pro]);
    }

    public function add(){
        return view('add');
    }

    public function saveAdd(Request $request){
         
        $this->ProductService->create($request);
        return redirect('/')->with('mess', 'add thanh cong');
    }

    public function remove($id){
        $this->ProductService->delete($id);
        return redirect('/')->with('mess', 'delete thanh cong');
    }

    public function edit($id){
        $product = $this->ProductService->findById($id);
        return view('edit', ['product' => $product]);
    }

    public function saveEdit($id, Request $request){
        // $data = $request->all();
        $this->ProductService->update($id,$request);

        return redirect('/')->with('mess', 'edit thanh cong');
    }

    
}
