@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="row">
	<div class="col-md-12 mb-3">
		
		<h1 class="h4 mb-0 text-gray-800">UserId:{{$result->user_id}}</h1>
		
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				
					@csrf
					
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>

								<th scope="col">No</th>
								<th scope="col">UserId</th>
								<th scope="col">Title</th>
								<th scope="col">Total</th>
								
							</tr>
						</thead>
						<tbody>
							@php 
							$i=1;
							$result=0;
							@endphp
							@foreach ($result->title as $title)
							

							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$title->name}}</td>
								
								
								<td>{{$title->total}}</td>
							</tr>
							@endforeach		
						
							
							<tr class="bg-dark text-white">
								<td colspan="4">Total:</td>
								<td>{{$result}}MMK</td>
							</tr>
						</tbody>

						
					</table>
				</div>			
		</div>

	</div>
</div>
@endsection