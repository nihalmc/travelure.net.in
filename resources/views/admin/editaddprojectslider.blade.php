@extends('layouts.admin')

@section('content')

<h1>Edit Project slider</h1>
<h3>Edit</h3>
<form action="/Projectslider/update/" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()">


</div>
<input type="hidden" name ="id" class="form-control" value="">
 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
    <select class="form-control" name="slider" >

     <option value=  > </option>

      </select>


    </div>
    </div>
<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="/uploads/projectslider/" height="100px" width ="100px" alt="" />
    </div>
</div>


<div class="form-group row">

    <div class ="col-md-2">
            order number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="ordernumber" value="">
    </div>

</div>


<div class ="form-group row">

    <div class="col-md-2">
        title
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control" value="">
    </div>



</div>




<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>



</form>

<a class= "btn btn-danger" onclick = "deleteprojectslider()" > DELETE </a>

</div>

</div>
</div>


<script>

   function deleteprojectslider($id)
 {

     window.location= "<?php echo base_url()?>projectslider/delete/"+$id;
     }
     </script>
@endsection
