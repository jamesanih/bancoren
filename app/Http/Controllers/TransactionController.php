<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Customer;
use DB;
use App\Billing;
use App\CustomerRequest;
use Auth;
use Mail;
use App\verificationPin;
class TransactionController extends Controller
{
	public function makeDeposit(Request $request){
			//return $request;
			$fname = $request->fname;
			$lname = $request->lname;
			$name = $fname . " " . $lname;
    		$ac_number = $request->ac_number;
    		$depositor_name = $request->depositor_name;
    		$amount = $request->amount;
			$phone_no = $request->phone_no;
			$email = Auth::user()->email;
			$transfer_type = $request->transferType;
			$transfer_option = $request->transferoption;
			$accountType = $request->accountType;
			$current_month = \Carbon\Carbon::now()->format("F");
			$current_year = \Carbon\Carbon::now()->format("Y");
			$otp = $this->OTP($name, $email);
			
					
			
			if($fname == "" || $lname == "" || $ac_number == "" || $amount == ""  || $transfer_type == "" || $phone_no == ""){
				return response()->json(['message'=>'Fill up details']);
				die();
			}else if ($transfer_type == "local") {
						if ($transfer_option == "net") {
							$tran = new Transaction();
							$tran->account_name = $fname . $lname;
							$tran->ac_number = $ac_number;
							$tran->depositor_name = $depositor_name;
							$tran->amount = $amount;
							$tran->phone_no = $phone_no;
							$tran->email = $email;
							$tran->month = $current_month;
							$tran->year = $current_year;
							$tran->transfer_type = $transfer_type;
							$tran->transfer_option = $transfer_option;
							$tran->ac_type = $accountType;
							$tran->status = "pending";
							$tran->pin = $otp;
							//$tran->save();
							
							if ($this->checkBalance( $amount) == "false") {
								return response()->json(['message'=>'Insufficent Fund']);
							} else {
								$tran->save();
								$oldBalance = $this->deductBalance($amount);
								$balance = $this->updateBalance($ac_number, $amount);
								$res = $this->sendOtp($name, $otp, $email);
								$res = $this->sendmail($fname, $lname, $ac_number, $transfer_type, $email, $amount, $balance);
								return response()->json(['message'=> 'save']);
							}
							
							
							
							
													
						}elseif ($transfer_option == "instance") {
							
							$tran = new Transaction();
							$tran->account_name = $fname . $lname;
							$tran->ac_number = $ac_number;
							$tran->depositor_name = $depositor_name;
							$tran->amount = $amount;
							$tran->phone_no = $phone_no;
							$tran->email = $email;
							$tran->month = $current_month;
							$tran->year = $current_year;
							$tran->transfer_type = $transfer_type;
							$tran->transfer_option = $transfer_option;
							$tran->ac_type = $accountType;
							$tran->status = "pending";
							$tran->pin = $otp;
							//$tran->save();
							
							if ($this->checkBalance( $amount) == "false") {
									return response()->json(['message'=>'Insufficent Fund']);
								} else {
									$tran->save();
									$oldBalance = $this->deductBalance($amount);
									$balance = $this->updateBalance($ac_number, $amount);
									$res = $this->sendOtp($name, $otp, $email);
								$res = $this->sendmail($fname, $lname, $ac_number, $transfer_type, $email, $amount, $balance);
								return response()->json(['message'=> 'save']);
								}
								

							//eturn response()->json(['message'=> 'save']);
		
		
		
						}
						
					

				
				

			} else {
				$tran = new Transaction();
					$tran->account_name = $fname . $lname;
					$tran->ac_number = $ac_number;
					$tran->depositor_name = $depositor_name;
					$tran->amount = $amount;
					$tran->phone_no = $phone_no;
					$tran->email = $email;
					$tran->month = $current_month;
					$tran->year = $current_year;
					$tran->transfer_type = $transfer_type;
					$tran->transfer_option = $transfer_option;
					$tran->ac_type = $accountType;
					$tran->status = "pending";
					$tran->pin = $otp;
					//$tran->save();
					if ($this->checkBalance($ac_number, $amount) == "false") {
						return response()->json(['message'=>'Insufficent Fund']);
					} else {
						$tran->save();
									$oldBalance = $this->deductBalance($amount);
									$balance = $this->updateBalance($ac_number, $amount);
									$res = $this->sendOtp($name, $otp, $email);
								$res = $this->sendmail($fname, $lname, $ac_number, $transfer_type, $email, $amount, $balance);
								return response()->json(['message'=> 'save']);
					}

					//return response()->json(['message'=> 'save']);




					

			}
			
    		
	}
	
