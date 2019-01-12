<?php

namespace App\Http\Controllers;

use App\User;
use App\Staff;
use App\Customer;
use App\Transaction;
use App\CustomerRequest;
use DB;
use Illuminate\Http\Request;
use Auth;
use Event;
use App\Events\LoginTime;

class UserController extends Controller
{

    public function getdashboard(){
        // $data = User::take(5)
        //             ->orderBy('created_at', 'desc')->get();
        return view('user.Admindashboard');
    }

    public function getSignup()
    {
    	return view('user.signup');
    }

    public function OpenAccount(){
        return view('orders.openAccount');
    }


    public function changepassword(){
        return view('user.changepassword');
    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request,[
    		'email'=>'email|required|unique:users',
    		'password'=> 'required|min:5'
    	]);

    	$user = new User([
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
    		'email'=> $request->input('email'),
    		'password'=> bcrypt($request->input('password')),
            'status'=>'SuperAdmin'
    	]);
    	$user->save();

    	Auth::login($user);

    	return redirect()->route('dashboard');
    }


    public function getSignin()
    {
    	return view('user.login');
    }



    public function postSignin(Request $request)
    {


    	$this->validate($request,[
    		'email'=>'required',
    		'password'=> 'required'
    	]);

    	if (Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])) {
              
                if (Auth::user()->status == "SuperAdmin") {
                   return redirect()->route('dashboard');
                }elseif(Auth::user()->status== "admin"){
                    return redirect()->route('dashboard');
                }elseif (Auth::user()->status == "staff") {
                    return redirect()->route('profile');
                }elseif (Auth::user()->status == "customer") {
                    return redirect()->route('accountdetails');
                }
           		//return redirect()->route('user.profile');
    	}
    	return redirect()->back();
    }

    public function resetpassword(Request $request)
    {
        $old = $request->oldpass;
        $newpassword = $request->newpass;
        $confirmpass = $request->confirmpass;
        $id = Auth::user()->id;
        $user = User::find($id);

         $oldpassword = $user->password;
         

         if ($newpassword == $confirmpass) {
             
             $user->password = bcrypt($newpassword);
             $user->save();
             Auth::logout();
            return redirect()->route('login');

         }




    }

    public function Deletestaff($id){

        $staff = Staff::find($id);

        $staff->delete();


        return redirect()->back()->with(['message' =>'Successfully deleted!']);

    }



    public function Deletecustomer(Request $request, $id){

        $id = $request->id;
        $customer = Customer::find($id);
        $customer->delete();
        
         return redirect()->back()->with(['message' =>'Successfully deleted!']);
        


        
        }

    public function LoginTime(){
        if(Auth::login()){
            $id = Auth::user()->id;
            $logintime = \Carbon\Carbon::now()->toDateTimeString();//get last login

            $user = User::find($id);
            $user->lastloggedIn = $logintime;
            $user->save();
        }
    }

    
    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function edit($id){
        $data = User::find($id);
    	$email = $data->email;
    	$admin = User::where('email', $email)->get();
    	return view('user.adminProfile')->with('admin',$admin);
    }

    public function updateAdmin(Request $request){
        //return $request;
    	$id = $request->id;
    	$fname = $request->fname;
    	$lname = $request->lname;
    	$address = $request->address;
        $phone = $request->phone_no;
        $email = Auth::user()->email;

        $exists = Staff::where('fname', $fname)->exists();
        if($exists){
            $staff = DB::table("staff")->where('fname', $fname)
                        ->update([
                            'fname'=>$fname,
                            'lname'=>$lname,
                            'address'=>$address,
                            'phone_no'=>$phone
                        ]);
            $updateAdmin = DB::table("users")->where('email', $email)
            ->update([
                'fname'=> $fname,
                'lname'=> $lname,
            ]);
            return response()->json(['message'=>'Successfully Updated']);

            
        }else{
            
            $staff = Staff::Create([
                'fname'=>$fname,
                'lname'=> $lname,
                'email'=> $email,
                'address' => $address,
                'phone_no' =>$phone,
                'status'=>'SuperAdmin'
            ]);
            if ($staff) {
                return response()->json(['message'=>'Successfully Updated']);
            } else {
                return response()->json(['message'=>'Something went Wrong']);
            }
            
            
        }
        	
    }


    public function confirmTransfer($id){
        //$id = $request->id;
        $pendingtransfers = Transaction::find($id); 
        $pendingtransfers->status = "Confirmed";


        if ($pendingtransfers->save()) {
            return redirect()->back()->with(['message' =>'Confirmed!']);
        }else{
            return redirect()->back()->with(['message' =>'Not Confirmed!']);
        }
    }

     public function issueOrder($id){
       

        $issueOrder = CustomerRequest::find($id);
        $issueOrder->status = "Issued";

        if ($issueOrder->save()) {
            return redirect()->back()->with(['message' =>'Confirmed!']);
            
        }else{
            return redirect()->back()->with(['message' =>'Not Confirmed!']);   
        }
    }

}
