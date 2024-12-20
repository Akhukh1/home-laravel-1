<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasMany(Student::class, foreignKey: 'group_id');
    }
}
