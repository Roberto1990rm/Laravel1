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
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'graduacion' => 'required|numeric|min:0|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
            'precio' => 'required|numeric|min:0',
            'origen' => 'required|string|max:255',
        ]);

        // Crear la nueva cerveza
        $cerveza = new Cerveza();
        $cerveza->nombre = $request->nombre;
        $cerveza->graduacion = $request->graduacion;
        $cerveza->precio = $request->precio;
        $cerveza->origen = $request->origen;

        // Manejo de la imagen
        if ($request->hasFile('foto')) {
            // Guardar la imagen en la carpeta 'storage/cervezas' y obtener la ruta
            $path = $request->file('foto')->store('cervezas', 'public');
            // Guardar la ruta del archivo en la base de datos
            $cerveza->foto = $path;
        }

        // Guardar la cerveza en la base de datos
        $cerveza->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('cervezas.create')->with('success', 'Cerveza agregada correctamente.');
    }


    public function destroy($id)
{
    $cerveza = Cerveza::findOrFail($id);
    $cerveza->delete();

    return redirect()->back()->with('success', 'Cerveza eliminada correctamente.');
}

}

