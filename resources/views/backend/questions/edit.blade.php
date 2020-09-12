@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-center mb-4">
		<h1 class="h3 mb-0 text-gray-800">Question Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="{{route('questions.update',$question->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					@method('PUT')
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" class="form-control col-sm-6"value="{{$question->question}}" >
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="title" class="col-sm-2 col-form-label">Title Choose</label>
						<div class="col-sm-3">
							<select class="form-control form-control-md" id="title" name="title">
								<optgroup label="Choose Title">
									@foreach($titles as $title)
									<option value="{{$title->id}}">
										{{$question->title->name}}
									</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">{{$errors->first('title')}}</span>
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