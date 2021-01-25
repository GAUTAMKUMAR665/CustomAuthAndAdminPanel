<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catogery extends Model
{
    use HasFactory;

    protected $fillable=['catogery_id','catogery_name','catogery_slug'];
}
