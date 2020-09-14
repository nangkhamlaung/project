@extends('frontendtemplate')
@section('content')


	
	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Create Account </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-8">
				 <form method="POST" action="{{ route('register') }}">
                        @csrf
		      		        <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputName"> Name</label>
                               <input id="inputName" type="text" class="form-control py-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group">
                      	<label class="small mb-1" for="inputEmailAddress">Email</label>
                         <input id="inputEmailAddress" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" aria-describedby="emailHelp">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      	
                    </div>
                  </div>
                </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputPassword">Password</label>
                              <input id="inputPassword" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Enter password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                              <font id="error" color="red"></font>
                            </div>

                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                              
                              <input class="form-control py-4" name="password_confirmation" id="inputConfirmPassword" type="password" placeholder="Confirm password" required autocomplete="new-password" />
                              <font id="cerror" color="red"></font>

                            </div>
                        </div>

                    </div>

                    
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		 <button type="submit" class="btn btn-secondary mainfullbtncolor ">
                                    {{ __('Register') }}
                                </button>
		        		
		      		</div>
		  		</form>

		  		<div class=" mt-3 text-center ">
		  			<a href="{{route('loginpage')}}" class="loginLink text-decoration-none">Have an account? Go to login</a>
		  		</div>
			</div>
		</div>
		
		
		

	</div>
	


	@endsection