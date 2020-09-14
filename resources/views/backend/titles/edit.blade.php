@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Title Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('titles.update',$title->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6"value="{{$title->name}}" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			        	<nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
						    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
						    
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<img src="{{asset($title->photo)}}" width="200px" height="150px" class="mt-3">
						  	<input type="hidden" name="oldphoto" value="{{$title->photo}}">
						  </div>
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			          			<input type="file" id="inputPhoto" name="photo" class="d-block mt-3">
						  	
						  </div>
						 
						</div>
			          	<span class="text-danger">{{ $errors->first('photo') }}</span>


			        </div>
			      </div>
					

					

					

					

					

					
					<div class="form-group row">
						<div class="col-sm-10">
							<input type="submit" name="btnsubmit" value="Update" class="btn btn-success" >
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection