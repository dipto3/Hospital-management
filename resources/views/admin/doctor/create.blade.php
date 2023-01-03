@extends('admin.home')

@section('admin_content')




    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>

           
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Doctor</h2>

            </div>

            <div class="box-content">
          
                
                <form class="form-horizontal" action="{{url('/all-doctor/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Doctor Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Department Name</label>
                            <div class="controls">
                               <select name="department">
                               <option >Select Category</option>
                               @foreach ($categories as $category)
                               <option value="{{$category->name}}">{{$category->name}}</option>
                               @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date01">Phone</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" required>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea  name="description" rows="3" required></textarea>
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