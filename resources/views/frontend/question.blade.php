@extends('frontendtemplate')
@section('content')
<<<<<<< HEAD
<section class="blog_part section_padding mt-5  offset-md-2">
  <div class="container-fluid">

  <div class="row m-5 mt-3">
<h1>Question 1 to 10</h1>
    <div class="col-md-6">
    </div>
    </div>  
    {{-- question --}}
   <div class="row m-5 mt-3">

    <div class="col-md-6" id="answer">


      @php 
      $i=1;
      $questions=$title->questions->slice(0,10)->shuffle();
      @endphp
      @foreach($questions as $question)


      <form method="post">
       <input type="hidden" name="" value="{{$questions}}" id="myquestion">
      <div class="row mt-3 mb-3"  id="{{$question->id}}">
        <h5>{{$i++}} . {{$question->name}}</h5>
        @foreach($question->answers as $row)
        <div class="col-sm-10" >
          <div class="form-check">
            <input class="form-check-input answer" type="radio" data-question="{{$question->id}}" value="{{$row->answer1}}" name="answer{{$i}}">
            <label class="form-check-label" for="{{$row->id}}">
              {{$row->answer1}}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input answer" type="radio" data-question="{{$question->id}}" value="{{$row->answer2}}" name="answer{{$i}}">
            <label class="form-check-label" for="{{$row->id}}">
             {{$row->answer2}}
           </label>
         </div>
         <div class="form-check disabled">
          <input class="form-check-input answer" type="radio" data-question="{{$question->id}}" id="" value="{{$row->answer3}}" name="answer{{$i}}">
          <label class="form-check-label" for="{{$row->id}}">
            {{$row->answer3}}
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input  answer" type="radio" data-question="{{$question->id}}" id="" value="{{$row->answer4}}" name="answer{{$i}}">
          <label class="form-check-label" for="{{$row->id}}">
            {{$row->answer4}}
          </label>
        </div>
      </div>
      @endforeach
    </div>
  </form> 
  @endforeach
  <button class="btn btnsend btn-success">Send</button>
</div>

</div>
<div class="row m-5 mt-3">
 <div class="col-md-6" id="result" >
    <table>
      <thead>
      <tr>
        
        <th>Total</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    
</table>
<div id="result"></div>
    </div>
</div>
</div>
=======
<section class="blog_part section_padding">
  <div class="container-fluid">
    <div class="row m-3">
      <div class="col-md-6">
      <div id="time" style="float: right;"> Timeout!</div>
      @php $i=1; @endphp
        @foreach($title->questions->slice(0,10)->shuffle() as $question)
        <h4 class="mt-2">{{$i++}}.{{$question->name}}</h4>

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
>>>>>>> ff31d1eacac414c8da4bcd9485eefd2371570018
</section>
@endsection
<script type="text/javascript" src="{{asset('frontend/js/js_script.js')}}"></script>