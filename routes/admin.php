<?php

use Illuminate\Support\Facades\Route;
use App\DataTables\AdminDataTable;

use App\Models\Admin;


Route::group(['as'=>'backend.'],function(){
    Route::resource('/admins', App\Http\Controllers\Backend\AdminController::class);
});

Route::get('sds',function(AdminDataTable $dataTable){
    return $dataTable->render('backend.admins.admins');
});

