<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'read_at'];
    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
