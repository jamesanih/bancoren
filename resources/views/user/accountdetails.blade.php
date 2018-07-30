@extends('layouts.master')

@section('contents')


<section class="content">
		
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="card">
					<div class="content">
						<div class="body">
							<div class="container-fluid">
								<div  class="row clearfix js-sweetalert">
									<input type="hidden" value="{{csrf_token()}}" id="token">

									@foreach($data as $customer)
									<div class=" col-md-6 font-20">
									<label><strong>Account Name:</strong></label>
									<label id="name"><strong>{{$customer->fname}} {{$customer->lname}}</strong></label>
								</div>

								<div class=" col-md-6 font-20">
									<label><strong>Email:</strong></label>
									<label id="email"><strong>{{$customer->email}}</strong></label>
								</div>

								<div class=" col-md-12 font-20">
									<label><strong>Phone Number:</strong></label>
									<label><strong>{{$customer->phone_no}}</strong></label>
								</div>

								<div class=" col-md-12 font-20">
									<label><strong>Location:</strong></label>
									<label id="address"><strong>{{$customer->address}}</strong></label>
								</div>

								<div class=" col-md-6 font-20">
									<label><strong>Account Number:</strong></label>
									<label id="ac_number"><strong>{{$customer->ac_number}}</strong></label>
									</div>

								<div class=" col-md-6 font-20">
									<label><strong>Account Type:</strong></label>
									<label id="ac_type"><strong>{{$customer->ac_type}}</strong></label>
								</div>


								<div class=" col-md-12 font-20">
									<label><strong>Account Balance:</strong></label>
									<label id="ac_balance"><strong>&#36;{{$customer->ac_balance}}.00</strong></label>
								</div>

								
								@endforeach
								</div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</section>


@endsection