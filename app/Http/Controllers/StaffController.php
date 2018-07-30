<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Staff;
use App\User;

class StaffController extends Controller
{
    public function viewstaff(){
    	 return view('user.addStaffs');
    }

    public function addstaff(Request $request){

    	$fname = $request->fname;
    	$lname = $request->lname;
    	$address = $request->address;
    	$tel_no = $request->tel_no;
    	$email = $request->email;
        $status = $request->status;
    	$password = "12345";
        $currentdate = \Carbon\Carbon::today()->format('Y-m-d');

    	
    		$exists = Staff::where('email' , $email)->exists();

    		if ($exists) {
    			return response()->json(['message'=>'Email Already exist']);
    		}


    		
    		$addstaff = DB::table("staff")->insert([
    			'fname'=>$fname,
    			'lname'=>$lname,
    			'email'=>$email,
    			'phone_no'=>$tel_no,
    			'address'=>$address,
                'status'=>$status,
    			'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    			'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    		]);


    		$addstaff = DB::table("users")->insert([
    			'fname'=>$fname,
    			'lname'=>$lname,
    			'email'=>$email,
    			'password'=>bcrypt($password),
    			'status'=> $status,
    			'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    			'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
    		]);
    	

    	if ($addstaff) {
    		return response()->json(['message'=>'Staff Added']);
    	}
    }


    public function staffProfile($id){

    	$data = User::find($id);
    	$email = $data->email;
    	$staff = Staff::where('email', $email)->get();
    	return view('user.staffProfile')->with('staff',$staff);
    }


    public function updateStaff(Request $request){


    	$id = $request->id;
    	$fname = $request->fname;
    	$lname = $request->lname;
    	$address = $request->address;
    	$phone = $request->phone_no;

    	//return $id;

    	$staffdb = Staff::find($id);
        $email = $staffdb->email;
    	$staffdb->fname = $fname;
    	$staffdb->lname = $lname;
    	$staffdb->address = $address;
    	$staffdb->phone_no = $phone;

    	// $userdb = User::find($fname);
    	// $userdb->fname = $fname;
    	// $userdb->lname = $lname;
    	$updatestaff = DB::table("users")->where('email', $email)
    		->update([
    			'fname'=>$fname,
    			'lname'=>$lname,
    		]);

    	if ($staffdb->save()) {
    		return redirect()->route('viewstaff');
    	 	
    	 } 

    }

   

    
}
