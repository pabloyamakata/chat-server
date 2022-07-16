<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', HomeController::class)->name('welcome');
Route::resource('courses', CourseController::class);

/*

If you follow the naming conventions, route resource
allows you to create all the routes in one line of code instead of doing this...

Route::controller(CourseController::class)->group(function() {
    Route::get('courses', 'index')->name('courses.index');
    Route::get('courses/create', 'create')->name('courses.create');
    Route::post('courses', 'store')->name('courses.store');
    Route::get('courses/{course}', 'show')->name('courses.show');
    Route::get('courses/{course}/edit', 'edit')->name('courses.edit');
    Route::put('courses/{course}', 'update')->name('courses.update');
    Route::delete('courses/{course}', 'destroy')->name('courses.destroy');
});

*/
