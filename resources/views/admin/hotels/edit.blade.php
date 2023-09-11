@extends('layouts.admin')

@section('content')

<h1>Edit Hotel</h1>
<h3>Hotel</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>

<form action="{{ route('hotels.update',$hotels->id) }}" method="post" enctype="multipart/form-data">
    @csrf

        @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Hotel Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="title" value="{{ $hotels->title }}">

    </div>

</div>


<div class ="form-group row">

    <div class="col-md-2">
       Room Type
    </div>

    <div class="col-md-4">
        <input type="text" name ="roomtype" class="form-control" value="{{ $hotels->text }}" >
    </div>

</div>

 <div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select studio</label>
    </div>
    <div class="col-md-4">


      <select class="form-control" name="destination_id" >
        @foreach($destinations  as $de )
     <option value="{{  $de->id }}"{{ $de->id == $hotels->destination_id ? 'selected' : '' }} >{{ $de->name }}</option>

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
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $hotels['image']) }}" height="100px" width ="100px" alt="" />
    </div>
</div>


<div class="form-group row">

<div class="col-md-2">
Description
</div>

<div class="col-md-8">

        <input type="text" name ="type" class="form-control" value="{{ $hotels->text }}" >
 	<textarea name="text">{{ $hotels->text }}</textarea>

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
Room & Details
</div>

<div class="col-md-8">


 	<textarea name="rooms_details" >{{ $hotels->rooms_details }}</textarea>

</div>
</div>
<div class="form-group row">

<div class="col-md-2">
Facilities
</div>

<div class="col-md-8">


 	<textarea name="facilities" >{{ $hotels->facilities }}</textarea>

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
Excludes
</div>

<div class="col-md-8">


 	<textarea name="excludes" >{{ $hotels->excludes }}</textarea>

</div>
</div>

<div class="form-group row">
<div class="col-md-2">
Popular Places
</div>

<div class="col-md-8">


 	<textarea name="popularplaces" >{{ $hotels->popularplaces}}</textarea>

</div>
</div>
<div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Room</label>
    </div>
    <div class="col-md-6" >
    <input id="gender" name="rooms" type="radio" value="1" {{ $hotels->rooms == "1" ? 'checked' : '' }}  />
                <label for="gender" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="gender" name="rooms" type="radio" value="0" {{ $hotels->rooms == "0" ? 'checked' : '' }}  />
                <label for="gender" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>
    <div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Webpage</label>
    </div>
    <div class="col-md-6" >
    <input id="webpage" name="webpage" type="radio" value="1" {{ $hotels->webpage == "1" ? 'checked' : '' }} />
                <label for="webpage" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="webpage" name="webpage" type="radio"  value="0" {{ $hotels->webpage == "0" ? 'checked' : '' }} />
                <label for="webpage" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>
    <div class ="form-group row">

     <div class="col-md-2" >
   <label for="selectid">Reservation</label>
    </div>
    <div class="col-md-6" >
    <input id="reservation" name="reservation" type="radio"  value="1" {{ $hotels->reservation == "1" ? 'checked' : '' }}/>
                <label for="reservation" class="" >YES</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input id="reservation" name="reservation" type="radio"  value="0" {{ $hotels->reservation == "0" ? 'checked' : '' }} />
                <label for="reservation" class="" >NO</label>&nbsp&nbsp&nbsp&nbsp&nbsp

</div>
    </div>

<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control" value="{{ $hotels->ordernumber }}" >
    </div>



</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> UPDATE  </button>
</form>

<form action="{{ route('hotels.destroy', $hotels->id) }}" method="POST" id="deleteForm{{ $hotels->id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $hotels->id }})">DELETE</button>
</form>

<script>
    function showDeleteConfirmation(hotelId) {
        if (confirm('Are you sure you want to delete this hotel?')) {
            document.getElementById('deleteForm' + hotelId).submit();
        }
    }
</script>



</div>

</div>
</div>





<script>

CKEDITOR.replace( 'text' );
   CKEDITOR.replace( 'rooms_details' );
    CKEDITOR.replace( 'excludes' );
   CKEDITOR.replace( 'popularplaces' );
   CKEDITOR.replace( 'facilities' );


</script>
</div>
@endsection
