<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tactica extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'descripcion', 'file', 'user_id'
    ];
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
