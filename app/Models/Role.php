<?php

namespace App\Models;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(){
    	return $this->hasMany(User::class);
    }

    public function permissions(){
    	return $this->belongsToMany(Permission::class);
    }
}
