@extends('layouts.master')

@section('contents')

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
                            <h1 class="card-inside-title"><strong>Deposit</strong></h1>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"">
                                    <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Depositor</th>
                                            <th>Amount</th>
                                            <th>Phone</th>
                                            <th>created at</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Depositor</th>
                                            <th>Amount</th>
                                            <th>Phone</th>
                                            <th>created at</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach(App\Transaction::all() as $deposit)
                                        <tr>
                                            <td> 
                                                {{$deposit->account_name}}
                                                
                                            </td>
                                            <td>
                                               {{$deposit->ac_number}}
                                                
                                            </td>
                                            <td>{{$deposit->depositor_name}}</td>
                                            <td>{{$deposit->amount}}</td>
                                            <td>{{$deposit->phone_no}}</td>
                                            <td>{{$deposit->created_at}}</td>
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