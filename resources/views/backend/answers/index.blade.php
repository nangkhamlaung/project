@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Answers List</h1>
		<div class="row">
			<div class="col-md-12">
		<a href="{{route('answers.create')}}" class="btn btn-info" >Add New</a>
			</div>
			<form action="{{route('answers.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				</form>	
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row ">
			<div class="col-md-12">				
					<table class="table table-bordered ">
						<thead class="table-dark my-3">
							<tr>
								<th scope="col">No</th>
								
								{{-- <th scope="col-md-3">Answer1</th>
								<th scope="col-md-3">Answer2</th>

								<th scope="col-md-3">Answer3</th>
								<th scope="col-md-3">Answer4</th> --}}

								
								<th scope=" col">Right Answer</th>
								<th scope="col">Question</th>
								
								<th scope="col" style="width: 200px;">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							@endphp
							@foreach ($answers as $answer)
							<tr>
								<td>{{$i++}}</td>
								
								{{-- <td>{{$answer->answer1}}</td>
								<td>{{$answer->answer2}}</td>
								<td>{{$answer->answer3}}</td>
								<td>{{$answer->answer4}}</td> --}}
								<td>{{$answer->right_answer}}</td>
								<td>{{$answer->question->name}}</td>
								
								<td>
									<form method="POST" action="{{route('answers.destroy',$answer->id)}}" onsubmit="return confirm('Are you sure?')">
									@csrf
									@method('DELETE')
												
								<a href="{{route('answers.show',$answer->id)}}" class="btn btn-warning"><i class="fas fa-info"></i>
									</a>


									<a href="{{route('answers.edit',$answer->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>
									</a>
									<button class="btn btn-danger">
										<i class="fas fa-trash"></i>
									</button>
								</form>
							</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				
			</div>
		</div>

	</div>
</div>
@endsection