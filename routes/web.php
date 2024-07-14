<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SummerController;
use App\Http\Controllers\WinterController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\AdmincontactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PanjabiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CshirtController;
use App\Http\Controllers\FshirtController;
use App\Http\Controllers\TshirtController;
use App\Http\Controllers\PoloController;
use App\Http\Controllers\MenpentController;
use App\Http\Controllers\BlazerController;




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

// Route::get('/', function () {
//     return view('frontend.pages.home.index');
// })->name('frontend.index');

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/men', [FrontendController::class, 'men'])->name('men');
Route::get('/women', [FrontendController::class, 'women'])->name('women');
Route::get('/baby', [FrontendController::class, 'baby'])->name('baby');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/review', [FrontendController::class, 'review'])->name('review');


Route::get('/men_blazer', [FrontendController::class, 'men_blazer'])->name('men_blazer');
Route::get('/men_bottom', [FrontendController::class, 'men_bottom'])->name('men_bottom');
Route::get('/men_casul_shirt', [FrontendController::class, 'men_casul_shirt'])->name('men_casul_shirt');
Route::get('/men_formal_shirt', [FrontendController::class, 'men_formal_shirt'])->name('men_formal_shirt');
Route::get('/men_panjabi', [FrontendController::class, 'men_panjabi'])->name('men_panjabi');
Route::get('/men_polo', [FrontendController::class, 'men_polo'])->name('men_polo');
Route::get('/men_shoes', [FrontendController::class, 'men_shoes'])->name('men_shoes');
Route::get('/men_t_shirt', [FrontendController::class, 'men_t_shirt'])->name('men_t_shirt');

Route::get('/women_bag', [FrontendController::class, 'women_bag'])->name('women_bag');
Route::get('/women_bottom', [FrontendController::class, 'women_bottom'])->name('women_bottom');
Route::get('/women_cosmetic', [FrontendController::class, 'women_cosmetic'])->name('women_cosmetic');
Route::get('/women_dress', [FrontendController::class, 'women_dress'])->name('women_dress');
Route::get('/women_kameez', [FrontendController::class, 'women_kameez'])->name('women_kameez');
Route::get('/women_shoes', [FrontendController::class, 'women_shoes'])->name('women_shoes');
Route::get('/women_tops', [FrontendController::class, 'women_tops'])->name('women_tops');
Route::get('/juwalari', [FrontendController::class, 'juwalari'])->name('juwalari');

Route::get('/baby_clothing', [FrontendController::class, 'baby_clothing'])->name('baby_clothing');
Route::get('/baby_foods', [FrontendController::class, 'baby_foods'])->name('baby_foods');
Route::get('/baby_newborn', [FrontendController::class, 'baby_newborn'])->name('baby_newborn');
Route::get('/baby_strollers', [FrontendController::class, 'baby_strollers'])->name('baby_strollers');


Route::get('/offer', [FrontendController::class, 'offer'])->name('offer');
Route::get('/product_details/{id}', [FrontendController::class, 'product_details'])->name('product_details');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Profile Route
        Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
        Route::post('change-password', [AdminController::class, 'changePassword'])->name('admin.change-password');

        // Dashboard Route
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Auth Route
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

        // other route
        Route::resource("/hero", HeroController::class);
        Route::resource('/summer', SummerController::class);
        Route::resource('winter', WinterController::class);
        Route::resource('usercontact', UserContactController::class);
        Route::resource('admincontact', AdmincontactController::class);
        Route::resource('about', AboutController::class);
        Route::resource('panjabi', PanjabiController::class);
        Route::resource("/cshirt", CshirtController::class);
        Route::resource('/fshirt', FshirtController::class);
        Route::resource('/tshirt', TshirtController::class);
        Route::resource('/polo', PoloController::class);
        Route::resource('/menpent', MenpentController::class);
        Route::resource('/blazer', BlazerController::class);

    });
});

// // Hero Routes
// Route::middleware(['auth'])->group(function () {
//     Route::resource('hero', HeroController::class);
// });

Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::prefix('vendor')->group(function() {
        // Profile Route
        Route::get('profile', [VendorController::class, 'profile'])->name('vendor.profile');
        Route::post('profile', [VendorController::class, 'updateProfile'])->name('vendor.profile.update');
        Route::post('change-password', [VendorController::class, 'changePassword'])->name('vendor.change-password');

        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');

        // Auth Route
        Route::get('logout', [VendorController::class, 'logout'])->name('vendor.logout');
    });

});

require __DIR__.'/auth.php';
