<?php

namespace App\Http\Controllers;

use app\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    //
    public function show($id)
{
    $eleve = Eleve::with(['user', 'parent', 'classe'])->findOrFail($id);
    return $eleve;
}
}
