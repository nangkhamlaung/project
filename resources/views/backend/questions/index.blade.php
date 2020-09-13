@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Questions List</h1>
		<div class="row">
			<div class="col-md-12">
		<a href="{{route('questions.create')}}" class="btn btn-info" >Add New</a>
			</div>
			<form action="{{route('questions.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				</form>	
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>
								<th scope="col">No</th>
								
								<th scope="col">Name</th>
								
								<th scope="col">Title</th>
								
								<th scope="col" style="width: 200px;">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							@endphp
							@foreach ($questions as $question)
							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$question->name}}</td>
								<td>{{$question->title->name}}</td>
								
								<td>
									<form method="POST" action="{{route('questions.destroy',$question->id)}}" onsubmit="return confirm('Are you sure?')">
									@csrf
									@method('DELETE')

									
								
								


									<a href="{{route('questions.edit',$question->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>
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