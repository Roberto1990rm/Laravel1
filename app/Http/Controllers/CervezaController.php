<?php

namespace App\Http\Controllers;

use App\Models\Cerveza;
use Illuminate\Http\Request;

class CervezaController extends Controller
{
    public function create()
    {
        return view('cervezas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'graduacion' => 'required|numeric|min:0|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'precio' => 'required|numeric|min:0',
            'origen' => 'required|string|max:255',
        ]);

        $cerveza = new Cerveza();
        $cerveza->nombre = $request->nombre;
        $cerveza->graduacion = $request->graduacion;
        $cerveza->precio = $request->precio;
        $cerveza->origen = $request->origen;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('cervezas', 'public');
            $cerveza->foto = $path;
        }

        $cerveza->save();

        return redirect()->route('cervezas.create')->with('success', 'Cerveza agregada correctamente.');
    }
}

