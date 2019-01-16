@extends('layouts.master')

@section('contents')
<script type="text/javascript">
	$(document).ready(function(){
		$("#msg").hide();
		$("#atm_type").hide();
		$("#requestType").click(function(){
			var requestType = $("#requestType").val();
			if(requestType == "atm"){
				$("#atm_type").show();
			}else{
				$("#atm_type").hide();
				
			}
		});
		$("#btn").click(function(){
			$("#msg").show();
			//$("#atm_type").show();
			var fname = $("#fname").val();
			var lname = $("#lname").val();
			var email = $("#email").val();
			var address = $("#address").val();
			var tel_no = $("#tel_no").val();
			var acc_number = $("#acc_number").val();
			var requestType = $("#requestType").val();
			var token = $("#token").val();
			var atm_type = $("#atm_type").val();
			//alert(atm_type);

			$.ajax({
				type: "post",
				data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&address=" + address + "&tel_no=" + tel_no + "&acc_number=" + acc_number + "&requestType=" + requestType + "&_token=" + token + "&atm_type=" + atm_type,
				url: "<?php echo url('/admin/request')?>",
				success:function(response){
					console.log(response);
					$("#msg").html(response.message);
					$("#msg").fadeOut(3000);
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
					
					<div class="header">
						<h2>Place Order</h2>
						<p id="msg" class="alert bg-blue alert-success"></p>
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
					
						<input type="hidden" value="{{csrf_token()}}" id="token">

						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="lname">
                                    <label class="form-label">Last Name</label>
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="email">
                                    <label class="form-label">Email</label>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="address">
                                    <label class="form-label">Address</label>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="tel_no">
                                    <label class="form-label">Tel:</label>
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="acc_number">
                                    <label class="form-label">Account Number</label>
								</div>
							</div>
						</div>
						
						<div class="col-sm-6">
							<select class="form-control show-tick" id="requestType">
								<option value="">-- Request Atm/Chequebook --</option>
								<option value="atm">ATM</option>
								<option value="chequebook">Chequebook</option>
							</select>
						</div>

						<div class="col-sm-6">
							<select class="form-control show-tick" id="atm_type">
								<option value="">-- ATM Type --</option>
								<option value="master">Master</option>
								<option value="visa">Visa</option>
								
							</select>
						</div>
						<div class="col-md-12">
							<button class="btn bg-blue waves-effect waves-light" id="btn">SUBMIT</button>
						</div>
						
					</div>
				</div>
				</div>
			</div>

			@endsection