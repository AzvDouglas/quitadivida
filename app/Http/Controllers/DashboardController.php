<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Cliente;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::id();
        //verificar se existe algum cliente vinculado pelo usuário logado (user_id)
        if(count(Cliente::where('user_id',$user)->get()) > 0){
            $cliente = true;
        }
        else{$cliente = false;}
            

        return view('dashboard', compact('cliente'));
    }
}
