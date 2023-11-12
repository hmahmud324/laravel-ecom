<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EcommerceController;
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

Route::controller(EcommerceController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/product/index', 'product')->name('all-product');
    Route::get('/product/detail/{id}', 'detail')->name('product-detail');

});






Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard'); // Redirect admin to the admin.dashboard route
    } elseif (auth()->user()->role === 'user') {
        return redirect()->route('home');
    } else {
        return '';
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
});
require __DIR__.'/auth.php';




Route::middleware(['auth','role:admin'])->group(function(){

    Route::controller(AdminController::class)->group(function() {
        Route::get('/admin/dashboard','dashboard')->name('admin.dashboard');
        Route::get('/admin/logout','destroy')->name('admin.logout');
        Route::get('/admin/profile','profile')->name('admin.profile');
        Route::get('/admin/edit','editProfile')->name('admin.edit');
        Route::post('/admin/update','updateProfile')->name('admin.update');
        Route::get('/admin/change-password','changePassword')->name('admin.change-password');
        Route::post('/admin/update-password','updatePassword')->name('admin.update-password');
    });


    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category/add','index')->name('category.add');
        Route::post('/category/new','create')->name('category.new');
        Route::get('/category/manage','manage')->name('category.manage');
        Route::get('/category/edit/{id}','edit')->name('category.edit');
        Route::post('/category/update/{id}','update')->name('category.update');
        Route::get('/category/delete/{id}','delete')->name('category.delete');
    });


    Route::controller(BrandController::class)->group(function(){
        Route::get('/brand/add','index')->name('brand.add');
        Route::post('/brand/new','create')->name('brand.new');
        Route::get('/brand/manage','manage')->name('brand.manage');
        Route::get('/brand/edit/{id}','edit')->name('brand.edit');
        Route::post('/brand/update/{id}','update')->name('brand.update');
        Route::get('/brand/delete/{id}','delete')->name('brand.delete');
    });

    Route::resource('product',ProductController::class);
    Route::get('/product/update-status/{id}', [ProductController::class, 'updateStatus'])->name('product.update-status');

});



