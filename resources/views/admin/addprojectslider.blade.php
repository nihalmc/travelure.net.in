@extends('layouts.admin')

@section('content')

<h1>Add Project slider</h1>
<form action="projectslider/saveaddprojectslider" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()">


</div>
 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select project</label>
    </div>
    <div class="col-md-4">
       <select class="form-control" name="slider" >

        <option value=> </option>


      </select>

    </div>
    </div>
<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>
</div>


<div class="form-group row">

    <div class ="col-md-2">
            order number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="ordernumber">
    </div>

</div>


<div class ="form-group row">

    <div class="col-md-2">
        title
    </div>

    <div class="col-md-4">
        <input type="text" name ="title" class="form-control">
    </div>



</div>




<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> SAVE  </button>

    </div>
</div>





</form>

@endsection

