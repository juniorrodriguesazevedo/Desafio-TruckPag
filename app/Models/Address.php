<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'address', 'number', 'district'];

    protected $hidden = ['created_at', 'updated_at'];
}
