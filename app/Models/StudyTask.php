<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTask extends Model
{
    protected $fillable = [
        'subject',
        'title',
        'deadline',
        'priority',
        'status',
    ];
}
