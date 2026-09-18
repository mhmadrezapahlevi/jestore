<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'code',
        'name',
        'developer',
        'icon',
        'bg_gradient',
        'currency',
        'is_popular',
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}