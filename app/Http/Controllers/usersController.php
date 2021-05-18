<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    //
    public function create(){        
        return view('admin.user');
    }
    
    public function store(Request $data){
        
        $data->validate([
            'usuario' => 'required|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = new User();
        $user->nombre = $data->nombre;
        $user->usuario = $data->usuario;
        $user->password = Hash::make($data->password);
        $user->avatar = $data->image;
        $user->tipo = $data->tipouser;
        $user->save();
        return redirect()->route('admin.showu');
    }
    public function show(){
        $users= User::all();
        return view('admin.show', compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.editaru', compact('user'));
    }

    public function update(Request $datau, $id){
        $datau->validate([
            'usuario' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);
        
        $user = User::find($id);
        $user->nombre = $datau->nombre;
        $user->usuario = $datau->usuario;
        $user->password = Hash::make($datau->password);
        $user->avatar = $datau->image;
        $user->tipo = $datau->tipouser;
        $user->save();
        return redirect()->route('admin.showu');
    }
}
