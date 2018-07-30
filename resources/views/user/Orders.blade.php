@extends('layouts.master')

@section('contents')

<script type="text/javascript">
	$(document).ready(function(){
		$("#msg").hide();
		
		
		
	$('#transfers').load('<?php echo url('/admin/confirmtransfers')?>').fadeIn('fast');
		

	})
</script>

<section class="content">
		
	<div class="container-fluid">
		
		<div class="block-header">
                <h2>
                    Customers Orders
                    
                </h2>
            </div>

		 <div class="row clearfix">
             @if (Session::has('message'))
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                           <div class="alert bg-blue alert-warning alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             {{ Session::get('message') }}
                        </div>  
                         </div>
                         
                        @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h1 class="card-inside-title"><strong>Atm/ChequeBook Requests</strong></h1>                         
                        </div>
                                    
                    	
                        <div class="body">
                            <div class="table-responsive">
                            	<input type="hidden" value="{{csrf_token()}}" id="token">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            
                                            <th>Order Type</th>
                                            <th>Ordered Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Name</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            
                                            <th>Order Type</th>
                                            <th>Ordered Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($data as $order)
                                        <tr>
                                        	 

                                            <td>{{$order->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->location}}</td>
                                            
                                            <td>{{$order->requestType}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->status}}</td>
                                            <td>
                                            	<!-- <button class="btn btn-lg btn-primary waves-effect" id="btn">Issue {{$order->requestType}}</button> -->
                                                <a href="{{route('issueorder', ['id'=>$order->id])}}" class="btn btn-lg btn-primary waves-effect">issue {{$order->requestType}}</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                              </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">

                
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                             

                            <div class="card">
                                 <div class="header">
                            <h1 class="card-inside-title"><strong>Transfers</strong></h1>
                            
                        
                                        
                            
                        </div>
                                    
                                <div class="body">
                                        
                                        <div class="table-responsive" id="transfers">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


           
</div>

</section>



@endsection

