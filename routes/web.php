<?php

use Illuminate\Support\Facades\Route;
use App\LT_Level;
use App\TTeacher;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/testsqlsrv',function (){
    $data=\App\TestSqlsrv::select('PicStudent')->where('IDStudent','2539')->first();
    $imageData = base64_encode($data['PicStudent']);
    echo "<img width='240' height='320' src=\"data:image/png;base64,".$imageData." \">";
});
Route::get('/school',function (){
    $schoolinfo=\App\TSchool::first();
   return view('school.schoolinfo',compact('schoolinfo'));
});
Route::get('/teacherNum',function (){
    $needle='1';

    $products = TTeacher::whereHas('ltlevel',function($query) use ($needle){
        $unique_materials=array(0, 1, 2, 3, 4);
        $query->where("Status","=","{$needle}")
            ->groupBy('TeacherLevel','LevelName')
            ->havingRaw('TeacherLevel IN('.implode(',',($unique_materials)).')')
            ->orderBy('TeacherLevel')
        ;
    })->get();
    dd($products);

});
Route::get('/das', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
