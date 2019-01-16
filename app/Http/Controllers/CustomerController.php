<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Billing;
use App\Customer;
use App\CustomerRequest;
use DB;
use Mail;


class CustomerController extends Controller
{
    public function viewCustomer(){
    	return view('user.addCustomer');
    }

     public function customerProfile($id){

    	$data = User::find($id);
    	$email = $data->email;
    	$customer = Customer::where('email', $email)->get();
    	return view('user.CustomerProfile')->with('customer',$customer);
    }


    public function addcustomer(Request $request){
    	$fname = $request->fname;
    	$lname = $request->lname;
    	$address = $request->address;
    	$tel_no = $request->tel_no;
    	$email = $request->email;
    	$ac_type = $request->ac_type;
    	$password = "12345";
    	$ac_number = mt_rand();

    	

    	$exist = Customer::where('email', $email)->exists();

    	if ($exist) {
    		return response()->json(['message'=>'Email Already Exist']);
    	}

    	$user = User::create([
    		'fname'=> $fname,
    		'lname'=> $lname,
    		'email'=> $email,
    		'password' => bcrypt($password),
    		'status'=> "customer"
    	]);

    	$customer = Customer::create([
    		'fname'=>$fname,
    		'lname'=> $lname,
    		'email' => $email,
    		'phone_no' => $tel_no,
    		'address' => $address,
    		'ac_number' => $ac_number,
    		'ac_balance' => '00',
    		'ac_type'=> $ac_type
    	]);

    	if ($user) {
    		if ($customer) {
    			return response()->json(['message'=>'Customer Added']);
    		}
    		
    	}
    }

    public function updateCustomer(Request $request){
    	$id = $request->id;
    	$fname = $request->fname;
    	$lname = $request->lname;
    	$address = $request->address;
    	$phone = $request->phone_no;

    	$customerdb = Customer::find($id);
    	$email = $customerdb->email;
    	$customerdb->fname = $fname;
    	$customerdb->lname = $lname;
    	$customerdb->address = $address;
    	$customerdb->phone_no = $phone;

    	//return $email;
    	$updatecustomer = DB::table("users")->where('email', $email)
    							->update([
    								'fname'=> $fname,
    								'lname'=> $lname,
    							]);


    	if ($customerdb->save()) {
    		
    		return response()->json(['message'=>'Successfully Updated']);
    		
    	}else{
    		return response()->json(['message'=>'Update was not successfull']);
    		
    	}
    }

    public function Order(Request $request){

    	$fname = $request->fname;
    	$lname = $request->lname;
    	$email = $request->email;
    	$phone_no = $request->tel_no;
    	$acc_number = $request->acc_number;
    	$atm_type = $request->atm_type;
    	$address = $request->address;
    	$requestType = $request->requestType;


		// if($fname == ""){
		
		// }
    	
		// $exists = Customer::where('ac_number',$acc_number)->exists();
		// $fnameexists = Customer::where('fname',$fname)->exists();
		// $lnameexists = Customer::where('lname',$lname)->exists();
		// $emailexists = Customer::where('email',$email)->exists();
    	if ($fname == "" && $lname == ""  && $email == "" && $phone_no == "" && $acc_number == "" && $requestType == "" ) {
			return response()->json(['message'=>'fill up details']);
			die();

    	
    	}else{
			$req = new CustomerRequest();

    	$req->name = $fname. $lname;
    	$req->email = $email;
    	$req->phone_no = $phone_no;
    	$req->account_num = $acc_number;
    	$req->atm_type = $atm_type;
    	$req->location = $address;
    	$req->requestType = $requestType;
    	$req->status = "Pending";
    	
    	if($req->save()){
			$res = $this->sendmail($email, $fname, $lname, $requestType);
			if($res == "sent") {
				return response()->json(['message'=>'Request made']);
			}

    		
		}else{
    		return response()->json(['message'=>'Wrong Data']);
    	}
		

			//return response()->json(['message'=>'Please input all details']);
		}

		
    	



    }

 
   

    public function accountdetails(){
    	$user = Auth::user()->email;
    	$data = Customer::where('email', $user)->get();
    	
		return view('user.accountdetails')->with('data',$data);
    }


    public function viewbilling(){
        $email = Auth::user()->email;
        $data = Billing::where('email',$email)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('user.viewbills')->with('data', $data);
	}


	private function sendmail($email, $fname, $surname, $requestType){
		//$data = array('name' => "Test mail", "password" => "12345");
		//dd('send mail');
       
        $data['name'] = $surname . " " . $fname; 
		$data['email'] = $email;
		$data['request'] = $requestType;
        $response = "sent";
        //dd('Sending of message');
        Mail::send('orders.requestAlert', $data, function ($message) use($email) {
             
            $message->to($email)
            ->bcc('anihuchenna16@gmail.com')
            ->from('anihuchenna16@gmail.com')
            ->subject('Test mail!!');
        });

        return $response;
    }
	
	

    
}
