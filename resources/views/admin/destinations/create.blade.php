
@extends('layouts.admin')

@section('content')
<h1>Add Destinations</h1>
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('destination.store') }}"  method="POST" enctype="multipart/form-data" >
    @csrf
<div class="form-group row">

    <div class ="col-md-2">
            Destination
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image diemension should be 400X400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>




<div class="form-group row">

    <div class ="col-md-2">
           Order number
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="ordernumber">
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
</div>
<br/>



@endsection
