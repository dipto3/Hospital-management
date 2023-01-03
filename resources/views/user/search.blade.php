@extends('user.master')

@section('content')

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            @if(count($searchs) > 0)
            @foreach ($searchs as $doctor)
                
            
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset('/storage/aboutimg/'.$doctor->image)}}" alt="">
                  
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$doctor->name}}</p>
                  <span class="text-sm text-grey">{{$doctor->department}}</span>
                </div>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $doctor->id?>">Profile</button>
              </div>
            </div>
    
            @endforeach
            @else
            <h4 style="color: red;">Search results empty</h4>
            
            @endif
    
    

          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div>
  @foreach ($searchs as $doctor)
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

@endsection