<?php


use App\Http\Controllers\TaskController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('beehives', \App\Livewire\Beehives\Index::class)->name('beehives.index');
    Route::get('tasks/create', \App\Livewire\Beehives\Create::class)->name('beehives.create');
    Route::get('tasks/edit/{task}', \App\Livewire\Beehives\EditBeehive::class)->name('beehives.edit-beehive');

    Route::resource('laravel/tasks', TaskController::class);

    Route::view('about', 'about')->name('about');
});

require __DIR__.'/auth.php';
