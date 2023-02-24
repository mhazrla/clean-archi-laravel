<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'title', 'gender'
    ];

    protected $guarded = ['id'];
}
