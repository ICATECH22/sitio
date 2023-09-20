<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    use HasFactory;

    protected $table =  'buzones';

    protected $fillable = ['id', 'actividad', 'comentario', 'archivo', 'nombre', 'email', 'telefono', 'termino'];

    protected $hidden = ['created_at', 'updated_at'];
}
