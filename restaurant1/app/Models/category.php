<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'slug', 'image', 'dis', 'is_showing'];
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
