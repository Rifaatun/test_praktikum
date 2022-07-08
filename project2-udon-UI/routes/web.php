<?php
use App\Http\Controllers\{
    CampaignController,
    CashoutController,
    CategoryController,
    ContactController,
    DashboardController,
    DonationController,
    DonaturController,
    ReportController,
    SettingController,
    SubscriberController,
    UserProfileInformationController
};
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Route::group([
//     'middleware' => ['auth', 'role:admin,donatur'],
// ], function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })
//     ->name('dashboard');

    // Route::group([
    //     'middleware' => 'role:admin'
    // ], function () {
    //     //
    // });

    // Route::group([
    //     'middleware' => 'role:donatur'
    // ], function () {
    //     //
    // });
// });