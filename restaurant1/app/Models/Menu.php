<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'slug', 'title', 'dis', 'image',
        'price', 'dis_price', 'special', 'is_showing', 'category_id','type'
    ];
    protected $casts = [
        'type' => 'json',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function order()
    {
        return $this->hasMany(order::class);
    }
}

















