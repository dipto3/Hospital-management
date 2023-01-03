@extends('admin.home')
@section('admin_content')
<div class="container-fluid ">
    <p>Doctors List</p>
   
 

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th style="width: 5%;"scope="col">ID</th>
                <th style="width: 15%;"scope="col">Doctor Name</th>
                <th style="width: 10%;"scope="col">Department</th>
                <th style="width: 10%;"scope="col">Phone</th>
                <th style="width: 20%;"scope="col">Description</th>
                <th style="width: 20%;"scope="col">Image</th>
                <th style="width: 20%;"scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach($doctors as $doctor)
                <tr>
                    <th  scope="row">{{$doctor->id}}</th>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->department}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->description}}</td>
                    <td><img style="height:80px; width:100px;"src="{{asset('/storage/aboutimg/'.$doctor->image)}}" alt=""></td>
                   
                    <td>
                        <div class="span2">
                            <a class="btn btn-info" href="{{url('/edit-doctor/'.$doctor->id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            </div>
                            <div class="span2">
                            <form method="post" action="{{url('/doctor-delete/'.$doctor->id)}}">
                                @csrf 
                              
                            <button class="btn btn-danger" type="submit">
                            <i class="halflings-icon white trash"></i> 
                            </button>	
                            </form>
                            </div>
                            <div class="span3"></div>
                           
                    </td>
                    
                  </tr>
               
             
            @endforeach
            </tbody>
          </table>

</div>
@endsection