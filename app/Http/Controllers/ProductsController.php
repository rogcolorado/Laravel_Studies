<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request){

        $produto = $request->input('produto');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');

        $dados = [
            'produto'=> $produto,
            'preco'=>$preco,
            'categoria'=>$categoria
        ];

        return view('site.products',$dados);
    }
}
