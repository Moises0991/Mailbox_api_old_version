<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     use HasFactory;
    
    protected $fillable = [
        'name',
        'surname',
        'password',
        'email',
        
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $cast = [
        'email_verified_at' => 'datetime'
    ];

    public function setPasswordAttribute ($password) {
        $this->attributes['password'] = bcrypt($password);
    }
}
