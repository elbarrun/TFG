<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'descripcion', 'file', 'user_id'
    ];

    public function tacticas()
    {
        return $this->hasMany(Tactica::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
