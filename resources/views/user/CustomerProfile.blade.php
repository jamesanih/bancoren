@extends('layouts.master')




@section('contents')

<script type="text/javascript">
  $(document).ready(function(){
    $("#msg").hide();
    $("#btn").click(function(){
      $("#msg").show();
      var id = $("#id").val();
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      var phone_no = $("#phone_no").val();
      var address = $("#address").val();
      var token = $("#token").val();

      $.ajax({
        type: "post",
        data: "id="+ id + "&fname=" + fname + "&lname=" + lname + "&phone_no=" + phone_no + "&address=" + address + "&_token=" + token,
        url : "<?php echo url('/admin/updateCustomer')?>",
        success:function(response){
           $('#msg').html(response.message);
            $('#msg').fadeOut(2000);
        }
      })
    });
  })
</script>
<section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">

                            <div class="content">
                            <div class="alert alert-success" id="msg">
                                
                            </div>

                           

                          <!-- <form action="{{route('updateStaff')}}" method="post"> -->
                          <input type="hidden" value="{{$customer[0]->id}}" name="id" id="id">
                          
                          <br>
                          <br>
                            <input type="hidden" value="{{csrf_token()}}" id="token">  
                            <div class="body">
                              <h1 class="card-inside-title">Edit Profile</h1>

                              <div class="row clearfix">
                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>First Name:</label>
                                        <input type="text" class="form-control" value="{{$customer[0]->fname}}"  name="fname" id="fname">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Last Name:</label>
                                        <input type="text" class="form-control" value="{{$customer[0]->lname}}"  name="lname" id="lname">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Tel:</label>
                                        <input type="text" class="form-control" value="{{$customer[0]->phone_no}}"  name="phone_no" id="phone_no">
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-sm-6">
                                    <div class="form-group form-group-lg">
                                      <div class="form-line">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="{{$customer[0]->address}}"  name="address" id="address">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-2">
                                    <button class="btn btn-lg bg-blue waves-effect waves-light" id="btn" type="submit">Submit</button>
                                  </div>
                                   <!--  {{ csrf_field() }} 
 -->
                            </div>           
                             </div>
                           <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

@endsection