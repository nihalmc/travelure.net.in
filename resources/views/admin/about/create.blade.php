@extends('layouts.admin')

@section('content')
<h1>About</h1>
<div class="row container" style="">
 <script  src=" {{ asset('admin/ckeditor/ckeditor.js') }}" > </script>


<form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
   
<div class="form-group row">
    <div class ="col-md-2">
          Text
    </div>
    <div class = "col-md-8">

            <textarea name="text">{{ $abouts->text }}</textarea>



    </div>

</div>


<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
       Image diemension should be 1000x697 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">


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


</script>
</div>

@endsection
