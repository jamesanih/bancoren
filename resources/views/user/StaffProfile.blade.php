@extends('layouts.master')

@section('contents')
<section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">

                            <div class="content">
                           <!-- <p id="msg" class="alert alert-success"></p> -->

                           

                          <form action="{{route('updateStaff')}}" method="post">
                          <input type="hidden" value="{{$staff[0]->id}}" name="id">
                          
                          <br>
                          <br>
                            <!-- <input type="hidden" value="{{csrf_token()}}" id="token">   -->
                            <div class="body">
                               <h1 class="card-inside-title">Edit Profile</h1>

                              <div class="row clearfix">
                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>First Name:</label>
                                        <input type="text" class="form-control" value="{{$staff[0]->fname}}"  name="fname">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Last Name:</label>
                                        <input type="text" class="form-control" value="{{$staff[0]->lname}}"  name="lname">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Tel:</label>
                                        <input type="text" class="form-control" value="{{$staff[0]->phone_no}}"  name="phone_no">
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" value="{{$staff[0]->address}}"  name="address">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-2">
                                    <button class="btn btn-lg bg-red waves-effect waves-light" id="btn" type="submit">Submit</button>
                                  </div>
                                    {{ csrf_field() }} 

                            </div>           
                             </div>
                           </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

@endsection