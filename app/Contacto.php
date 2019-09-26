<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = ['correo', 'comentario'];
    //protected $guarded = ['id', 'created_at', 'updated_at'];
}
