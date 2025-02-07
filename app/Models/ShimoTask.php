<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShimoTask extends Model
{
    protected $fillable = ['title','content','category_id'];
}
