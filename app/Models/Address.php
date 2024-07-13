<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    //hace la vinculación hacia la migración
    protected $table = 'addresses';
    //indica que campos pueden ser cumplimentados (los que se ingresan por medio del modelo)
    protected $fillable = ['cedulaUsers','departamento','ciudad','barrio','numero','tipo'];
    //indica de que tipo deben ser los valores
    //protected $casts = [];
    //sirve para evitar entregar datos que no deben ser entregados (ocultar como por ejemplo un password)
    //protected $hidden = [];
}
