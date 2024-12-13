<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'sugar_level'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
