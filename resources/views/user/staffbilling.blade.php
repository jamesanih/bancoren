@extends('layouts.master')

@section('contents')
<script type="text/javascript">
	$(document).ready(function(){
		$("#msg").hide();
		$("#btn").click(function(){
			$("#msg").show();
			var ac_name = $("#ac_name").val();
			var dep_name = $("#dep_name").val();
			var phone_no = $("#tel_no").val();
			var amount = $("#amount").val();
			var bill_type = $("#bill_type").val();
			var token = $("#token").val();
			
			$.ajax({
				type:"post",
				data: "ac_name=" + ac_name + "&dep_name=" + dep_name + "&phone_no=" + phone_no + "&amount=" + amount + "&bill_type=" + bill_type + "&_token=" + token,
				url: "<?php echo url('/admin/staffbill')?>",
				success:function(response){
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
						<h2>Bill Payment</h2>
					</div>
					<div class="body">
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="ac_name">
                                    <label class="form-label">Account Name</label>
								</div>
							</div>
						</div>

						<input type="hidden" value="{{csrf_token()}}" id="token">

						<div class="col-sm-12">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="dep_name">
                                    <label class="form-label">Depositor Name</label>
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


						<div class="col-sm-6">
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" id="amount">
                                    <label class="form-label">Amount</label>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<select class="form-control show-tick" id="bill_type">
								<option value="">-- Billing Type --</option>
								<option value="eedc">EEDC</option>
								<option value="dstv">DSTV</option>
							</select>
						</div>
						<div class="col-md-12">
							<button class="btn bg-red waves-effect waves-light" id="btn">SUBMIT</button>
						</div>
						
					</div>
				</div>
				</div>
			</div>

@endsection