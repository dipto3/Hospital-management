@extends('admin.home')
@section('admin_content')
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>

       
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add About Content</h2>

        </div>


      


        <div class="box-content">
       
            
            <form class="form-horizontal" action="{{(url('/about-store'))}}" method="post" >
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Title</label>
                        <div class="controls">
                            <input type="text" name="title" class="input-xlarge"  required>
                        </div>
                    </div>
                   
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2"> Description</label>
                        <div class="controls">
                            <textarea class="cleditor"  name="description" rows="3" required></textarea>
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