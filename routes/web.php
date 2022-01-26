<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relationship/one-to-one', function() {
    $info = \App\Models\Department::find(3);
    echo "name {$info->academic_department->academic_id}";
    dd($info);

});

/**
 * 0: trainning department
 * 1: department
 * 2: homeroom teacher
 * 3: teacher
 * 4: student
 */

Route::group(['prefix'=>'/0'],function(){
    Route::group(['prefix' =>'/1'], function() {
        /**
         * 0: create
         * 1: update
         * 2: get-list
         */
        Route::view('/create', 'department.create');
        Route::post('/0', [DepartmentController::class, 'create'])->name('department-create');

        Route::get('/2', [DepartmentController::class, 'getList']);

        Route::get('/1/{id}', [DepartmentController::class, 'getInfoById']);
        Route::post('/update/{id}', [DepartmentController::class, 'updateInfoById']);
        
    });
});


