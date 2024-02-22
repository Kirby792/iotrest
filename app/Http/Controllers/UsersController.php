<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // ocnsultar todos los usuarios 
    public function index()
    {
        return User::paginate();
    }
    //consultar un usuario
    public function show($id){
        return User::find($id);
    }
    
    //crear un usuario
    public function store(Request $request){
        return User::create($request->all());
    }

    //Actualizar un usuario
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return $user;  
    }
     //Eliminar un usuario
     public function delete($id){
        $user = User::find($id);
        $user->delete();
        return $user; 
     }
}
