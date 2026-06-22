<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'roles_name',
    ];
    public function users(){
        return $this->hasMany(User::class,'roles_id','id');
    }
}
