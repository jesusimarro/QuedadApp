<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'categoria_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}