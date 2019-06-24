<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model {

    protected $fillable = ["nombre", "edad", "direccion", "fecha_nacimiento"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
    ];

    // Relationships

}
