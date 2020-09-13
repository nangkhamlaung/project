@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Title List</h1>
		<div class="row">
			<div class="col-md-12">
		<a href="{{route('titles.create')}}" class="btn btn-info" >Add New</a>
			</div>
			<form action="{{route('titles.store')}}" method="POST" enctype="multipart/form-data">
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

								
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							@endphp
							@foreach ($titles as $title)
							<tr>
								<td>{{$i++}}</td>
								<td>{{$title->name}}</td>
								<td>
									<form method="POST" action="{{route('titles.destroy',$title->id)}}" onsubmit="return confirm('Are you sure?')">
									@csrf
									@method('DELETE')


									

								

								

									
									<a href="{{route('titles.edit',$title->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>
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