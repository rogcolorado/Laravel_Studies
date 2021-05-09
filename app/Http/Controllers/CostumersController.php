<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function index(Request $request){


            $nome = $request->input('nome');
            $email = $request->input('email');
            $cidade = $request->input('cidade');

            $dados = [
                'nome'=> $nome,
                'email'=>$email,
                'cidade'=>$cidade
            ];

        return view('site.costumers',$dados);
    }
}
