<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResenaUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario_emisor', 'id_usuario_receptor', 'id_resena'
    ];

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function resena() {
        return $this->belongsToMany(Resena::class);
    }
}
