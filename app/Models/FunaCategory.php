<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunaCategory extends Model
{
    use HasFactory;
    protected $fillable = ["name"];
}