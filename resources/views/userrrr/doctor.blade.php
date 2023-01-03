

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