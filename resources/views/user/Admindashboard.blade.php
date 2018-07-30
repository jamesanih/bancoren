@extends('layouts.master')

@section('contents')
<script type="text/javascript">

  
</script>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="card">

                        @if (Session::has('message'))
                         <div class="alert bg-grey alert-warning alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        {{ Session::get('message') }}
                        </div>
                        @endif
                        
                        <div class="body">
                            <h1 class="card-inside-title"><strong>Staffs</strong></h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach(App\Staff::all() as $staff)
                                        <tr class="status">
                                            <td> 
                                                <a href="" style="text-decoration: none; color: grey;">{{$staff->fname}} {{$staff->lname}}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" style="text-decoration: none; color: grey;">{{$staff->email}}
                                                </a>
                                            </td>
                                            <td>{{$staff->phone_no}}</td>
                                            <td>{{$staff->address}}</td>
                                            <td><span id="status">{{$staff->status}}</span></td>
                                            
                                            <td>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                    <a  href="{{route('deletestaff',['id'=>$staff->id])}}"id="btndelete" class="btn bg-red waves-effect waves-light">Delete</a>
                                                    </div>
                                                
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->


                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                           <h1 class="card-inside-title"><strong>Customers</strong></h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Address</th>
                                            <th>AC Number</th>
                                            <th>AC Balance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Address</th>
                                            <th>AC Number</th>
                                            <th>AC Balance</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        @foreach(App\Customer::all() as $customer)

                                        <tr>
                                            <td>
                                                <a href="" style="text-decoration: none; color: grey;">{{$customer->fname}} {{$customer->lname}}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" style="text-decoration: none; color: grey;"">{{$customer->email}}</a>
                                            </td>

                                            <td>{{$customer->phone_no}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>{{$customer->ac_number}}</td>
                                            <td>&#36;{{$customer->ac_balance}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                    <a  href="{{route('deletecustomer',['id'=>$customer->id])}}"id="btndelete" class="btn bg-red waves-effect waves-light">Delete</a>
                                                    </div>
                                                
                                                </div>
                                                
                                            </td>
                                        </tr>
                                      
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>

        

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                           <h1 class="card-inside-title"><strong>Bill Payment</strong></h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"">
                                    <thead>
                                        <tr>
                                           <th>Account Name</th>
                                            <th>Depositor</th>
                                            <th>Phone</th>
                                            <th>created at</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Account Name</th>
                                            <th>Depositor</th>
                                            <th>Phone</th>
                                            <th>created at</th>
                                 
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                       
                                        @foreach(App\Billing::all() as $bill)
                                        <tr>
                                            <td>
                                               {{$bill->ac_name}} 
                                                
                                            </td>
                                            <td>
                                                {{$bill->depositor_name}}
                                            </td>

                                            <td>{{$bill->phone_no}}</td>
                                            <td>{{$bill->created_at}}</td>
                                            
                                        </tr>
                                      
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>


         
    </section>

    @endsection