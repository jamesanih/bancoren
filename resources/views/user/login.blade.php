@extends('layouts.sign-up')


@section('title')
    {{--Output the appliction name.--}}
   {{ config('app.name', 'Laravel') }}

@endsection
@section('contents')
@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
    @endif
<div class="card">
	<div class="body">
		<h1>Sign In</h1>
		
		<form action="{{ route('user.signin')}}" method="post">
            {{ csrf_field() }}
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
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{URL::to('/')}}">Home</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{route('forgotpassword')}}">Forgot Password?</a>
                        </div>
                    </div>
			
		</form>
	</div>
</div>

@endsection