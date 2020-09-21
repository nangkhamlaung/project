@extends('frontendtemplate')
@section('content')

<section class="blog_part section_padding mt-5">
  <div class="container col-md-12" id="answer">
    <div class="row">
      <div class="col-md-6 offset-md-3">


        @php 
        $i=1;
        $questions=$title->questions->slice(0,10)->shuffle();
        @endphp
        @foreach($questions as $question)

        <input type="hidden" name="" value="{{$title->id}}" class="title">
        <div class="card mb-4" style="box-shadow: 5px 5px #E4DFDE;">
          <div class="card-header ">
            <h5>{{$i++}} . {{$question->name}}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><form method="post">
         <input type="hidden" name="" value="{{$questions}}" id="myquestion">
         <div class="row  mb-3"  id="{{$question->id}}">
          
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
    </form></li>
            
          </ul>
        </div>
 
    @endforeach
    <div style="text-align: center;" class="mt-3">
    <button class="btn btnsend btn_1" id="save">Show Record</button>
  </div>

  </div>
</div>
</div>

<div id="result" >
  <div class="container col-md-12 col-lg-12 ">
    <div class="row">
      <div class="card col-md-6 offset-md-3  " width="100px" >
        <div class="card-header text-center btn_1 " >
          <h4>Your Result</h4>
        </div>
        <div class="card-body">
          <table class="table " style="box-shadow: 5px 5px #E4DFDE;"  >
            <thead>
              <tr>

                <th scope="col">Title</th>
                <th scope="col">Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td>{{$title->name}}</td>
               {{--  <td class="tit"></td> --}}
              </tr>
              <tr>

                <td>All Question</td>
                <td class="qus"></td>
              </tr>
              <tr>

                <td>Your Answer</td>
                <td class="ans"></td>
              </tr>
              <tr>

                <td>Remaing Answer</td>
                <td class="remain"></td>
              </tr>
              <tr>

                <td>Result Marks</td>
                <td class="result"></td>
              </tr>
              <tr>


                <td colspan="2" class="tfoot text-center">No Result</td>
                
              </tr>

              
            </tbody>
            
          </table>
          <div style="text-align: center;">

            <a href="{{route('questionpage',$title->id)}}" class="btn btn_1 mr-2" style="box-shadow: 5px 5px #E4DFDE;">Try Again </a>
            <input type="hidden" name="" value=""id="result" class="title">
            <a class="btn btn_1 save ml-2" style="box-shadow: 5px 5px #E4DFDE;">Save </a>
          </div>


            
        </div>
        
      </div>
    </div>
  </div>
</div>
</section>

@endsection








