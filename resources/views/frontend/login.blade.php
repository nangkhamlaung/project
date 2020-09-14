@extends('frontendtemplate')
@section('content')

	
	

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Login </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-5">
				 <form method="POST" action="{{route('login')}}">
					@csrf


                      
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputEmailAddress">Email</label>

		      			<input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="inputEmailAddress" placeholder="Enter email address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		      			
		      		</div>
		      		
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputPassword">Password</label>
		      			<input id="inputPassword" type="password" class="form-control  py-4 @error('password') is-invalid @enderror"  name="password" placeholder="Enter password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		      			{{-- <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" /> --}}
		      		</div>
		      
		      		<div class="form-group">
		          		<div class="custom-control custom-checkbox">
		          			<input class="custom-control-input"  id="rememberPasswordCheck" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
		          			<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>

		          			{{--  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> --}}


		          		</div>

		          		
		          		@if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif

		      		</div>
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		
		        		<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>

		      		</div>


		  		</form>

		  		<div class=" mt-3 text-center ">
		  			<a href="#" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
		  		</div>
			</div>
		</div>
		
		
		

	</div>
	
@endsection


	