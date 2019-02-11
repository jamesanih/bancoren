<?php

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

Route::get('/',function(){
	return view('home.index');
});

Route::group(['prefix'=>'user'], function(){
	Route::group(['middleware'=>'guest'], function(){
		Route::get('/signup', [
					'uses'=>'UserController@getSignup',
					'as'=>'user.signup'
				]);

		Route::get('/openaccount',[
			'uses'=>'UserController@OpenAccount',
			'as'=>'openaccount'
		]);


			Route::post('/signup', [
			'uses'=>'UserController@postSignup',
			'as'=>'user.signup'
		]);


		Route::get('/login', [
			'uses'=>'UserController@getSignin',
			'as'=>'login'
		]);

		Route::post('/signin', [
			'uses'=>'UserController@postSignin',
			'as'=>'user.signin'
		]);

		Route::post('createaccount','newAccount@createAccount' );

	});
	});

Route::group(['prefix'=>'admin'], function(){



Route::group(['middleware'=> 'auth'], function(){

	Route::get('/dashboard',[
	'uses'=>'UserController@getdashboard',
	'as'=>'dashboard'
]);


	
	Route::get('staff', 'StaffController@newStaff');

	Route::view('addedcustomer', 'user.viewCustomer', [

		'data'=> App\Customer::all()
	]);

	Route::get('/staffProfile/{id}', [
		'uses'=>'StaffController@staffProfile',
		'as'=>'staffProfile'
	]);


	Route::get('/customerProfile/{id}', [
		'uses'=>'CustomerController@customerProfile',
		'as'=>'customerProfile'
	]);


	Route::get('/edit/{id}',[
		'uses'=>'UserController@edit',
		'as'=> 'edit'
	]);

	Route::get('/confirmtranscation', [
		'uses'=> 'CustomerController@getconfirmcode',
		'as'=> 'confirmcode'
	]);




		Route::get('/profile', [
			'uses'=>'UserController@getProfile',
			'as'=>'profile'
		]);
		Route::get('/accountdetails',[

		'uses'=>'CustomerController@accountdetails',
		'as'=> 'accountdetails'
		]);

		Route::view('/orders', 'user.AtmChequebook');
		Route::view('/deposit', 'user.deposit');
		Route::view('/staffDeposit', 'user.staffdeposit');
		Route::view('/billing', 'user.billing');
		Route::view('/staffBilling', 'user.staffbilling');
		Route::get('/confimPage', [
			'uses'=> 'CustomerController@ConfirmationPage',
			'as'=> 'ApprovalPage'
		]);


		Route::view('/viewOrders','user.Orders', [
			'data'=>App\CustomerRequest::where('status', 'Pending')->get()
		]);

		Route::view('/confirmtransfers','orders.confirmtransfers', [
			'data'=>App\Transaction::where('status', 'Pending')->get()
		]);

		Route::view('/confirmcodes', 'orders.confirmcode');


		Route::get('/viewtranscation',[
			'uses'=>'TransactionController@viewtranscation',
			'as'=>'viewtranscation'
		]);
		Route::get('/viewstaff', [
			'uses'=>'StaffController@viewstaff',
			'as'=>'viewstaff'
		]);

		Route::get('/addcustomer',[
			'uses'=>'CustomerController@viewCustomer',
			'as'=>'customer'
		]);


		Route::get('/logout',[
			'uses'=>'UserController@getLogout',
			'as'=> 'user.logout'
		]);

		Route::get('/deletestaff/{id}',[
			'uses' => 'UserController@Deletestaff',
			'as' => 'deletestaff'
	]);

		Route::get('/deletecustomer/{id}',[
			'uses' => 'UserController@Deletecustomer',
			'as' => 'deletecustomer'
	]);


	Route::get('/confirmTransfer/{id}',[
		'uses'=> 'UserController@confirmTransfer',
		'as'=> 'confirmTransfer'
	]);


	Route::get('/issueOrder/{id}',[
		'uses'=> 'UserController@issueOrder',
		'as'=> 'issueorder'
	]);




		Route::get('forgotPassword/{token?}', [
				'uses'=> 'Auth\ForgotPasswordController@showLinkRequestForm',
				'as'=>'forgotpassword'
		]);
		Route::post('test', [
			'uses'=> 'UserController@Test',
			'as'=>'tst'
		]);


		Route::get('/changepassword', [
			'uses'=>'UserController@changepassword',
			'as'=>'changepassword'
		]);

		Route::get('transfers', 'TransactionController@viewtransfer');
		Route::get('search','TransactionController@Search');
		Route::get('bills', 'CustomerController@viewbilling');
		

		Route::post('sortByMonth','TransactionController@sortByMonth');

		Route::post('addstaff','StaffController@addstaff');
		Route::post('addcustomer','CustomerController@addcustomer');
		Route::post('request','CustomerController@Order');
		
		// Route::post('issueOrder', 'CustomerController@issueOrder');
		Route::post('makedeposit','TransactionController@makeDeposit');
		Route::post('staffdeposit','TransactionController@staffDeposit');
		Route::post('billpayment','TransactionController@billPayment');
		Route::post('staffbill','TransactionController@staffBilling');
		Route::post('confirmotp', [
			'uses' => 'CustomerController@confirmCode',
			'as'=> 'otp'
			]);
		
		Route::post('updateStaff', [
			'uses'=> 'StaffController@updateStaff',
			'as'=> 'updateStaff'

		]);

		Route::post('updateCustomer', [
			'uses'=> 'CustomerController@updateCustomer',
			'as'=> 'updateCustomer'

		]);

		Route::post('updateAdmin', [
			'uses'=> 'UserController@updateAdmin',
			'as'=> 'updateAdmin'

		]);


		Route::post('resetpassword',[
			'uses'=> 'UserController@resetpassword',
			'as'=> 'resetpassword'
		]);

		


	
		
});		

});
// Route::post('/confirmotp', [
// 	'uses'=>'TransactionController@confirmCode',
// 	'as' => 'confirmOtp',
// 	'middleware'=> 'auth'
// 	]);	

