<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //hace la vinculación hacia la migración
    protected $table = 'users';
    //indica que campos pueden ser cumplimentados (los que se ingresan por medio del modelo)
    protected $fillable = ['cedulaUsers','nombreUsers','emailUsers','passwordUsers'];
    //indica de que tipo deben ser los valores
    //protected $casts = [];
    //sirve para evitar entregar datos que no deben ser entregados (ocultar como por ejemplo un password)
    protected $hidden = ['passwordUsers'];
}
