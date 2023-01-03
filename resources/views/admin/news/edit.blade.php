@extends('admin.home')

@section('admin_content')




    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>

           
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit News</h2>

            </div>

            <div class="box-content">
          
                
                <form class="form-horizontal" action="{{url('/news-update/'.$news->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">New Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="title" value="{{$news->title}}">
                            </div>
                        </div>
                        
                      
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">News Description</label>
                            <div class="controls">
                                <textarea  name="description" rows="3" required>{{$news->description}}</textarea>
                            </div>

                        </div>
                       
                       

                        <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="image">
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