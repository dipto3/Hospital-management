@extends('admin.home')

@section('admin_content')




    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>

           
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>

            </div>


          


            <div class="box-content">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icon-off"></i>
            </button>


            <h4 class="alert-heading">Success!{{ session('message') }}</h4>    
    
            </div>
                @endif
                
                <form class="form-horizontal" action="{{'/edit-category/check/'.$category->id}}" method="POST" >
                
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="">Category Name</label>
                            <div class="controls">
                                
                                <input type="text" class="input-xlarge" name="name" value="{{$category->name}}">
                            </div>
                        </div>
                       
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3">{!!$category->description!!}</textarea>
                            </div>

                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </fieldset>
                </form>
               

            </div>
        </div><!--/span-->
    </div><!--/row-->
   
@endsection