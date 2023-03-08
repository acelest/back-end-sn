<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->prename = $request->prename;
        $user->email = $request->email;
        $user->sexe = $request->sexe;
        $user->age = $request->age;
        $user->fonction = $request->fonction;
        $user->login = $request->login;
        $user->password = $request->password;
        $user->save();
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->prename = $request->prename;
        $user->email = $request->email;
        $user->sexe = $request->sexe;
        $user->age = $request->age;
        $user->fonction = $request->fonction;
        $user->login = $request->login;
        $user->password = $request->password;
        $user->save();
        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->noContent();
    }
}