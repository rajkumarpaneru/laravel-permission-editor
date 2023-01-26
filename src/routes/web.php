<?php

use rajkumarpaneru\LaravelPermissionEditor\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('roles', RoleController::class);
