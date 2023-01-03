@extends('user.master')

@section('content')

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
         
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="{{url('/about')}}" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach ($doctors as $doctor)
         
   
      
        <div class="item">
          <div class="card-doctor">
         
            <div class="header">
              
              <img src="{{asset('/storage/aboutimg/'.$doctor->image)}}" >
           
              
            </div>
            <div class="body">
             
              <p class="text-xl mb-0">{{$doctor->name}}</p>
            
              <span class="text-sm text-grey">{{$doctor->department}}</span>
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $doctor->id?>">Profile</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="container">
    
    <!-- Trigger the modal with a button -->
    
  
    <!-- Modal -->
    @foreach ($doctors as $doctor)
    <div class="modal fade" id="myModal<?php echo $doctor->id?>" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title">{{$doctor->name}}<br><span style="font-size: 18px;">{{$doctor->department}}</span></h4>
           
          </div>
          <div class="modal-body">
            <img src="{{asset('/storage/aboutimg/'.$doctor->image)}}" style="height: 180px;" >
          </div>
          
          <div class="modal-body">
            <p>{{$doctor->description}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">

@foreach($newss as $news)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
              <a href="{{url('/news-details/'.$news->id)}}" class="post-thumb">
                <img src="{{asset('/storage/newsimg/'.$news->image)}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('/news-details/'.$news->id)}}">{{$news->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                 
                </div>
                <span class="mai-time">{{$news->created_at}}</span> 
              </div>
            </div>
          </div>
        </div>
        
      
@endforeach
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('/allnews')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->
  
@endsection