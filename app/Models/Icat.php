<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icat extends Model
{
    use HasFactory;
    protected $table =  'icats_list';

    protected $fillable = ['id', 'nombre', 'puesto', 'icat', 'asistencia'];

    protected $hidden = ['created_at', 'updated_at'];
}
