@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Knowledge Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('knowledges.store')}}" method="POST" enctype="multipart/form-data">
					@csrf

					
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      	</div>
			      	<div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			      		<label for="description" class="col-sm-2 col-form-label">Description</label>
			       <textarea class="form-control col-sm-6" name="description"></textarea>
			          {{-- <input type="text" id="inputPhoto" name="description" class="d-block"> --}}
			          {{-- <span class="text-danger">{{ $errors->first('description') }}</span> --}}
			          
			        </div>
			      	</div>
					

					

					

					
					<div class="form-group row">
						<div class="col-sm-10">
							<input type="submit" name="btnsubmit" value="Create" class="btn btn-success" >
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
