@extends('layouts.admin')

@section('content')

<h1>Add Kerala Houseboats Package Type</h1>
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('houseboatspackages.submit') }}" method="post" enctype="multipart/form-data" >
    @csrf
<div class="form-group row">

    <div class ="col-md-2">
            Kerala Houseboats Package Type Title
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="package_type">
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

<div class="col-md-2">
Text
</div>

<div class="col-md-8">


 	<textarea name="text"></textarea>

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
<script>

  CKEDITOR.replace( 'text' );


</script>
</div>
<br/>


<h3>List Kerala Houseboats Package Types </h3>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
                <tr>


                 <th>Kerala Houseboats Package Type Title</th>
                  <th>Image</th>
                   <th>Text</th>
                   <th>Order number</th>

                <th>Edit</th>


                </tr>
        </thead>

        <tbody>

            @foreach ($houseboatspackagestypes as $types)
            <tr>

               <td>{{ $types->package_type }}</td>
               <td> <img src="{{ asset('storage/' . $types->image) }}" height="100px" width ="100px" alt="" /> </td>
               <td>{{ strip_tags($types->text, '<a><strong><em><u><s><br><div>') }}</td>
                  <td>{{ $types->ordernumber }}</td>


             <th> <a href="{{ route('houseboatsPackage_type.edit' , $types->id) }}"> Edit </th>

           </tr>

           @endforeach


            </tbody>

            </table>

    </div>
    @endsection


