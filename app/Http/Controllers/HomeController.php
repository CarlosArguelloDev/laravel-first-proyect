<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(): View
    {
        $user = User::find(1);

        return view('index', [
            'users' => $user,
        ]);

       
        //Aca se agrega la logica y todo
   
    }
}
