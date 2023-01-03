@extends('user.master')

@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item">News</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            

           
            
         
       
          
            @foreach($newss as $news)
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  
                  <a href="{{url('/news-details/'.$news->id)}}" class="post-thumb">
                    <img src="{{asset('/storage/newsimg/'.$news->image)}}" alt="">
                  </a>
                </div>
               
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/news-details/'.$news->id)}}">{{$news->title}}</a></h5>
                  <div class="site-info">
                   
                    <span class="mai-time"></span> {{$news->created_at}}
                  </div>
                </div>
                
              </div>
            </div>
            @endforeach
            
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            
        

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              
         @foreach($newss as $news)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset('/storage/newsimg/'.$news->image)}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">{{$news->title}}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> {{$news->created_at}}</a>
                    
                  </div>
                </div>
              </div>
              @endforeach
            </div>

           

            
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  
  @endsection