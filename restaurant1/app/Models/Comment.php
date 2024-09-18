<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['menu_id', 'comment','menu_slug'];
    public function menu()
    {
        return $this->BelongsTo(Menu::class);
    }
}
