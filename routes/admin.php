<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CompoundController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\BuildingController;
use App\Http\Controllers\Admin\MaintenanceController;
use App\Http\Controllers\Admin\TenantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/'],function(){
    Route::get('/', [AdminController::class,"dashboard"])->name('dashboard');
    Route::get('/data', [AdminController::class,"getData"])->name('data');
});

Route::group(['prefix' => 'user'],function(){
    Route::get('/', [UserController::class,"index"])->name('user');
    Route::post('/users', [UserController::class, 'users'])->name('users');
    Route::post('/usersTenant', [UserController::class, 'usersTenant'])->name('usersTenant');
    Route::post('api/fetch-minor', [UserController::class, 'fetchMainor'])->name('user.fetch');
    Route::get('/upsert/{user?}',[UserController::class,'upsert'])->name('user.upsert');
    Route::get('/filter',[UserController::class,'filter'])->name('user.filter');
    Route::post('/modify',[UserController::class,'modify'])->name('user.modify');
    Route::post('/delete/{user}',[UserController::class,'destroy'])->name('user.delete');
});

Route::group(['prefix' => 'compound'],function(){
    Route::get('/', [CompoundController::class,"index"])->name('compound');
    Route::post('/compounds', [CompoundController::class, 'compounds'])->name('compounds');
    Route::post('api/fetch-minor', [CompoundController::class, 'fetchMainor'])->name('compound.fetch');
    Route::get('/upsert/{compound?}',[CompoundController::class,'upsert'])->name('compound.upsert');
    Route::get('/filter',[CompoundController::class,'filter'])->name('compound.filter');
    Route::post('/modify',[CompoundController::class,'modify'])->name('compound.modify');
    Route::post('/delete/{compound}',[CompoundController::class,'destroy'])->name('compound.delete');
});

Route::group(['prefix' => 'building'],function(){
    Route::get('/', [BuildingController::class,"index"])->name('building');
    Route::post('/buildings', [BuildingController::class, 'buildings'])->name('buildings');
    Route::post('api/fetch-minor', [BuildingController::class, 'fetchMainor'])->name('building.fetch');
    Route::get('/upsert/{building?}',[BuildingController::class,'upsert'])->name('building.upsert');
    Route::get('/filter',[BuildingController::class,'filter'])->name('building.filter');
    Route::post('/modify',[BuildingController::class,'modify'])->name('building.modify');
    Route::post('/delete/{building}',[BuildingController::class,'destroy'])->name('building.delete');
});

Route::group(['prefix' => 'maintenance'],function(){
    Route::get('/', [MaintenanceController::class,"index"])->name('maintenance');
    Route::post('/building', [MaintenanceController::class, 'building'])->name('maintenance.building');
    Route::post('api/fetch-minor', [MaintenanceController::class, 'fetchMainor'])->name('maintenance.fetch');
    Route::get('/upsert/{maintenance?}',[MaintenanceController::class,'upsert'])->name('maintenance.upsert');
    Route::get('/filter',[MaintenanceController::class,'filter'])->name('maintenance.filter');
    Route::post('/modify',[MaintenanceController::class,'modify'])->name('maintenance.modify');
    Route::post('/delete/{maintenance}',[MaintenanceController::class,'destroy'])->name('maintenance.delete');
});

Route::group(['prefix' => 'apartment'],function(){
    Route::get('/', [ApartmentController::class,"index"])->name('apartment');
    Route::post('api/fetch-minor', [ApartmentController::class, 'fetchMainor'])->name('apartment.fetch');
    Route::get('/upsert/{apartment?}',[ApartmentController::class,'upsert'])->name('apartment.upsert');
    Route::get('/filter',[ApartmentController::class,'filter'])->name('apartment.filter');
    Route::post('/apartments', [ApartmentController::class, 'apartments'])->name('apartments');
    Route::post('/modify',[ApartmentController::class,'modify'])->name('apartment.modify');
    Route::post('/delete/{apartment}',[ApartmentController::class,'destroy'])->name('apartment.delete');
});

Route::group(['prefix' => 'tenant'],function(){
    Route::get('/', [TenantController::class,"index"])->name('tenant');
    Route::post('api/fetch-minor', [TenantController::class, 'fetchMainor'])->name('tenant.fetch');
    Route::get('/upsert/{tenant?}',[TenantController::class,'upsert'])->name('tenant.upsert');
    Route::get('/filter',[TenantController::class,'filter'])->name('tenant.filter');
    Route::post('/modify',[TenantController::class,'modify'])->name('tenant.modify');
    Route::post('/delete/{tenant}',[TenantController::class,'destroy'])->name('tenant.delete');
});