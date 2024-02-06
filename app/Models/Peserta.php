<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $lable = "peserta";
    protected $fillable = ['event_id', 'name', 'phone', 'address', 'email'];
}
