<?php

namespace App\Http\Controllers;

Use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $prd = new Produto();
        $produtos = $prd->lista();
        
        return view('produtos', compact('produtos'));
    }

}