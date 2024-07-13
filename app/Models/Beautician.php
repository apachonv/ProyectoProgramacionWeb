<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beautician extends Model
{
    use HasFactory;

    //hace la vinculación hacia la migración
    protected $table = 'beauticians';
    //indica que campos pueden ser cumplimentados (los que se ingresan por medio del modelo)
    protected $fillable = ['cedulaBeauticians','nombreBeauticians','emailBeauticians','cedulaAdministrators','passwordBeauticians'];
    //indica de que tipo deben ser los valores
    //protected $casts = [];
    //sirve para evitar entregar datos que no deben ser entregados (ocultar como por ejemplo un password)
    protected $hidden = ['passwordBeauticians'];
}
