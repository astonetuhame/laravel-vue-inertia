<?php

use App\Models\User;
use Inertia\Inertia;
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
    return Inertia::render(
        'Welcome',
        [
            'name' => 'Astone Tuhame',
            'frameworks' => ['Laravel', 'Vue', 'Inertia']
        ]
    );
});

Route::get('/users', function () {
    return Inertia::render('Users', ['users' => User::paginate(10)->through(fn ($user) => [
        'id' => $user->id,
        'name' => $user->name
    ])]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
