<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\Classes;

class ClasseController extends Controller
{
    public function eleves($id)
    {
        $eleves = Classes::findOrFail($id)->eleves()->with('user')->get();
        return $eleves;
    }
}
