@extends('frontendtemplate')
@section('content')

<!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        {{-- <p>Our Blog</p> --}}
                        <h2>Title</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            	@foreach($titles as $title)
                <div class="col-sm-6 col-lg-4 col-xl-4">
                	
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{$title->photo}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="{{route('questionpage')}}" class="btn_1">Start Quiz</a>
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('frontend/img/blog/css.jpg')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="" class="btn_1">Start Quiz</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('frontend/img/blog/js.jpg')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_1">Start Quiz</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('frontend/img/blog/php.jpg')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_1">Start Quiz</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('frontend/img/blog/jq.png')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_1">Start Quiz</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ asset('frontend/img/blog/sql.png')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_1">Start Quiz</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->


	
	
	
	

	@endsection







