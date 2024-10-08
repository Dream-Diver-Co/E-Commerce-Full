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
use App\Http\Controllers\CshirtController;
use App\Http\Controllers\FshirtController;
use App\Http\Controllers\TshirtController;
use App\Http\Controllers\PoloController;
use App\Http\Controllers\MenpentController;
use App\Http\Controllers\BlazerController;
use App\Http\Controllers\MenshoeController;
use App\Http\Controllers\WomentopController;
use App\Http\Controllers\DresseController;
use App\Http\Controllers\WomenpentController;
use App\Http\Controllers\KameezController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\CosmeticController;
use App\Http\Controllers\WomenshoeController;
use App\Http\Controllers\JuwalariController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\NewbornController;
use App\Http\Controllers\StrollerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\RecentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;




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
Route::get('/subcategories', [FrontendController::class, 'subcategory'])->name('subcategory');
Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/categories/{category}/subcategories', [FrontendController::class, 'showSubcategories'])->name('categories.subcategories');
Route::get('/subcategories/{subcategory}/products', [FrontendController::class, 'showProducts'])->name('subcategories.products');



Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/review', [FrontendController::class, 'review'])->name('review');


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
        Route::resource('/client', ClientController::class);
        Route::resource('featured', FeaturedController::class);
        Route::resource('recent', RecentController::class);




        //offer route
        Route::resource('/summer', SummerController::class);
        Route::resource('winter', WinterController::class);
        //contact route
        Route::resource('usercontact', UserContactController::class);
        Route::resource('admincontact', AdmincontactController::class);
        Route::resource('about', AboutController::class);
        //men route
        Route::resource('panjabi', PanjabiController::class);
        Route::resource("/cshirt", CshirtController::class);
        Route::resource('/fshirt', FshirtController::class);
        Route::resource('/tshirt', TshirtController::class);
        Route::resource('/polo', PoloController::class);
        Route::resource('/menpent', MenpentController::class);
        Route::resource('/blazer', BlazerController::class);
        Route::resource('/menshoe', MenshoeController::class);
        //women route
        Route::resource('/womentop', WomentopController::class);
        Route::resource('/dresse', DresseController::class);
        Route::resource('/womenpent', WomenpentController::class);
        Route::resource('/kameez', KameezController::class);
        Route::resource('/bag', BagController::class);
        Route::resource('/cosmetic', CosmeticController::class);
        Route::resource('/womenshoe', WomenshoeController::class);
        Route::resource('/juwalari', JuwalariController::class);
        //baby route
        Route::resource('/food', FoodController::class);
        Route::resource('/clothing', ClothingController::class);
        Route::resource('/newborn', NewbornController::class);
        Route::resource('/stroller', StrollerController::class);

        Route::resource('categories', CategoryController::class);
        Route::resource('subcategories', SubcategoryController::class);
        Route::resource('products', ProductController::class);

        // Route::get('categories/{category}/subcategories', [CategoryController::class, 'showSubcategories'])->name('categories.subcategories');
        // Route::get('subcategories/{subcategory}/products', [SubcategoryController::class, 'showProducts'])->name('subcategories.products');



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
