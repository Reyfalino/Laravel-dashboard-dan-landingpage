<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $lable = "events";
    protected $fillable = ['name', 'date', 'location', 'fee', 'description'];
}
