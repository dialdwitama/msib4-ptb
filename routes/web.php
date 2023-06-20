<?php

declare(strict_types=1);

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\PtbController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\DiktendikController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', [
        'ptbs' => \App\Models\Ptb::all(),
        'keyword' => ''
    ]);
});

Route::middleware('auth')->group(function (): void {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    Route::resource('ptbs', PtbController::class);
    Route::resource('monevs', MonevController::class);
    Route::resource('akademiks', AkademikController::class);
    Route::resource('diktendiks', DiktendikController::class);
    Route::resource('kemahasiswaans', KemahasiswaanController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('details/{id}', [PtbController::class, 'destroy2'])->name('ptbs.destroy2');
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('welcome', [PtbController::class, 'welcome'])->name('welcome');
    Route::get('/ptb/create', [PtbController::class, 'create'])->name('ptbs.create');
    Route::get('/ptb/{id}/create2', [PtbController::class, 'create2'])->name('ptbs.create2');
    Route::post('/ptbs', [PtbController::class, 'store'])->name('ptbs.store');
    Route::post('/ptbs/{id}/store2', [PtbController::class, 'store2'])->name('ptbs.store2');
    Route::get('/export-monevs', [MonevController::class, 'export'])->name('monevs.export');
    Route::get('/export-ptbs', [PtbController::class, 'export'])->name('ptbs.export');
    Route::resource('ptbs', PtbController::class)->middleware('can:access-ptbs');
    Route::resource('monevs', MonevController::class)->middleware('can:access-monevs');
    Route::resource('ptbs', PtbController::class)->middleware('can:edit-ptbs');
Route::resource('monevs', MonevController::class)->middleware('can:edit-monevs');

    // ...

    Route::group(['middleware' => ['can:add user']], function () {
        Route::get('/admin', function () {
            $users = \App\Models\User::query()
                ->get();
            return view('admin.index', compact('users'));
        })->name('admin.index');

        Route::get('/admin/create', function () {
            return view('admin.create');
        })->name('admin.create');

        Route::post('/admin', function (Request $request) {
            $validated = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|unique:users,email',
                'password' => 'required|confirmed|min:4'
            ]);
        
            $validated['password'] = Hash::make($validated['password']);
            $user = \App\Models\User::create($validated); // Define the $user variable
        
            $role = Role::findByName('monev-only');
            $user->assignRole($role);
        
            return redirect(\route('admin.index'));
        })->name('admin.store');
        

        Route::delete('/admin/{user}', function (User $user) {
            $user->delete();

            return redirect(\route('admin.index'));
        })->name('admin.destroy');
    });
});


require __DIR__ . '/auth.php';
