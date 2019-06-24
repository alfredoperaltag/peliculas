<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $fillable = ["titulo", "descripcion", "genero", "fecha_lanzamiento"];

    protected $dates = [];

    public static $rules = [
        "titulo" => "required",
        "descripcion" => "required"
    ];
}
