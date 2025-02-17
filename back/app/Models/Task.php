<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'assignee_id',
        'due_date'
    ];

    use HasFactory;

    public function employee()
    {
        return $this->belongsTo('App\Models\User');
    }
}