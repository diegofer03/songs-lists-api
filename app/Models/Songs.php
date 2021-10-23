<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;
    
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeGenre($query, $genre)
    {
        if($genre)
            return $query->where('genre', 'LIKE', "%$genre%");
    }
}
