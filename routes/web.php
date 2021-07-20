<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CardrechargeController;
use App\Http\Controllers\CardRequestController;
use App\Models\customer;

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
 

///----------  POST Route ------------
 
///-----------USER MANUAL ----------- 

Route::post('/feedbackcontrol','feedbackController@feedbackcontrol' )->name('feedbackcontrol'); 
Route::post('/complaind','complainController@complain')->name('complaind');
Route::post('/feedbacklike','feedbackController@feedbacklike')->name('feedbacklike');

Route::post('/registration','CustomerApprovalController@process_register')->name('registration');

Route::get('/logout','CustomerController@logout')->name('logout');

Route::get('/forgetpass','CustomerController@forget_pass')->name('forget');


// ----------CUSTOMER POST Route --------

Route::post('/LoginCustomer','CustomerController@proces_log')->name('login');
Route::post('/update_profile','CustomerController@update_profile')->name('update_profile');

Route::post('/update_request_profile','CustomerApprovalController@update_request_profile')->name('update_request_profile');

Route::post('/update_image','CustomerController@update_image')->name('update_image');

Route::post('/update_password','CustomerController@update_password')->name('update_password');

/// ---------- PYAMENT -------


Route::post('/payment','paymentController@payment')->name('payment');
Route::post('/checkbalance','paymentController@checkbalance')->name('checkbalance');

Route::post('/sendmoney','CardrechargeController@sendmoney')->name('sendmoney');
Route::post('/recharge_req','CardrechargeController@recharge_req')->name('recharge_req');
Route::post('/recharge_req_delete','CardrechargeController@recharge_req_delete')->name('recharge_req_delete');
Route::post('/cardrequest','CardRequestController@cardrequest')->name('cardrequest');

Route::post('/cardrequestprocess','CardRequestController@cardrequestprocess')->name('cardrequestprocess');

 

Route::post('/card_request_delete','CardRequestController@card_request_delete')->name('card_request_delete');
 
Route:: post('/card_request_accept','CardRequestController@card_request_accept')->name('card_request_accept');

/// ---------- ADMIN POST ROUTE ------------

Route:: post('/update_general_info','admincontroller@update_general_info')->name('update_general_info');

Route:: post('/update_formal_info','admincontroller@update_formal_info')->name('update_formal_info');

///update_password_admin
Route::post('/update_password_admin_','admincontroller@update_password_admin_')->name('update_password_admin_');

Route:: post('/update_address','admincontroller@update_address')->name('update_address');
 
Route:: post('/update_image_admin','admincontroller@update_image_admin')->name('update_image_admin');

 
Route:: post('/AddedCustomer','CustomerController@added_customer')->name('AddedCustomer');
Route:: post('/AddedDriver','DriverController@added_driver')->name('AddedDriver'); 



Route::post('/customer_request_process','CustomerApprovalController@customer_request_process')->name('customer_request_process');

Route::post('/customer_request_delete','CustomerApprovalController@customer_request_delete')->name('customer_request_delete');



/// Driver 

Route::post('/driverlogin','DriverController@driverlogin')->name('driverlogin');




///                     ----------------X -------------
 


/// -----------GET Route ----------



    Route::get('/', function () {
    return view('usermanual.welcome');
});


 

// Login System 

Route::get('/LoginCustomer', function () {
    return view('usermanual.login.customer');
})->name('LoginCustomer');

Route::get('/LoginAdmin', function () {
    return view('usermanual.login.admin');
});

Route::get('/LoginDriver', function () {
    return view('usermanual.login.driver');
});

Route::get('/LoginSuperadmin', function () {
    return view('usermanual.login.superadmin');
});



// ---------- Login system end ------------

Route::get('/contact', function () {
    return view('usermanual.contact');
});

Route::get('/customer_feedback', 'feedbackController@feedback_show') ; 


Route::get('/registration','CustomerController@show_register') ;

Route::get('/customer_request','CustomerApprovalController@customer_request');


     //--------- Customer  ----------

Route::get('/home','CustomerController@profile') ;

Route::get('/update','CustomerController@update') ;

Route::get('/recharge','CustomerController@recharge') ;
Route::get('/balance','CustomerController@balance') ;

Route::get('/feedback','CustomerController@feedback') ;

Route::get('/payment','CustomerController@payment') ;
Route::get('/complain','CustomerController@complain') ;
Route::get('/cardrequest','CustomerController@cardrequest');

Route::get('/change_pin','CustomerController@change_pin');

 
Route::get('/location', function () {
	 $data= ['loggedUser' =>customer::where('id', '=',session('loggedUser'))->first()];
       
    return view('customer.buslocation',$data);
}) ;
 
 

///  -------------- Admin Panal ------------------


Route::post('/LoginAdmin','admincontroller@proces_log')->name('admin_login');
Route::get('/admin_logout','admincontroller@logout')->name('admin_logout');



Route::middleware(['AuthAdmin'])->group(function () {



Route::get('/admin_profile','admincontroller@profile')->name('admin_profile') ;
Route::get('/update_profile','admincontroller@update_profile');

Route::get('/desboard','admincontroller@desboard');

 
 Route::get('/customer_complain','complainController@user_complain');
 
Route::get('/admin_feedback','feedbackController@admin_feedback');
Route::get('/admin_notification','admincontroller@admin_notification');
Route::get('/admin_massage','admincontroller@admin_massage');
Route::get('/request_pendin','admincontroller@request_pendin');

Route::get('/card_rechage','CardrechargeController@card_recharge');
Route::get('/card_request','CardrechargeController@card_request');
 
Route::get('/customers_list','admincontroller@customers_list');
Route::get('/driver_list','admincontroller@driver_list');


 Route::get('/user_profile','UserController@user_profile')->name('user_profile');
Route::get('/user_profile_driver','UserController@user_profile_driver')->name('user_profile_driver');
 

 Route::get('/driver_list','admincontroller@driver_list');
 
  
 Route::get('/add_customer','admincontroller@add_customer');
 Route::get('/remove_customer','admincontroller@remove_customer');
 Route::get('/add_driver','admincontroller@add_driver');
 Route::get('/remove_driver','admincontroller@remove_driver');

 Route::get('/password_reset','admincontroller@password_rest');

});



/// Driver 


Route::get('/driver_profile','DriverController@driver_profile')->name('driver_profile');

   


 
