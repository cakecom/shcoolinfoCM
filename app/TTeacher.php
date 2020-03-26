<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTeacher extends Model
{
    //
    protected $connection = 'sqlsrv';
    protected $table='TTeacher';


//    public function ltlevel()
//    {
//        return $this->belongsTo('App\LT_Level','PLevel');
//    }
    public function ltlevel()
{
    return $this->hasOne('App\LT_Level','PLevel','TeacherLevel');
}
}
