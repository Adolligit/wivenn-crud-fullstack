<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;

    public function tasks()
    {
        return $this->hasMany('App\Models\TaskModel');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}
