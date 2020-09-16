@extends('frontendtemplate')
@section('content')
<section class="blog_part section_padding">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            
        
    
        @foreach($title->questions as $question)
        <h4>{{$question->name}}</h4>

        
         @foreach($question->answers as $answer)
         
<!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
  <label class="custom-control-label" for="defaultUnchecked">{{$answer->answer1}}</label>
</div>

<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
  <label class="custom-control-label" for="defaultChecked">{{$answer->answer2}}</label>
</div>
<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
  <label class="custom-control-label" for="defaultChecked">{{$answer->answer3}}</label>
</div>
<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
  <label class="custom-control-label" for="defaultChecked">{{$answer->answer4}}</label>
</div>

 @endforeach
        @endforeach
        
</div>
</div>
</div>
</section>
@endsection