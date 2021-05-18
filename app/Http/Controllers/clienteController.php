<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    //
    public function index(){
        return view("cliente.index");
    }

    public function categoria($categoria){
        $items = item::where('categoria', '=', $categoria)->where('existencia', '=', 1)->get();
        return view('cliente.categoriau', compact('items', 'categoria'));
    }

    public function asistente($id){
        $query = item::select('id','color1','color2','color3','color4','color5','categoria')->find($id);
        $tquery = item::select('id','color1','color2','color3','color4','color5','categoria','imagen','nombre','precio')
            ->orWhere('color1', $query->color1)
            ->orWhere('color2', $query->color1)
            ->orWhere('color3', $query->color1)
            ->orWhere('color4', $query->color1)
            ->orWhere('color5', $query->color1)
            ->orWhere('color1', $query->color2)
            ->orWhere('color2', $query->color2)
            ->orWhere('color3', $query->color2)
            ->orWhere('color4', $query->color2)
            ->orWhere('color5', $query->color2)
            ->orWhere('color1', $query->color3)
            ->orWhere('color2', $query->color3)
            ->orWhere('color3', $query->color3)
            ->orWhere('color4', $query->color3)
            ->orWhere('color5', $query->color3)
            ->orWhere('color1', $query->color4)
            ->orWhere('color2', $query->color4)
            ->orWhere('color3', $query->color4)
            ->orWhere('color4', $query->color4)
            ->orWhere('color5', $query->color4)
            ->orWhere('color1', $query->color5)
            ->orWhere('color2', $query->color5)
            ->orWhere('color3', $query->color5)
            ->orWhere('color4', $query->color5)
            ->orWhere('color5', $query->color5)
            ->get();
        return view('cliente.asistente', compact('tquery', 'query'));
    }
}
