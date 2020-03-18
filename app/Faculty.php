<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['name', 'department', 'courses' , 'areaofexpertise' , 'professional interest'];
}
