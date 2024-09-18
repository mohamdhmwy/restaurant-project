<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coubon extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'type', 'value'];
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
}
