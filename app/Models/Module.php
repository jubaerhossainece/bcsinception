<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class Module extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function permissions(){
    	return $this->hasMany(Permission::class);
    }

    public function exams(){
    	return $this->hasMany(Exam::class);
    }
}
