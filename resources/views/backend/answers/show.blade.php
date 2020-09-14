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
    <div class="card border-info text-dark" style="width: 18rem;">
      <div class="card-header text-white bg-info">
       {{$answer->question->name}}
     </div>
     <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$answer->answer1}}</li>
      <li class="list-group-item">{{$answer->answer2}}</li>
      <li class="list-group-item">{{$answer->answer3}}</li>
      <li class="list-group-item">{{$answer->answer4}}</li>
      </ul>
  </div>

</div>
</div>

</div>
@endsection