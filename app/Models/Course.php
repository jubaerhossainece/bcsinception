<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class Course extends Model
{
    use HasFactory;

    public function exams(){
    	return $this->hasMany(Exam::class);
    }
}