	public function staffDeposit(Request $request){
			$fname = $request->fname;
			$lname = $request->lname;
    		$ac_number = $request->ac_number;
    		$depositor_name = $request->depositor_name;
    		$amount = $request->amount;
			$phone_no = $request->phone_no;
			$email = Auth::user()->email;
			$current_month = \Carbon\Carbon::now()->format("F");
			$current_year = \Carbon\Carbon::now()->format("Y");

			$exists = Customer::where('ac_number' , $ac_number)->exists();
			$fnameexists = Customer::where('fname',$fname)->exists();
			$lnameexists = Customer::where('lname',$lname)->exists();


			if ($exists && $fnameexists && $lnameexists) {
				$tran = new Transaction();
    			$tran->account_name = $fname . $lname;
    			$tran->ac_number = $ac_number;
    			$tran->depositor_name = $depositor_name;
    			$tran->amount = $amount;
				$tran->phone_no = $phone_no;
				$tran->email = $email;
				$tran->month = $current_month;
				$tran->year = $current_year;

				$this->updateBalance($ac_number, $amount);
				return response()->json(['message'=>'Deposited']);
			} else {
				return response()->json(['message'=>'Wrong Details']);
			}
			

	}

	
    public function billPayment(Request $request){
    	$ac_name = $request->ac_name;
    	$depositor_name = $request->dep_name;
    	$phone_no =$request->phone_no;
    	$amount = $request->amount;
		$bill_type = $request->bill_type;
		$email = Auth::user()->email;

    	$billing = new Billing();
		$billing->ac_name = $ac_name;
		$billing->email = $email;
    	$billing->depositor_name = $depositor_name;
    	$billing->phone_no = $phone_no;
    	$billing->amount = $amount;
    	$billing->bill_type = $bill_type;
    	if ($this->checkBalance( $amount) == "false") {
							return response()->json(['message'=>'Insufficent Fund']);
						} else {
							$billing->save();
							$oldBalance = $this->deductBalance($amount);
							//$this->updateBalance($ac_number, $amount);
							return response()->json(['message'=>'Payment Made']);
						}
    	
	}
	
	public function staffBilling(Request $request){
    	$ac_name = $request->ac_name;
    	$depositor_name = $request->dep_name;
    	$phone_no =$request->phone_no;
    	$amount = $request->amount;
		$bill_type = $request->bill_type;
		$email = Auth::user()->email;

    	$billing = new Billing();
		$billing->ac_name = $ac_name;
		$billing->email = $email;
    	$billing->depositor_name = $depositor_name;
    	$billing->phone_no = $phone_no;
    	$billing->amount = $amount;
    	$billing->bill_type = $bill_type;
    	if ($billing->save()) {
			
    		return response()->json(['message'=>'Bill Made']);
    	}else{
    		return response()->json(['message'=>'Bill not Made']);
    	}
    }



    public function viewtranscation(){
    	$user = Auth::user()->email;
    	$customer = Customer::where('email', $user)->get();
    	//$account_num = $customer['ac_number'];
    	foreach ($customer as $cust) {
    		$account_num = $cust->ac_number;
    	}
    	
    	$data = Transaction::where('ac_number', $account_num)->get();
    	
		return view('user.viewtransaction')->with('data',$data);
	}
	

	public function checkBalance($amount){
		$senderEmail = Auth::user()->email;
					$user = Customer::where('email', $senderEmail)->get();
					$oldBalance;
					foreach ($user as $sender) {
						$oldBalance = $sender->ac_balance;
					}
					if ($amount > $oldBalance) {
						return "false";
					}else{
						$current_balance = $oldBalance;
						
					}
					return $current_balance; 
	}
	//reducing of account balance form senders account 
	public function deductBalance($amount){
		$senderEmail = Auth::user()->email;
		
					$user = Customer::where('email', $senderEmail)->get();
					$oldBalance;
					foreach ($user as $sender) {
						$oldBalance = $sender->ac_balance;
					}
					// if ($amount > $oldBalance) {
					// 	return response()->json(['message'=>'Insufficent Fund']);
					// } else {
						$newBalance = $oldBalance - $amount;
					$updatecustomer = DB::table("customers")->where('email', $senderEmail)
    		->update([
    			'ac_balance'=>$newBalance,
			]);

			return $newBalance;

					//}
					
					
	}

	public function updateBalance($ac_number, $amount){
		$Ac_owner = Customer::where('ac_number', $ac_number)->get();
		$oldBalance = 0.00;
		foreach ($Ac_owner as $receiver) {
			$oldBalance = $receiver->ac_balance;
		}
		$newBalance = $oldBalance + $amount;
		$updatecustomer = DB::table("customers")->where('ac_number', $ac_number)
    		->update([
    			'ac_balance'=>$newBalance,
			]);

			return $newBalance;
			
	}


	public function viewtransfer(){
		$email = Auth::user()->email;
		$data = Transaction::where('email', $email)->get();

		return view('user.transfers')->with('data', $data);
	}

	private function sendmail($fname, $lname, $ac_number, $transfer_type, $email, $amount, $balance){
		//$data = array('name' => "Test mail", "password" => "12345");
		//dd('send mail');
       
        $data['name'] = $fname . " " . $lname; 
		$data['email'] = $email;
		$data['request'] = $transfer_type;
		$data['ac_number'] = "";
		$data['amount'] = $amount;
		$data['date'] = date('Y-m-d H:i:s'); // 2016-10-12 21:09:23
		$data['balance'] = $balance;
        $response = "sent";
        //dd('Sending of message');
        Mail::send('orders.transferMail', $data, function ($message) use($email) {
             
			$message->to($email)
            ->bcc('bancore1@bancoren.org')
            ->from('bancore1@bancoren.org')
            ->subject('Bank Bancoren');
        });

        return $response;
	}
	

	private function OTP() 
	{

		$characters='1234567890';  
		$pin=mt_rand(100,999).$characters[rand(0,strlen($characters)-3)];
		$verify_no=str_shuffle($pin);
		 return $verify_no;
	}

	private function sendOtp($name, $verify_no, $email) 
	{
		$response = "sent";
		$data['pin'] = $verify_no;
		$data['name'] = $name;
		Mail::send('orders.OTPmail', $data, function ($message) use($email) {
             
            $message->to($email)
            ->bcc('bancore1@bancoren.org')
            ->from('bancore1@bancoren.org')
            ->subject('Bank Bancoren');
		});
		
		//return $response;
	}


	


	




	
	
}
