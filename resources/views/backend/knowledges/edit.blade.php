@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Knowledge Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('knowledges.update',$knowledge->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					@method('PUT')
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6"value="{{$knowledge->name}}" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label" >Photo</label>
						<div class="col-sm-6">
							<input type="file" class="form-control-file col-sm-6" name="photo" >
							<span class="text-danger">{{$errors->first('photo')}}</span>
							<img src="{{asset($knowledge->photo)}}" class="img-fluid w-25">

							<input type="hidden" name="oldphoto" value="{{$knowledge->photo}}">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="desceiption" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-6">
							<textarea class="form-control col-sm-6" name="description">{{$knowledge->description}}</textarea>
							<span class="text-danger">{{$errors->first('description')}}</span>
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