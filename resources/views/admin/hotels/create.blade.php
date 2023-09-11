@extends('layouts.admin')

@section('content')

<h1>Add Hotel/Resort</h1>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>

<form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
    
    @csrf
    <div class="form-group row">

    <div class ="col-md-2">
            Hotel Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="title">
    </div>

</div>


<div class ="form-group row">

    <div class="col-md-2">
       Room Type
    </div>

    <div class="col-md-4">
        <input type="text" name ="roomtype" class="form-control">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Destination</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="destination_id" >


        @foreach ($hotels as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>


    </div>
    </div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 432x336 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">
    </div>
</div>

<div class="form-group row">

<div class="col-md-2">
Description
</div>

<div class="col-md-8">

 	<textarea name="text"></textarea>

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
Room & Details
</div>

<div class="col-md-8">


 	<textarea name="rooms_details"></textarea>

</div>
</div>



<div class="form-group row">

<div class="col-md-2">
Facilities
</div>

<div class="col-md-8">


 	<textarea name="facilities"></textarea>

</div>
</div>
<div class="form-group row">
<div class="col-md-2">
Excludes
</div>

<div class="col-md-8">


 	<textarea name="excludes"></textarea>

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
Popular Places
</div>

<div class="col-md-8">


 	<textarea name="popularplaces"></textarea>

</div>
</div>




 <div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Room</label>
    </div>
    <div class="col-md-6" >
    <input id="gender" name="rooms" type="radio" value="1" />
                <label for="gender" name="rooms" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="gender" name="rooms" type="radio" value="2" />
                <label for="gender" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>
    <div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Webpage</label>
    </div>
    <div class="col-md-6" >
    <input id="webpage" name="webpage" type="radio" value="1" />
                <label for="webpage" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="webpage" name="webpage" type="radio" value="2" />
                <label for="webpage" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>
    <div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Reservation</label>
    </div>
    <div class="col-md-6" >
    <input id="reservation" name="reservation" type="radio" value="1" />
                <label for="reservation" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="reservation" name="reservation" type="radio" value="0" />
                <label for="reservation" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>




<div class ="form-group row">

    <div class="col-md-2">
        Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control">
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

<script>

  CKEDITOR.replace( 'text' );
   CKEDITOR.replace( 'rooms_details' );
    CKEDITOR.replace( 'excludes' );
   CKEDITOR.replace( 'popularplaces' );
   CKEDITOR.replace( 'facilities' );

</script>
</div>
@endsection
