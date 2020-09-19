@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	
	<!-- Page Heading -->
    <div class="row">
     <div class="col-md-12 mb-3">
        <h1 class="h3 mb-0 text-gray-800 d-inline-block">User List</h1>

        <form method="get" action="{{route('results.index')}}" class="mt-2">
          <div class="form-row">
            <div class="col">
              <input type="date" class="form-control" placeholder="Start Date" name="sdate">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="End Date" name="edate">
            </div>
            <div class="col">
              <input type="submit" class="btn btn-success" value="Search">
            </div>
          </div>
        </form>
      </div>
    </div>
	
	
	
	
		<div class="row">
			<div class="col-md-12 ">

					
					<table class="table table-bordered ">
						<thead class="table-dark">
							<tr>
								<th scope="col">No</th>
								
								
								
								<th scope="col">User</th>
								<th scope="col">Title</th>
								<th scope="col">Total</th>

								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							 @php 
							$i=1;
							@endphp
							@foreach ($results as $result)
							<tr>
								<td>{{$i++}}</td>
								
								<td>{{$result->user->name}}</td>
								<td>{{$result->title->name}}</td>

								<td>{{$result->total}} MMK</td>
								{{-- <td><a href="{{route('result.show',$result->id)}}" class="btn btn-info">Detail</a>
								
								
							</td> --}}
							</tr>
							@endforeach
						</tbody>
					</table>
				
			</div>
		</div>


</div>
@endsection