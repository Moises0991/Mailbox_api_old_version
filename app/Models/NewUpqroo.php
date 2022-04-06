<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUpqroo extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'id_Usuario',
        'dir_Imagen',
        'descripcion',
        'cant_Reacciones',
        'cant_Comentarios'
    ];
}
