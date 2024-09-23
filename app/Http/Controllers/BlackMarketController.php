<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlackMarketController extends Controller
{
    public function index(){
        return response()->json(['menssage'=>"liste de itens"]);
    }

    public function store(){
        return response()->json(['menssage'=>"item criado"],201);
    }

    Public function update(request $request,$id) {
        return response()-> json(['menssage'=>"Item $id atualizado"]);
    }
    public function delete($id){
        return response()-> json(['menssage'=>"item $id deletado"]);
    }
}
