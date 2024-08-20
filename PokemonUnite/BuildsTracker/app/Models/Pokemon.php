<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokeimg_link',
        'pokemon_name',
        'pokemon_role',
        'pokemon_style',
    ];
}
