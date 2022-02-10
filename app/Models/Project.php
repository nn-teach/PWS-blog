<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'title', 'description'
    // ];
    protected $guarded = [];

    // Get the user the project.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Get the tasks for the project.
    public function tasks()
    {
        return $this->hasMany(Task::class);
        // Select * from tasks where project_id = 1
    }
}
