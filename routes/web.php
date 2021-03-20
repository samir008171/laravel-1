<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor;
use App\Models\General_model;

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



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



//this group for Doctor
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

}); 

//this group for admin
Route::group(['middleware'=>['ProtectedAdminPage']],function(){
    //for dashbord
    Route::get('/', function () {
        return view('welcome');
    });
    //for doctor list view
    Route::get('/doctor', [Doctor::class, 'index']);
    //doctor add view
    Route::get('/doctor/add', [Doctor::class, 'add']);
    //doctor save data
    Route::post('/doctor/save', [Doctor::class, 'save']);

});
//global delete function
Route::post('/delete_global', [General_model::class, 'delete_global']);