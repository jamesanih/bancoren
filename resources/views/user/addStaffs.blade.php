@extends('layouts.master')

@section('contents')

<script type="text/javascript">
		$(document).ready(function(){
			$("#msg").hide();
			$("#btn").click(function(){	
				$("#msg").show();
				//var cat_id = $("#Privilage").val();
				var fname = $("#fname").val();
				var lname = $("#lname").val();
				var email = $("#email").val();
				var address = $("#address").val();
				var tel_no = $("#tel").val();
				var token = $("#token").val();
				var status = $("#status").val();



				


				$.ajax({
					type: "post",
					data: "fname="+ fname + "&lname=" + lname + "&email=" + email +  "&tel_no=" + tel_no +  "&address=" + address + "&_token=" + token + "&status=" + status,
					url: "<?php echo url('/admin/addstaff')?>",
					success:function(response){
						 $('#msg').html(response.message);
						$('#msg').fadeOut(2000);
						console.log(response);
					},
					error:function(response){
						console.log(response);
						 $('#msg').html(response.message);
						$('#msg').fadeOut(2000);
					}
				})
				$('#staff').load('<?php echo url('admin/staff');?>').fadeIn('fast');
			});

		

		

	});


</script>

<script src="{{URL::to('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<script src="{{URL::to('js/admin.js')}}"></script>
    <script src="{{URL::to('js/pages/forms/advanced-form-elements.js')}}"></script>

<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="card">
					<p id="msg" class="alert bg-blue alert-success"></p>
					<div class="header">
						<h2>ADD NEW STAFFS</h2>
					</div>
					<div class="body">
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" name="fname" placeholder="First Name" id="fname">
								</div>
							</div>
						</div>

						<input type="hidden" value="{{csrf_token()}}" id="token">

						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname">
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" name="email" placeholder="Email" id="email">
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" name="address" placeholder="Address" id="address">
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<div class="form-line">
									<input type="text" class="form-control" name="phone_no" placeholder="Tel No" id="tel">
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<select class="form-control show-tick" id="status">
							<option value="">-- Privilage --</option>
								<option value="admin">Admin</option>
								<option value="staff">Normal</option>
							</select>
						</div>

						
						<div class="col-md-12">
							<button class="btn bg-red waves-effect waves-light" id="btn">SUBMIT</button>
						</div>
						
						
					</div>

					
				</div>
				</div>
			</div>

 
						<!--  -->


		</div>

		
	</div>
</section>
@endsection

