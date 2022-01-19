<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NetworkTrafficController;
use App\Http\Controllers\BanController;
use Illuminate\Support\Facades\Route;
use App\Helpers\SortType;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/network-traffic', [NetworkTrafficController::class, 'index'])->name('network-traffic');

    Route::get('/bans', [BanController::class, 'index'])->name('bans.index');
    Route::get('/ban/{id}', [BanController::class, 'show'])->name('bans.show');
    Route::get('/ban/{id}/blacklist', [BanController::class, 'blacklist'])->name('bans.blacklist');
    Route::get('/bans/sort/{param}/{type?}', function (string $param, ?string $type = 'asc') {
        $t = 0;
        switch ($type) {
            case 'asc':
                $t = SortType::ASC;
                break;
            case 'desc':
                $t = SortType::DESC;
                break;
            default:
                $t = SortType::ASC;
        }

        // Run controller and method
        $app = app();
        $controller = $app->make(BanController::class);
        return $controller->callAction('sort', [$param, $t]);
    })->name('bans.sort');

    Route::post('/bans/filter', [BanController::class, 'filter'])->name('bans.filter');
});

require __DIR__ . '/auth.php';
