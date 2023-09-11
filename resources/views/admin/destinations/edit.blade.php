
@extends('layouts.admin')

@section('content')
<h1>Edit Destination</h1>
<h3>Edit </h3>
 <script  src="/ckeditor/ckeditor.js" > </script>
<form action="{{ route('destination.update', $destination->id) }}" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()" >
    @csrf

    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name" value="{{ $destination->name }}">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 400X400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $destination['image']) }}" height="100px" width ="100px" alt="" />
    </div>
</div>
{{-- <div class="form-group row">

<div class="col-md-2">
Text
</div>

<div class="col-md-8">


 	<textarea name="text"></textarea>

</div>
</div> --}}



<div class="form-group row">

<div class="col-md-2">
Order Number
</div>

<div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control" value="{{ $destination->ordernumber }}" >
</div>
</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> Update  </button>
    </form>

    <form id="deleteForm{{ $destination->id }}" action="{{ route('destination.destroy', $destination->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class= "btn btn-danger" onclick="showDeleteConfirmation({{ $destination->id }})">DELETE</button>
    </form>
    <script>
        function showDeleteConfirmation(packageId) {
            if (confirm('Are you sure you want to delete this package?')) {
                document.getElementById('deleteForm' + packageId).submit();
            }
        }
        </script>
</div>

</div>
</div>


<script>

   function deletedestination($id)
 {

     window.location= "Destination/delete/"+$id;
     }
     </script>


<script>

  CKEDITOR.replace( 'txtDescription' );


</script>
@endsection

