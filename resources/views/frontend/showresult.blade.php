@extends('frontendtemplate')
@section('content')
<section class="blog_part section_padding ">
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-12 col-lg-12 " style="text-align: center;">
                    
                    <div class="single-home-blog">
                        <div class="card mx-3 my-3 offset-md-3" >
                            <table class="table table-bordered table-striped" style="box-shadow: 5px 5px #E4DFDE;" >
                                <tr>
                                    <th>Name</th>
                                    
                                    <th>Title</th>
                                    <th>Total Marks</th>
                                    <th>Date</th>

                                </tr>
                                <tbody>
                             @php 
                           
                            @endphp
                            @foreach ($results as $result)
                            <tr>
                                
                                
                                <td>{{$result->user->name}}</td>
                                <td>{{$result->title->name}}</td>

                                <td>{{$result->total}}Points</td>
                                <td>{{$result->created_at}}</td>
                                
                                
                           
                            </tr>
                            @endforeach
                        </tbody>
                            </table>
                           
                               
                                
                              
                        </div>
                         
                         
                    </div>
                </div>
                   
 
               </div>
               </div> 
            </div>
        </div>

    </section>
    <!--::blog_part end::-->


    
    
    
    

    @endsection


