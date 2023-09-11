@extends('layouts.admin')

@section('content')
<h1>Edit Studio Images</h1>
<h3>Studio image</h3>

<form action="/Studio/updatestudioimages/" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()">

<input type="hidden" name ="id" class="form-control" value="">
<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 1000x697 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="/uploads/studioimages/" height="100px" width ="100px" alt="" />
    </div>
</div>


<div class="form-group row">

<div class="col-md-2">
Order Number
</div>

<div class="col-md-4">
        <input type="text" name ="order_number" class="form-control" value="" >
</div>
</div>

<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE </button>

    </form>

<a class= "btn btn-danger" onclick = "deletestudioimage()" > DELETE </a>

</div>

</div>
</div>


<script>

   function deletestudioimage($id)
 {

     window.location= "<?php echo base_url()?>studio/deleteimage/"+$id;
     }
     </script>



</div>
@endsection
