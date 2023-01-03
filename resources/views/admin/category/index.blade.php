@extends('admin.home')
@section('admin_content')
<div class="container-fluid ">
    <p>Doctors List</p>
   
    @if(session('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
    <h4 class="alert-heading">Success!{{ session('message') }}</h4>    

    </div>
        @endif

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th style="width: 5%;"scope="col">ID</th>
                <th style="width: 20%;"scope="col">Category Name</th>
               
                <th style="width: 45%;"scope="col">Description</th>
                <th style="width: 30%;"scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <th  scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{!!$category->description!!}</td>
                   
                    <td>
                        <div class="span2">
                            <a class="btn btn-info" href="{{url('/edit-category/'.$category->id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            </div>
                            <div class="span2">
                            <form method="post" action="{{url('/edit-delete/'.$category->id)}}">
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