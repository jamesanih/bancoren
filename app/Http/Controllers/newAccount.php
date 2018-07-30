<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpeningAccount;
use App\User;
use App\Customer;

class newAccount extends Controller
{
    public function createAccount(Request $request){
        // return $request;
        
        
        $fname = $request->fname;
        $surname = $request->surname;
        $other_name = $request->other_name;
        $maiden_name = $request->maiden_name;
        $gender = $request->gender;
        $date_of_birth = $request->date_of_birth;
        $occupation = $request->occupation;
        $email = $request->email;
        $nationality = $request->nationality;
        $location = $request->location;
        $contact = $request->contact;
        $contact2 = $request->contact2;
        $account_type = $request->account_type;
        $personal_id = $request->personal_id;
        $valid_date = $request->valid_date;

        if($this->vaildateInput($fname, $surname,$other_name, $maiden_name, $gender, $date_of_birth, $occupation,$email,$nationality,$location,$contact,$contact2,$account_type,$personal_id,$valid_date) == "True"){
            $account = OpeningAccount::create([
                'first_name'=>$fname,
                'surname'=>$surname,
                'other_name'=>$other_name,
                'maiden_name'=> $maiden_name,
                'gender'=> $gender,
                'date_of_birth'=> $date_of_birth,
                'occupation' => $occupation,
                'email' => $email,
                'nationality'=>$nationality,
                'location'=>$location,
                'contact'=>$contact,
                'contact2'=>$contact2,
                'account_type'=>$account_type,
                'personal_id'=>$personal_id,
                'valid_date'=>$valid_date
    
            ]);
    
            if ($account) {
                
                $user = new User();
                $user->fname = $fname;
                $user->lname = $surname;
                $user->email = $email;
                $user->password = bcrypt("12345");
                $user->status = "customer";
                if($user->save()){
                    $customer = new Customer();
                    $customer->fname = $fname;
                    $customer->email = $email;
                    $customer->lname = $surname;
                    $customer->ac_number = mt_rand();
                    $customer->ac_type = $account_type;
                    $customer->ac_balance = "0.00";
                    $customer->address = $location;
                    $customer->phone_no = $contact;
                    
                   if( $customer->save()){
                   return response()->json(['message'=>'created, Login with your email and password(12345)']);
                   }else{
                       return response()->json(['message'=>'Account not created']);
                   }
                }
            } 
            
    
        }else{
            return response()->json(['message'=>' Fill up data']);
        }

        
    }
    

    public function vaildateInput($fname, $surname,$other_name, $maiden_name, $gender, $date_of_birth, $occupation,$email,$nationality,$location,$contact,$contact2,$account_type,$personal_id,$valid_date){
        if(isset($fname) && isset($surname) && isset($other_name) && isset($maiden_name) && isset($gender) && isset($date_of_birth) && isset($occupation) && isset($email) && isset($nationality) && isset($location) && isset($contact) && isset($account_type) && isset($personal_id) && isset($valid_date)){
            return "True";
        }
    }

}
