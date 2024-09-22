<?php

use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/team-members', [TeamMemberController::class, 'index'])->name('teamMembers.index');
Route::get('/team-members/{id}', [TeamMemberController::class, 'show'])->name('teamMembers.show');
