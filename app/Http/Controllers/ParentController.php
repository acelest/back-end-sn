<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;

class ParentController extends Controller
{
    public function store(Request $request)
    {
        $parent = new Parents;
        $parent->user_id = $request->user_id;
        $parent->telephone = $request->telephone;
        $parent->fonction = $request->fonction;
        $parent->save();
        return $parent;
    }

    public function update(Request $request, $id)
    {
        $parent = Parents::findOrFail($id);
        $parent->user_id = $request->user_id;
        $parent->telephone = $request->telephone;
        $parent->fonction = $request->fonction;
        $parent->save();
        return $parent;
    }

    public function destroy($id)
    {
        $parent = Parents::findOrFail($id);
        $parent->delete();
        return response()->noContent();
    }
}
