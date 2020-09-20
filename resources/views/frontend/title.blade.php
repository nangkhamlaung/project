@extends('frontendtemplate')
@section('content')

<!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        {{-- <p>Our Blog</p> --}}
                        <h2>Choose Quiz</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($titles as $title)
                <div class="col-sm-6 col-lg-4 col-xl-4 my-3" style="text-align: center;">
                    
                    <div class="single-home-blog">
                        <div class="card mx-3 my-3" >
                            <img src="{{$title->photo}}" class="card-img-top img-fluid" alt="blog" style="border-radius: 10px; box-shadow: 5px 5px #E4DFDE;">
                           
                               
                                
                              
                        </div>
                         
                         @role('Customer')
                               <a href="{{route('questionpage',$title->id)}}" class=" btn btn_1" style="box-shadow: 5px 5px #E4DFDE;" >Start Quiz</a>
                                @else
                                <a  href="{{ route('login') }}" class="btn btn_1">
                                    Please Login
                                </a>
                                @endrole
                    </div>
                </div>
                    @endforeach
 
               </div>
               </div> 
            </div>
        </div>

    </section>
    <!--::blog_part end::-->


    
    
    
    

    @endsection
















{{-- @extends('frontendtemplate')
@section('content')


    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        
                        <h2>Title</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($titles as $title)
                <div class="col-sm-6 col-lg-4 col-xl-4 my-3" style="text-align: center;">
                    <div class="single-home-blog">
                        <div class="card mx-3 my-3" >
                            <img src="{{$title->photo}}" class="card-img-top img-fluid" alt="blog" style="border-radius: 10px; box-shadow: 5px 5px #E4DFDE;">

                           

                               

                                
                        </div>
                        @role('Customer')
                                
                                
                                <a href="{{route('questionpage',$title->id)}}" class=" btn btn_1" style="box-shadow: 5px 5px #E4DFDE;" >Start Quiz</a> 
                                    
                                </a>
                                    @else
                                    <a href="{{route('login')}}" class=" btn btn_1" style="box-shadow: 5px 5px #E4DFDE;"> 
                                     Start Quiz  
                                    </a>
                                
                                @endrole
                         
                    </div>
                </div>
                    @endforeach
               </div>
               </div> 
            </div>
        </div>
    </section>
    <!--::blog_part end::-->



    

    

    

    



@endsection
 --}}