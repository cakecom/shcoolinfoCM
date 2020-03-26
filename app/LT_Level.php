<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LT_Level extends Model
{
    //
    protected $connection = 'sqlsrv';
    protected $table='LT_Level';


    public function teacher()
    {
        return $this->hasMany('App\TTeacher','TeacherLevel','PLevel');
    }
}
