<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PerfumeController;
use App\Models\order_detail;
use App\Models\Perfume;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//all routes / api here must be api authenticated



/**/
            /* un used */
   // Route::post('register-merchant', '\App\Http\Controllers\Api\MerchantController@register');
   //  Route::post('login-merchant', '\App\Http\Controllers\Api\MerchantController@login');
   //      Route::post('AddBankAccount', '\App\Http\Controllers\Api\BankAccountController@AddBankAccount');
   //         Route::post('create_manufacturingform', '\App\Http\Controllers\Api\ManufacturingformController@store');
   //  Route::post('create_educationform', '\App\Http\Controllers\Api\EducationformController@store');


/**/


/* Reviewed */
    Route::get('ListOfNotes', '\App\Http\Controllers\Api\NotesController@ListOfNotes');
    Route::get('getNote/{id}', '\App\Http\Controllers\Api\NotesController@show');
    Route::post('sign-up', '\App\Http\Controllers\Api\RegisterController@register');
    Route::post('sign-in', '\App\Http\Controllers\Api\RegisterController@login');
    Route::post('cheack-coupon', '\App\Http\Controllers\Api\CouponController@checkCoupon');
    Route::get('ListOfSliders', '\App\Http\Controllers\Api\SliderController@ListOfSliders');
    Route::get('ListOfBrands', '\App\Http\Controllers\Api\BrandController@ListOfBrands');
    Route::get('ListOfCategories', '\App\Http\Controllers\Api\CategoryController@ListOfCategories');
    Route::get('ListOfServices', '\App\Http\Controllers\Api\ServiceController@ListOfServices');
    Route::get('ListOfEducation', '\App\Http\Controllers\Api\EducationController@ListOfEducation');
    Route::get('ListOfBankAccount', '\App\Http\Controllers\Api\BankAccountController@ListOfBankAccount');
    Route::resource('package', '\App\Http\Controllers\Api\PackageController');
     Route::get('get-most-wanted-perfumes', '\App\Http\Controllers\Api\PerfumeController@mostwanted');
    Route::get('get-perfume-collection', '\App\Http\Controllers\Api\PerfumeController@getcollection');
    Route::resource('pages', '\App\Http\Controllers\Api\PageController');
    Route::post('add-inquiry', '\App\Http\Controllers\Api\InquiryController@Addfeedback');
    Route::get('perfume/{perfume}', '\App\Http\Controllers\Api\PerfumeController@getPerfume');
    Route::get('showmerchant/{id}', '\App\Http\Controllers\Api\MerchantController@showmerchant');




    /* End */

    Route::get('perfumecategory/{id}', '\App\Http\Controllers\Api\PerfumeController@perfumecategory');
    Route::get('last-offer', '\App\Http\Controllers\Api\PerfumeController@index');
    Route::get('get-contact-collection', '\App\Http\Controllers\Api\ContactController@ListOfContact');
    Route::post('create_Newsletter', '\App\Http\Controllers\Api\NewsletterController@store');    
    Route::get('feedback', '\App\Http\Controllers\Api\FeedbackController@index');



Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {


    /* Reviewed Api */
    Route::put('update_address/{id}', '\App\Http\Controllers\Api\AdressController@update');
    Route::post('store-address', '\App\Http\Controllers\Api\AdressController@store');
    Route::get('get-address', '\App\Http\Controllers\Api\AdressController@index');
    Route::get('show-address/{id}', '\App\Http\Controllers\Api\AdressController@show');
    Route::post('add-rating', '\App\Http\Controllers\Api\RatingController@AddRating');
    Route::get('merchant-pefume/{id}', '\App\Http\Controllers\Api\MerchantController@merchantPerfume');
    Route::get('profile', '\App\Http\Controllers\Api\RegisterController@profile');
    Route::post('change-password', '\App\Http\Controllers\Api\RegisterController@change_password');
    Route::put('update-profile', '\App\Http\Controllers\Api\RegisterController@updateProfile');
    Route::get('list-merchant-request', '\App\Http\Controllers\Api\MerchantController@listPerfumeRequest');
    Route::get('countperfumes','\App\Http\Controllers\Api\MerchantController@countperfumes');
    Route::post('toggole-follow', '\App\Http\Controllers\Api\MerchantController@toggoleFollow');
    Route::get('showfollowers', '\App\Http\Controllers\Api\MerchantController@showfollowers');
    Route::get('showfollowings', '\App\Http\Controllers\Api\MerchantController@showfollowings');



    
    Route::get('Note/{note}', '\App\Http\Controllers\Api\NotesController@show');

    Route::get('countmerchants','\App\Http\Controllers\Api\MerchantController@countmerchants');
    Route::post('filter_merchants', '\App\Http\Controllers\Api\MerchantController@filter_merchants');
    Route::get('ListOfMerchants', '\App\Http\Controllers\Api\MerchantController@ListOfMerchants');
    Route::post('filter-perfumes', '\App\Http\Controllers\Api\PerfumeController@filterproducts');
    Route::get('countfollowers','\App\Http\Controllers\Api\MerchantController@countfollowers');
     Route::post('favourite','\App\Http\Controllers\Api\FavouriteController@postFavourite');
    Route::get('list-favourites', '\App\Http\Controllers\Api\FavouriteController@listFavourites');


    /**/

  
    Route::post('merchantPerfumeSearch', '\App\Http\Controllers\Api\PerfumeController@merchantPerfumeSearch');
    Route::post('filterMerchantPerfumes', '\App\Http\Controllers\Api\PerfumeController@filterMerchantPerfumes');

    


    Route::get('get-order', '\App\Http\Controllers\Api\OrderController@index');
    Route::get('get-order-detail/{id}', '\App\Http\Controllers\Api\OrderController@show');
    Route::post('create_checkout', '\App\Http\Controllers\Api\CheckoutController@store');

    Route::get('ListOfSellers', '\App\Http\Controllers\Api\SellerController@ListOfSellers');
    Route::get('getseller/{id}', '\App\Http\Controllers\Api\SellerController@bySeller');

    Route::get('ListOfTickets', '\App\Http\Controllers\Api\TicketController@ListOfTickets');
    Route::get('gettickets/{id}', '\App\Http\Controllers\Api\TicketController@show');
    Route::post('create_tickets', '\App\Http\Controllers\Api\TicketController@store');
    Route::put('update_ticket/{id}', '\App\Http\Controllers\Api\TicketController@update');
    Route::get('ListOfDownloads', '\App\Http\Controllers\Api\DownloadController@ListOfDownloads');
    Route::get('getdownload/{id}', '\App\Http\Controllers\Api\DownloadController@show');
    Route::post('create_download', '\App\Http\Controllers\Api\DownloadController@store');

    Route::post('profile', '\App\Http\Controllers\Api\RegisterController@change_password');
    Route::post('add-perfumes', '\App\Http\Controllers\Api\PerfumeController@AddPerfume');
    Route::get('get-account-detail', '\App\Http\Controllers\Api\AccountDetailController@index');
    Route::post('store-account-detail', '\App\Http\Controllers\Api\AccountDetailController@store');
    Route::get('show-account-detail/{id}', '\App\Http\Controllers\Api\AccountDetailController@show');
    Route::post('AddPerfumeRequest', '\App\Http\Controllers\Api\PerfumeRequestController@AddPerfumeRequest');
    Route::get('list-perfume-request','\App\Http\Controllers\Api\PerfumeRequestController@index');
    Route::get('countpost','\App\Http\Controllers\Api\PerfumeRequestController@countpost');

    Route::get('merchant-statics','\App\Http\Controllers\Api\MerchantController@statics');

   
    Route::put('update_order_detail/{id}', '\App\Http\Controllers\Api\OrderDetailController@update');
    Route::get('show-order_detail/{id}', '\App\Http\Controllers\Api\OrderDetailController@show');
    Route::get('get-order-detail', '\App\Http\Controllers\Api\OrderDetailController@index');
    Route::post('store-order-detail', '\App\Http\Controllers\Api\OrderDetailController@store');
    Route::get('get-download_detail', '\App\Http\Controllers\Api\DownloaddetailController@index');
    Route::put('update_download_detail/{id}', '\App\Http\Controllers\Api\DownloaddetailController@update');
    Route::get('show-download_detail/{id}', '\App\Http\Controllers\Api\DownloaddetailController@show');
    Route::post('store-download_detail', '\App\Http\Controllers\Api\DownloaddetailController@store');

  
    Route::get('ListOfInvests', '\App\Http\Controllers\Api\InvestController@ListOfInvests');
    Route::get('getinvest/{id}', '\App\Http\Controllers\Api\InvestController@show');
    Route::post('create_invest', '\App\Http\Controllers\Api\InvestController@store');
    Route::post('create_merchantform', '\App\Http\Controllers\Api\MerchantformController@store');
   
    Route::get('ListOfBanktransfer', '\App\Http\Controllers\Api\BanktransferController@ListOfbanktransfer');
    Route::post('AddBanktransfer', '\App\Http\Controllers\Api\BanktransferController@AddBanktransfer');
    Route::get('seller/{seller}', '\App\Http\Controllers\Api\SellerController@bySeller');
    Route::post('AddSeller', '\App\Http\Controllers\Api\SellerController@AddSeller');
    Route::post('Addsupport', '\App\Http\Controllers\Api\SellerController@Addsupport');

    Route::get('show_order/{id}', '\App\Http\Controllers\Api\OrderController@show');
    Route::put('update_order/{id}', '\App\Http\Controllers\Api\OrderController@update');
    Route::post('store-order', '\App\Http\Controllers\Api\OrderController@store');
    Route::get('show-workshop', '\App\Http\Controllers\Api\WorkshopController@index');

    Route::get('merchant', '\App\Http\Controllers\Api\MerchantController@bymerchant');

   /*
    Route::get('address_of_accountdetail', '\App\Http\Controllers\Api\AccountDetailController@byAccountDetail');
     Route::get('ListOfCarts', '\App\Http\Controllers\Api\CartController@ListOfCarts');
    Route::get('getcart/{id}', '\App\Http\Controllers\Api\CartController@show');
    Route::post('create_cart', '\App\Http\Controllers\Api\CartController@store');
    Route::get('ListOfCheckouts', '\App\Http\Controllers\Api\CheckoutController@ListOfCheckouts');
    Route::get('getcheckout/{id}', '\App\Http\Controllers\Api\CheckoutController@show');
    
    Route::post('reviewstore', '\App\Http\Controllers\Api\PerfumeController@reviewstore');

    Route::post('NotesRating', '\App\Http\Controllers\Api\NotesController@reviewstore');
     Route::post('AddreviewPerfume', '\App\Http\Controllers\Api\PerfumeController@AddreviewPerfume');
    Route::post('AddreviewNote', '\App\Http\Controllers\Api\NotesController@AddreviewNote');


    */

Route::any('tap-callback',[CheckoutController::class,'callback'])->name('tap.callback');

    // Route::post('ToggleFavouriteProduct', '\App\Http\Controllers\Api\UserController@ToggleFavouriteProduct');
    // Route::get('ShowFavouriteProduct', '\App\Http\Controllers\Api\UserController@ShowFavouriteProduct');

    // Route::post('ToggleFavouriteNote', '\App\Http\Controllers\Api\UserController@ToggleFavouriteNote');  //toggle note
    // Route::get('ShowFavouriteNote', '\App\Http\Controllers\Api\UserController@ShowFavouriteNote');

    Route::post('add-partner-request', '\App\Http\Controllers\Api\PartnerRequestController@AddPartneRequest');

    Route::get('PaymentRequest', '\App\Http\Controllers\Api\PaymentController@Pay');
//    Route::post('Pay', '\App\Http\Controllers\Api\PaymentController@PaymentRequest');
    Route::get('check_payment', '\App\Http\Controllers\Api\PaymentController@check_payment');

    Route::post('/charge', '\App\Http\Controllers\Api\PaymentController@PaymentRequest')->name('pay.charge');
    Route::get('/settings', '\App\Http\Controllers\Api\SettingController@settings')->name('settings');

    Route::get('ListOfThemeSetting', '\App\Http\Controllers\Api\ThemeSettingController@ListOfThemeSetting');
    Route::post('storetheme', '\App\Http\Controllers\Api\ThemeSettingController@store');
    Route::put('update-themesetting/{id}', '\App\Http\Controllers\Api\ThemeSettingController@update');
    Route::get('showtheme/{id}', '\App\Http\Controllers\Api\ThemeSettingController@show');
});


