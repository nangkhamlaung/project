@extends('frontendtemplate')
@section('content')
<!-- banner part start-->

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>Show Your Ability</h1>
                            <p>Following quiz provides Multiple Choice Questions related to many title. You will have to read all the given answers and click over the correct answer. If you are not sure about the answer then you can check the answer using Show Answer button. You can use Next Quiz button to check new set of questions in the quiz.</p>

                            
                             @role('Customer')
                                
                                
                                <a href="{{route('titlepage')}}" class="btn_1"> Start Quiz</a> 
                                    
                                
                                    @else
                                    <a href="{{route('login')}}" class=" btn btn_1" style="box-shadow: 5px 5px #E4DFDE;"> 
                                      Get Started  
                                </a>
                                
                            @endrole

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


<!-- learning part start-->
<section id="about">
<section class="learning_part">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="{{ asset('frontend/img/learning_img.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>About us</h5>
                    <h2>Making Quiz Purpose </h2>
                    <p>An online quiz maker is a useful tool for facilitating both kinds of growth. How? Marketers can use quizzes as part of a social media marketing strategy to generate brand awareness or to drive engagement. Organizations also use quizzes to strengthen lessons from onboarding or training. Project management software platforms, like Wrike, create quizzes for customers after product tutorials. As a result they reduced product training time by 70%.</p>
                        
                            {{-- <a href="#" class="btn_1">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <!-- learning part end-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                     {{--  <h5>Advance feature</h5> --}}
                     <h2>Advantage of IT Quiz</h2>
                     <p>Quizzes can be given without an instructor. Since the quiz is virtual, employees can take them on their own time without the need of someone acting as a proctor. We can also check our own skill everytime we needs.</p>


                     <h2>Disadvantage of IT Quiz</h2>
                     <p>IT Quiz system is need to access the Internet first we used. So it is difficult for someone who hasn't had the Internet access.</p>

                 </div>
             </div>
             <div class="col-lg-6 col-md-6">
                <div class="learning_img">
                    <img src="{{ asset('frontend/img/advance_feature_img.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!--::blog_part start::-->
<section id="knowledge">
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    {{-- <p>Our Blog</p> --}}
                    <h2>Knowledges</h2>

                </div>

            </div>
        </div>
        <div class="row">
            @foreach($knowledges as  $knowledge)
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{asset($knowledge->photo)}}" class="card-img-top" alt="blog">
                        <div class="card-body">

                            <h5 class="card-title">{{$knowledge->name}}</h5>
                            <p>{{$knowledge->description}}</p>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>  
    </div>     
</section>
</section>
<!--::blog_part end::-->

@endsection