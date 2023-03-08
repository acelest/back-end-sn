<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telephone',
        'fonction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function eleve()
    {
        return $this->hasOne(Eleve::class);
    }
}


