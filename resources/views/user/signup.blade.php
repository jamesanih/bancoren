@extends('layouts.signup')


@section('contents')

<div class="card">
	<div class="body">
		<h1>Sign In</h1>
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif
		<form action="{{ route('user.signup')}}" method="post">
			<div class="msg">Register a new membership</div>
			<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fname" placeholder="Name Surname" required autofocus>
                        </div>
                    </div>

			<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lname" placeholder=" Last Name" required autofocus>
                        </div>
                    </div>

			<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

			<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>
                    <div class="col-xs-4">
                        {{--  <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>  --}}
                        <input type="submit" name="submit" class="btn btn-block bg-blue waves-effect" value="Sign Up">
                    </div>

                     <div class="m-t-25 m-b--5 align-center">
                        <a href="{{route('login')}}">Already a membership?</a>
                    </div>

                    

			
			{{ csrf_field() }}
		</form>
	</div>
</div>

@endsection