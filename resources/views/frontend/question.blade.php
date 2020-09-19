@extends('frontendtemplate')
@section('content')
<section class="blog_part section_padding">
  <div class="container-fluid">
    <div class="row m-3">
      <div class="col-md-6">
      <div id="time" style="float: right;"> Timeout!</div>
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
          <div class="col-sm-10">
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
  </div>
</section>
@endsection