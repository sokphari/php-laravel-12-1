<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'users_id',
        'name'
        ,
        'gender',
        'email',
        'password'
    ];
    protected $hidden = [
        'password' // %&2sdfghghgjgsddf = 123456
    ];
    public function users(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
