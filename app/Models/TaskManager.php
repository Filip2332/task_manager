<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskManager extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name', 'description','completed'];
}
