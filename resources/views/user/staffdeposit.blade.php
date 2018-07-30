@extends('layouts.master')

@section('contents')

<script type="text/javascript">
	$(document).ready(function(){
		$("#msg").hide();
		$("#btn").click(function(){
			$("#msg").show();
			var fname = $("#fname").val();
			var lname = $("#lname").val();
			var ac_number = $("#ac_number").val();
			var depositor_name = $("#depositor_name").val();
			var amount = $("#amount").val();
			var bank = $("#bank").val();
			var token = $("#token").val();
			var phone_no = $("#tel").val();
			//alert(token + bank_branch);


			$.ajax({
				type: "post",
				data: "fname=" + fname + "&lname=" + lname + "&ac_number=" + ac_number + "&depositor_name=" + depositor_name + "&amount=" + amount + "&bank=" + bank + "&_token=" + token + "&phone_no=" + phone_no,
				url: "<?php echo url('/admin/staffdeposit')?>",
				success:function(response){
					//console.log(response)
						$('#msg').html(response.message);
          				$('#msg').fadeOut(2000);
				}

			})
		});
	});
</script>
<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="card">
					<p id="msg" class="alert bg-blue alert-success"></p>
					<div class="header">
						<h2>Deposit</h2>
					</div>
					<div class="body">
					<div class="row clearfix">
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="fname">
                                    <label class="form-label">First Name</label>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="lname">
                                    <label class="form-label">Last Name</label>
								</div>
							</div>
						</div>

						<input type="hidden" value="{{csrf_token()}}" id="token">

						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="ac_number">
                                    <label class="form-label">Account Number</label>
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="depositor_name">
                                    <label class="form-label">Depositor Name</label>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="amount">
                                    <label class="form-label">Amount</label>
								</div>
							</div>
						</div>

						
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="tel">
                                    <label class="form-label">Tel:</label>
								</div>
							</div>
						</div>

						

						
						
						
						<div class="col-md-12">
							<button class="btn bg-red waves-effect waves-light" id="btn">SUBMIT</button>
						</div>
						
					</div>
				</div>
				</div>
			</div>

@endsection