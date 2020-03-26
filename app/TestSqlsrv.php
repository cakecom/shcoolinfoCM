<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSqlsrv extends Model
{
    //
    protected $connection = 'sqlsrv';
    protected $table='TStuPicture';
}
