@extends('layouts.master')

@section('contents')
<script>
     
    $(document).ready(function(){
        $('#transfers').load('<?php echo url('admin/transfers')?>').fadeIn('fast');
    })
</script>



<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                    	<div class="body">
                            <h1 class="card-inside-title"><strong>Received</strong></h1>
                            <div class="table-responsive">
                                <table id="receive" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Date-Time</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Depsitor</th>
                                            <th>Amount</th>
                                            <th>Phone Number</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date-Time</th>
                                            <th>Account Name</th>
                                            <th>Account Number</th>
                                            <th>Depsitor</th>
                                            <th>Amount</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $tran)
                                        <tr class="status">
                                            <td>{{$tran->created_at}}</td>
                                            <td> 
                                               {{$tran->account_name}}
                                                
                                            </td>
                                            <td>
                                                {{$tran->ac_number}}
                                                
                                            </td>
                                            <td>{{$tran->depositor_name}}</td>
                                            <td><span>&#36;</span>{{$tran->amount}}</td>
                                            <td><span id="status">{{$tran->phone_no}}</span></td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>



                {{--  Bank Statement  --}}


                <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="card">
                                 <div class="header">
                            <h1 class="card-inside-title"><strong>Transfers</strong></h1>
                            
                                   <!--  <form action="{{url('search')}}">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="searchData" id="month1" placeholder="Search">
                                            </div>
                                        </div>
                                    </form> -->
                                        
                                        
                            
                        </div>
                                    
                                <div class="body">
                                        
                                        <div class="table-responsive" id="transfers">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    

                
            </div>
        </div>
    </section>

	
@endsection