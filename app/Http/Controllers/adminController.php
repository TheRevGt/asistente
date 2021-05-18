<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class adminController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //Funciones que administran las turas
    public function index(){
        return view('admin.login');

    }
    
    public function create(){
        return view("admin.registro");
    }

    public function store(Request $data){
        $data->validate([
            'image' => 'required',
            'categoria' => 'required',
            'nombre' => 'required',
            'estilo' => 'required',
            'talla' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ]);
        $item = new item();
        $item->nombre = $data->nombre;
        $item->categoria = $data->categoria;
        $item->estilo = $data->estilo;
        $item->talla = $data->talla;
        $item->clase = $data->clase;
        $item->costura = $data->costura;
        $item->tipico = $data->tipico;
        $item->imagen = $data->image;
        $item->existencia = "1";
        $item->precio = $data->precio;
        $item->cantidad = $data->cantidad;
        $item->color1 = $data->Vibrant;
        $item->color2 = $data->Muted;
        $item->color3 = $data->DarkVibrant;
        $item->color4 = $data->DarkMuted;
        $item->color5 = $data->LightVibrant;
        $item->save();
        return redirect()->route('admin.create');
        }

    public function show(Request $request){
        $request = $request->get('buscar');
        $items = item::where('existencia', '1')->where('nombre', 'like', $request.'%')->get();
        return view('admin.productos', compact('items'));
    }

    public function edit($id){
        $item = item::find($id);
        return view('admin.editor', compact('item'));
    }

    public function update(Request $udata, $id)
    {
        $udata->validate([
            'image' => 'required',
            'categoria' => 'required',
            'nombre' => 'required',
            'estilo' => 'required',
            'talla' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ]);
        $item = item::find($id);
        $item->id = $id;
        $item->nombre = $udata->nombre;
        $item->categoria = $udata->categoria;
        $item->estilo = $udata->estilo;
        $item->talla = $udata->talla;
        $item->clase = $udata->clase;
        $item->costura = $udata->costura;
        $item->tipico = $udata->tipico;
        $item->imagen = $udata->image;
        $item->precio = $udata->precio;
        $item->cantidad = $udata->cantidad;
        $item->existencia = $udata->existe;
        $item->color1 = $udata->Vibrant;
        $item->color2 = $udata->Muted;
        $item->color3 = $udata->DarkVibrant;
        $item->color4 = $udata->DarkMuted;
        $item->color5 = $udata->LightVibrant;
        $item->save();
        return redirect()->route('admin.show');
    }
}
