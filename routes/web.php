<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HeroSliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CustomerDashboardController;
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
    Route::get('/search/index', 'search')->name('search.index');
    Route::get('/order-history', 'history')->name('order-history');


    Route::controller(CartController::class)->group(function(){
        Route::post('/add-to-cart/{id}', 'index')->name('cart.add');
        Route::get('/my-shopping-cart', 'show')->name('cart.show');
        Route::post('/update-shopping-cart/{id}', 'update')->name('cart.update');
        Route::get('/delete-shopping-cart/{id}', 'delete')->name('cart.delete');
    });


    Route::post('subscribe-newsletter','subscribeNewsletter')->name('subscribe-newsletter');

});


    Route::controller(CustomerAuthController::class)->group(function(){
        Route::get('/customer-registration', 'registration')->name('customer.registration');
        Route::post('/customer-registration', 'newRegistration')->name('customer.registration');
        Route::get('/customer-login', 'login')->name('customer.login');
        Route::post('/customer-login', 'loginCheck')->name('customer.login');
        Route::get('/customer-logout', 'logout')->name('customer.logout');

    });


    Route::controller(CheckoutController::class)->group(function(){
        Route::get('/checkout','index')->name('checkout');
        Route::post('/new-order','newOrder')->name('order.new');
        Route::get('/complete-order','orderComplete')->name('order.complete');
    });



Route::middleware(['customer'])->group(function () {
   Route::controller(CustomerDashboardController::class)->group(function(){
        Route::get('/my-dashboard', 'index')->name('customer.dashboard');
        Route::get('/my-profile', 'profile')->name('customer.profile');
        Route::post('/update-my-profile', 'updateProfile')->name('customer.update-profile');
        Route::post('/update-profile-image', 'updateImage')->name('update-profile-Image');
        Route::get('/my-order-history', 'orderHistory')->name('customer.order-history');
        Route::get('/my-order-detail', 'orderDetail')->name('customer.order-detail');
        Route::get('/my-wishlist', 'wishlist')->name('customer.wishlist');
   });
});



    Route::controller(WishlistController::class)->group(function(){
        Route::get('/wishlist/index', 'index')->name('wishlist.index');
        Route::post('/wishlist/add', 'addToWishlist')->name('wishlist.add');
        Route::post('/wishlist/remove', 'removeFromWishlist')->name('wishlist.remove');
    });
    
    Route::controller(PaypalController::class)->group(function(){
        Route::get('/paypal/payment', 'payment')->name('paypal.payment');
        Route::get('/paypal/success', 'success')->name('paypal.success');
        Route::get('/paypal/cancel', 'cancel')->name('paypal.cancel');
       
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

    //HeroSlider Routes
    Route::controller(HeroSliderController::class)->group(function(){
        Route::get('/hero-slider/add','index')->name('hero-slider.add');
        Route::post('/hero-slider/new','create')->name('hero-slider.new');
        Route::get('/hero-slider/manage','manage')->name('hero-slider.manage');
        Route::get('/hero-slider/edit/{id}','edit')->name('hero-slider.edit');
        Route::post('/hero-slider/update/{id}','update')->name('hero-slider.update');
        Route::get('/hero-slider/delete/{id}','delete')->name('hero-slider.delete');
     });
     
     
     //Testimonial Routes
    Route::controller(TestimonialController::class)->group(function(){
        Route::get('/testimonial/add','index')->name('testimonial.add');
        Route::post('/testimonial/new','create')->name('testimonial.new');
        Route::get('/testimonial/manage','manage')->name('testimonial.manage');
        Route::get('/testimonial/edit/{id}','edit')->name('testimonial.edit');
        Route::post('/testimonial/update/{id}','update')->name('testimonial.update');
        Route::get('/testimonial/delete/{id}','delete')->name('testimonial.delete');
     });


     Route::controller(AdminOrderController::class)->group(function(){
        Route::get('/admin/all-order', 'index')->name('admin.all-order');
        Route::get('/admin/order-detail/{id}', 'detail')->name('admin.order-detail');
        Route::get('/admin/order-edit/{id}', 'edit')->name('admin.order-edit');
        Route::post('/admin/order-update/{id}', 'update')->name('admin.order-update');
        Route::get('/admin/order-invoice/{id}', 'invoice')->name('admin.order-invoice');
        Route::get('/admin/download-order-invoice/{id}', 'downloadInvoice')->name('admin.download-order-invoice');
        Route::get('/admin/order-delete/{id}', 'delete')->name('admin.order-delete');
     });


     Route::controller(NewsletterController::class)->group(function (){
        Route::get('/subscriber/index',  'index')->name('subscriber.index');
        Route::post('/subscriber/store',  'store')->name('subscriber.store');
        Route::get('/subscriber/delete/{id}',  'delete')->name('subscriber.delete');
        
    });
     

    Route::resource('product',ProductController::class);
    Route::get('/product/update-status/{id}', [ProductController::class, 'updateStatus'])->name('product.update-status');

});



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
               ? back()->with(['status' => __($status)])
               : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');



Route::post('/confirm-password', function (Request $request) {
    if (! Hash::check($request->password, $request->user()->password)) {
        return back()->withErrors([
            'password' => ['The provided password does not match our records.']
        ]);
    }

    $request->session()->passwordConfirmed();

    return redirect()->intended();
})->middleware(['auth', 'throttle:6,1']);


