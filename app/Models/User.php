<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prename',
        'email',
        'sexe',
        'age',
        'fonction',
        'login',
        'password',
    ];

    public function eleve()
    {
        return $this->hasOne(Eleve::class);
    }

    public function parent()
    {
        return $this->hasOne(Parent::class);
    }
}


   


