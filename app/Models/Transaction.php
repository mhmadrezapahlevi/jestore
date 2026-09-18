<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'game_id',
        'package_id',
        'user_id',        
        'server_id',
        'payment_method',
        'total_price',    
        'status',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}