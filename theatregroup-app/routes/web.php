<?php

//import your controllers here -wafa 
use App\Http\Controllers\ContributorsPageController;
use App\Http\Controllers\StaffRolesController;
use App\Http\Controllers\ContributorsController;
use App\Http\Controllers\EprogramController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PlayCreditsController;
use App\Http\Controllers\PlayDateTimesController;
use App\Http\Controllers\HumberTheatrePageController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\CustomAuthController;




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

//this will indicate laravel all the CRUD operations by controller -wafa
Route::resource('contributorspage', ContributorsPageController::class);

Route::resource('staffroles', StaffRolesController::class);

Route::resource('contributors', ContributorsController::class);

Route::resource('homepages', HomepageController::class);

Route::resource('playcredits', PlayCreditsController::class);

Route::resource('playdatetimes', PlayDateTimesController::class);

Route::resource('eprograms', EprogramController::class);

Route::resource('humbertheatrepages', HumberTheatrePageController::class);

Route::resource('faculties', FacultyController::class);

//for login and registeration 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

