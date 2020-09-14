@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-10 mb-3 mx-auto">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Answer Detail</h1>
    		<a href="{{route('answers.index')}}" class="btn btn-outline-info float-right"><i class="fas fa-angle-double-left"></i>Go back</a>
  		</div>
    </div>
      

   
    
    <div class="row mt-4">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Answer1</th>
              <th>Answer2</th>
              <th>Answer3</th>
              <th>Answer4</th>
              
    					
    				</tr>
    			</thead>
    			<tbody>
            @php $i=1; @endphp
            
    				@foreach($answers as $answer)
            
            
                        <tr>
                           <td>{{$i++}}</td>
                           <td>{{$answer->answer1}}</td>
                           <td>{{$answer->answer2}}</td>
                           <td>{{$answer->answer3}}</td>
                           <td>{{$answer->answer4}}</td>
                           

                       
                       </tr>
                    @endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection