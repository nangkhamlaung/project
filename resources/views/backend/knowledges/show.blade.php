@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					@csrf
					
					<div class="card" style="width: 40rem;">
						<img src="{{asset($knowledge->photo)}}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">{{ $knowledge->name }}</h5>
							<p class="card-text">{{$knowledge->description}}</p>
							<a href="{{route('knowledges.index',$knowledge->id)}}" class="btn btn-primary">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection