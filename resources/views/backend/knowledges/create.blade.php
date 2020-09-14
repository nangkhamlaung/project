@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Knowledge Create Form</h1>

	</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form action="{{route('knowledges.store')}}" method="post" enctype="multipart/form-data">
			@csrf
  			
  			<div class="form-group row">
  				<label for="name" class="col-sm-2 col-form-label">Name</label>
  				<div class="col-sm-6">
  					<input type="text" class="form-control" id="inputName" name="name">
  					<span class="text-danger">{{$errors->first('name')}}</span>
  				</div>
  			</div>
        
  			<div class="form-group row">
  				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
  				<div class="col-sm-6">
  					<input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
  					<span class="text-danger">{{$errors->first('photo')}}</span>
  				</div>
  			</div>

  			<div class="form-group row">
  				<label for="description" class="col-sm-2 col-form-label">Description</label>
  				<div class="col-sm-6">
  					<textarea name="description"  class="form-control"></textarea>
  					<span class="text-danger">{{$errors->first('description')}}</span>
  				</div>
  			</div>
  			
  			<div class="form-group row">
  				<div class="col-sm-10">
  					<button type="submit" class="btn btn-primary">Create</button>
  				</div>
  			</div>
  		</form>
    </div>
  </div>
</div>
@endsection