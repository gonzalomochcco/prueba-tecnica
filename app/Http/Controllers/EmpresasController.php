<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    
    public function index()
    {   

        return view('home')
            ->with("empresas" , Empresas::all() );

    }

    /**public function designar_trabajadores()
    {   

        return view('designar_trabajdores');

    }**/

}
