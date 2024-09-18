<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'menu_id', 'qty', 'price', 'amount'];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return $this->value;
        } elseif ($this->type == 'percent') {
            return ($this->value / 100) * $total;
        } else {
            return 0;
        }
    }
    public function tax($total){
        return (10 / 100) * $total;

    }
}
