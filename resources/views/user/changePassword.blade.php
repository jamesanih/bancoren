@extends('layouts.master')


@section('title')
    Reset Password

@endsection

@section('contents')

	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
					<div class="card">
						<div class="content">
							<div class="body">
								<h1 class="card-inside-title"><strong>Change Password</strong></h1>
								
								<div class="row clearfix">
									<form action="{{route('resetpassword')}}" method="post">
									<div class="col-lg-12">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label><strong>Old Password: </strong></label>
                                        <input type="password" class="form-control" name="oldpass" required>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-lg-12">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label><strong>New Password: </strong></label>
                                        <input type="password" class="form-control"  name="newpass" required >
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-lg-12">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label><strong>Confirm Passwor:</strong></label>
                                        <input type="password" class="form-control" name="confirmpass" required>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-sm-2">
                                    <input type="submit" class="btn btn-lg bg-red waves-effect waves-light" id="btn" value="Submit">
                                  </div>
                                    {{ csrf_field() }} 
                              </form>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>

@endsection