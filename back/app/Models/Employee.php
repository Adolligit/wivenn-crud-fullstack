<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'department_id',
    ];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}
