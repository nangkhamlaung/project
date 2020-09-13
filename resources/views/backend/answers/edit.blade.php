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

				<form action="{{route('answers.update',$answer->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					
					@method('PUT')
					<div class="form-group row">
						<label for="answer1" class="col-sm-2 col-form-label">Answer1 </label>
						<div class="col-sm-6">
							<input type="text" name="answer1" class="form-control col-sm-6" value="{{$answer->answer1}}" >
							<span class="text-danger">{{$errors->first('answer1')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="answer2" class="col-sm-2 col-form-label">Answer2 </label>
						<div class="col-sm-6">
							<input type="text" name="answer2" class="form-control col-sm-6" value="{{$answer->answer2}}" >
							<span class="text-danger">{{$errors->first('answer2')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="answer3" class="col-sm-2 col-form-label">Answer3 </label>
						<div class="col-sm-6">
							<input type="text" name="answer3" class="form-control col-sm-6" value="{{$answer->answer3}}">
							<span class="text-danger">{{$errors->first('answer3')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="answer4" class="col-sm-2 col-form-label">Answer4 </label>
						<div class="col-sm-6">
							<input type="text" name="answer4" class="form-control col-sm-6" value="{{$answer->answer4}}">
							<span class="text-danger">{{$errors->first('answer4')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="rightanswer" class="col-sm-2 col-form-label">Right Answer </label>
						<div class="col-sm-6">
							<input type="text" name="rightanswer" class="form-control col-sm-6" value="{{$answer->rightanswer}}">
							<span class="text-danger">{{$errors->first('rightanswer')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="question" class="col-sm-2 col-form-label">Question</label>
						<div class="col-sm-3">
							<select class="form-control form-control-md" id="question" name="question">
								<optgroup label="Choose Question">
									@foreach($questions as $question)
									<option value="{{$question->id}}">
										{{$question->name}}
									</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">{{$errors->first('question')}}</span>
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