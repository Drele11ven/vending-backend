<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['drink_id', 'random_code', 'status'];

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
