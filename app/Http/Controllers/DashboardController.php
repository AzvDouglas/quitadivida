<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $cliente = $user->cliente;

        return view('dashboard', compact('cliente'));
    }
}
