<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentaddController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;

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

Route::post('/addimage',[StudentaddController::class,'store'])->name('addimage');


Route::get('/register',[RegisterController::class,'create']);
Route::post('/registerread',[RegisterController::class,'store']);
Route::get('/registerview',[RegisterController::class,'index']);



Route::get('/aregister',[LoginController::class,'create']);
Route::post('/aregisterread',[LoginController::class,'store']);
Route::post('/logs',[LoginController::class,'check']);
Route::post('/logu',[StudentaddController::class,'checku']);


Route::get('/Studentadd',[StudentaddController::class,'create']);
Route::post('/Studentaddread',[StudentaddController::class,'store']);
Route::get('/studentviews',[StudentaddController::class ,'ro'] );
Route::get('/payment',[PaymentController::class ,'paym'] );

Route::post('/paymmm',[PaymentController::class ,'stores'] );

Route::get('/mmm',[PaymentController::class ,'index'] );

Route::get('/Course',[CourseController::class,'create']);
Route::post('/Courseread',[CourseController::class,'store']);
Route::post('/courseeditprocess',[CourseController::class,'update']);



Route::get('/', function () {return view('veruthe');});

Route::get('/addstd', function () {return view('addstd');});

Route::get('/course', function () {return view('course');});

Route::get('/stdlogin', function () {return view('stdlogin');});

Route::get('/courseview', function () {return view('courseview');});

//Route::get('/roro', function () {return view('roro');});

Route::get('/mainuser', function () {return view('mainuser');});

Route::get('/profile', function () {return view('profile');});

Route::get('/admlogin', function () {return view('admlogin');});

Route::get('/signup_admin', function () {return view('signup_admin');});

Route::get('/admhome', function () {return view('admhome');});

Route::get('/stdreg', function () {return view('stdreg');});

Route::get('/adminreg', function () {return view('adminreg');});

Route::get('/admintheme', function () {return view('admintheme');});

Route::get('/test', function () {return view('test');});

Route::get('/test2', function () {return view('test2');});

Route::get('/studentview', function () {return view('studentview');});




//Route::get('/user/{id}/delete', [StudentaddController::class,'deleteview']);
Route::get('/userdeleteprocess/{id}',[StudentaddController::class,'destroy']);


Route::post('/usereditprocess/{id}',[StudentaddController::class,'update']);
Route::get('/usereditview/{id}', [StudentaddController::class,'edit']);


Route::get('/logoutu',[LoginController::class , 'lgoutu' ] );
Route::get('/courseview',[CourseController::class,'index']);
Route::get('/coursedeleteprocess/{id}',[CourseController::class,'coursedestroy']);

Route::post('/courseditprocess/{id}',[CourseController::class,'update']);
Route::get('/courseeditview/{id}', [CourseController::class,'edit']);


Route::get('/logout',[LoginController::class , 'lgout' ] );

Route::group(['middleware'=>['Admincheck']],function()
{
    
    
Route::get('/test3', function () {return view('test3');});
Route::get('/addview',[StudentaddController::class,'index']);
   
    
});

