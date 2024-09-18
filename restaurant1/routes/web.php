<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminReservationController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\CoubonController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\OrderAdminController;
use App\Http\Controllers\admin\TimeWorkController;
use App\Http\Controllers\admin\WorkTimeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\user\cart\CartController;
use App\Http\Controllers\user\CategoryMenuController;
use App\Http\Controllers\user\CommentController;
use App\Http\Controllers\user\OrderUserController;
use App\Http\Controllers\user\reservation\reservationController;
use App\Http\Controllers\user\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        //////for google login
        Route::get('auth/google', [SocialController::class, 'redirectToGoogle'])->name('google');
        Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

        //////for facebook login
        Route::get('auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('facebook');
        Route::get('auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);

        //////
        Route::group([
            'middleware' => ['auth', 'is_admin']
        ], function () {

            Route::get('isadmin', [AdminController::class, 'index'])->name('isadmin');
            Route::resource('category', CategoryController::class);
            Route::resource('menu', MenuController::class);
            Route::resource('coubon', CoubonController::class);
            Route::resource('orderadmin', OrderAdminController::class);
            Route::resource('worktime', WorkTimeController::class);
            Route::resource('event', EventController::class);
            Route::resource('gallery', GalleryController::class);
            Route::resource('blog', BlogController::class);
            Route::resource('contacts', ContactController::class);
            Route::resource('reservation', AdminReservationController::class);
            Route::get('/shownotification', [NotificationController::class, 'index'])->name('show_notification');
            Route::get('/orderstatus/{typeorder}', [AdminController::class, 'orderstatus'])->name('order_status');
            Route::get('/ordertime/{time}', [AdminController::class, 'ordertime'])->name('order_time');
        });

        ////user /////
        Route::get('/', [WebsiteController::class, 'index'])->name('user');
        Route::get('menus', [WebsiteController::class, 'menus'])->name('menus');
        Route::get('blogs', [WebsiteController::class, 'blog'])->name('blogs');
        //// out page //////
        Route::get('show_category/{slug}', [CategoryMenuController::class, 'ShowCategory'])->name('show_category');
        Route::get('show_type/{class}', [CategoryMenuController::class, 'showtype'])->name('show_type');
        Route::get('moreCategory', [CategoryMenuController::class, 'moreCategory'])->name('moreCategory');
        Route::get('singelmenu/{category_slug}/{menu_slug}', [CategoryMenuController::class, 'singelmenu'])->name('singel_menu');
        Route::get('show_event_details/{name}', [WebsiteController::class, 'showeventdetails'])->name('show_event_details');
        ///// Cart   ///////
        Route::group([
            'middleware' => ['auth']

        ], function () {
            Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
            Route::post('Addcontact', [WebsiteController::class, 'Addcontact'])->name('Add_contact');
            Route::post('Addcomment', [CommentController::class, 'AddComments'])->name('Add_comment');

            Route::post('/addtocart', [CartController::class, 'addtocart'])->name('add_to_cart');
            Route::get('/showcart', [CartController::class, 'showcart'])->name('show_cart');
            Route::post('/updatecart', [CartController::class, 'updatecart'])->name('update_cart');
            Route::delete('/deletecart/{id}', [CartController::class, 'deletecart'])->name('deletecart');
            Route::post('/coubonCart', [CartController::class, 'coubonCart'])->name('coubonCart');
            Route::get('/thank_you', [OrderUserController::class, 'thankyou'])->name('thank_you');
            Route::resource('orderuser', OrderUserController::class);
            //// cash_On_Delivery
            Route::get('/cashOnDelivery', [OrderUserController::class, 'cashOnDelivery'])->name('cash_On_Delivery');
            Route::post('/StoreOrderDelivery', [OrderUserController::class, 'StoreOrderDelivery'])->name('Store_Order_Delivery');
        });

        /////Payment
        Route::group([
            'middleware' => ['auth']
        ], function () {
            Route::post('Add_Reservation', [reservationController::class, 'Add_Reservation'])->name('Add_Reservation');
            Route::get('/showReservationForm', [reservationController::class, 'showReservationForm'])->name('show_Reservation_Form');
        });
    }
);




// Route::controller(ReservationController::class)->group(function () {
//     Route::get('stripe', 'stripe');
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// });



// Route::get('/reserve', [ReservationController::class, 'showForm'])->name('show_Form');
// Route::post('/reserve', [ReservationController::class, 'submitForm'])->name('submit_Form');

// Route::get('/payment', [ReservationController::class, 'payment'])->name('payment');
// Route::get('/payment/success', [ReservationController::class, 'paymentSuccess']);
// Route::get('/payment/cancel', [ReservationController::class, 'paymentCancel']);
////////////
