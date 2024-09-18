<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'qty', 'address', 'address2',
        'country', 'state', 'zip', 'payment_method', 'payment_states', 'delivery_states',
        'coubon', 'total', 'menu_id', 'user_id','info'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function menu()
    {
        return $this->belongsTo(menu::class);
    }
    public function coub()
    {
        return $this->belongsTo(coubon::class);
    }
}
