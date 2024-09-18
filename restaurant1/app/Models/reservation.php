<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'email', 'number_people', 'event', 'date', 'time','user_id','read_at'];

}
