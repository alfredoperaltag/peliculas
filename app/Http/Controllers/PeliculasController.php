<?php namespace App\Http\Controllers;

use App\Peliculas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class PeliculasController extends Controller
{
    const Model = "App\Peliculas";

    function index()
    {
        $peliculas = Peliculas::all();
        return response()->json($peliculas, 200);
    }
    function show($id)
    {
        $pelicula = Peliculas::find($id);
        return "metodo show" . $pelicula;
    }
    function create(Request $request) //$request objeto dentro del enlace
    {
        // dd($request->all);
        $pelicula = Peliculas::create($request->all());
        return response()->json($pelicula, '200');
    }
    function update(Request $request, $id)
    {
        $pelicula = Peliculas::findorfail($id);
        $pelicula->update($request->json()->all());
        return response()->json($pelicula, 200);
    }
    function delete(Request $request, $id)
    {
        $pelicula = Peliculas::findorfail($id);
        $pelicula->delete();
        return response()->json($pelicula, 200);
    }
}
