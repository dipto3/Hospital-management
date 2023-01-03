@extends('user.master')

@section('content')

<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/allnews')}}">News</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{asset('/storage/newsimg/'.$news->image)}}" alt="">
            </div>
            
            <h2 class="post-title h1">{{$news->title}}</h2>
            <div class="post-content">
              <p>{{$news->description}}</p>

             
            </div>
            
          </article> <!-- .blog-details -->

          {{-- <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div> --}}
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