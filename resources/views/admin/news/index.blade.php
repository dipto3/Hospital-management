@extends('admin.home')
@section('admin_content')
<div class="container-fluid ">
    <p>News List</p>
   
 

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th style="width: 10%;"scope="col">ID</th>
                <th style="width: 20%;"scope="col">News Title</th>
            
                <th style="width: 30%;"scope="col">Description</th>
                <th style="width: 20%;"scope="col">Image</th>
                <th style="width: 20%;"scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach($newss as $news)
                <tr>
                    <th  scope="row">{{$news->id}}</th>
                    <td>{{$news->title}}</td>
                   
                   
                    <td>{{$news->description}}</td>
                    <td><img style="height:80px; width:100px;"src="{{asset('/storage/newsimg/'.$news->image)}}" alt=""></td>
                   
                    <td>
                        <div class="span2">
                            <a class="btn btn-info" href="{{url('/edit-news/'.$news->id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            </div>
                            <div class="span2">
                            <form method="post" action="{{url('/news-delete/'.$news->id)}}">
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