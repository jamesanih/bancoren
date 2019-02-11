@extends('layouts.master')

@section('contents')

<script>
    $(document).ready(function() {
        $('#div3').hide();
        $('#errmsg').hide();

       /* $('#btn2').click(function() {
			//alert('Confirm');
			
			var code = $('#pin').val();
			$.ajax({
				type: "POST",
				data: "pin=" + code + "&_token="+ token,
				url: "<?php echo url('/tst')?>",
				success:function(response) {
					if(response.message == 'Transcation Approved') {
						$('#div2').hide();
						$('#div3').show();
					}else {
                        $('#errmsg').html(response.message);
                    }
				}
			})
		})*/
    })
</script>

<section class="content">
    <div class="container-fluid">
        
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
                       
                        <div class="card" id="div2">
                               
                                            <div class="header" align="center">
                                                    <h1>Input Your transcation code</h1>
                                                </div>
                                                @if (Session::has('message'))
                                                <div class="col-xs-12">
                                                  <div class="alert bg-blue alert-warning alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('message') }}
                                               </div>  
                                                </div>
                                                
                                               @endif 
                                                <div class="body" align="center">
                                                        <div class="row clearfix">
                                                      	
                                                    <form action="{{route('otp')}}" method="POST">
                                                            {{ csrf_field() }}
                                                        <input type="text" id="pin" name="pin" > <br><br>
                                                        
                                                                <button class="btn bg-red waves-effect waves-light" id="btn2">SUBMIT</button>
                                                            
        
                                                    </form>
                                                        
                                                </div>

                                                {{--  <input type="hidden" value="{{csrf_token()}}" id="token">
          --}}
        
                                    </div>
        
                            
                    </div>

        </div>

    </div>
</section>
    
@stop
