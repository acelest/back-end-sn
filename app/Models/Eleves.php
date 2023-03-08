<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_id',
        'classe_id',
        'matricule',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}



   


