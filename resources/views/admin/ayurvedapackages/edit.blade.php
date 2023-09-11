@extends('layouts.admin')

@section('content')

<h3> Edit Ayurveda Packages</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('ayurvedapackages.update',$ayurvedapackages->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Package Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name" value="{{ $ayurvedapackages->name }}">

    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 400x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' .$ayurvedapackages->image) }}" height="100px" width ="100px" alt="" />
    </div>
</div>

<div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Package Type</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="packagetype_id" >

        @foreach($ayurvedapackagetypes as $type)
        <option value="{{ $type->id }}" {{ $type->id == $ayurvedapackages->packagetype_id ? 'selected' : '' }}>
            {{ $type->package_type }}
        </option>
        @endforeach



      </select>


    </div>
    </div>
<div class="form-group row">

        <div class="col-md-2">
        Package Details
        </div>

        <div class="col-md-8">

            <textarea name="PackageDetails">{{ $ayurvedapackages->PackageDetails }}</textarea>

        </div>
        </div>
        <div class="form-group row">

        <div class="col-md-2">
        Treatment
        </div>

        <div class="col-md-8">

            <textarea name="Treatment">{{ $ayurvedapackages->Treatment }}</textarea>

        </div>
        </div>



        <div class ="form-group row">

            <div class="col-md-2">
            Destination
            </div>

            <div class="col-md-4">
                <input type="text" name ="destination" class="form-control" value="{{ $ayurvedapackages->destination }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Days
            </div>

            <div class="col-md-4">
                <input type="text" name ="days" class="form-control" value="{{ $ayurvedapackages->days }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Class/Plan
            </div>

            <div class="col-md-4">
                <input type="text" name ="class" class="form-control" value="{{ $ayurvedapackages->class }}" >
            </div>

        </div>

        <div class="form-group row">

            <div class="col-md-2">
            Includes
            </div>

            <div class="col-md-8">


                <textarea name="includes">{{ $ayurvedapackages->includes}}</textarea>

            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-2">
            Excludes
            </div>

            <div class="col-md-8">


                <textarea name="excludes">{{ $ayurvedapackages->excludes}}</textarea>

            </div>
            </div>





 <div class="form-group row">
            <div class="col-md-2">
                <label for="chkshowinhomepage" class="active" > Show in home page </label>
                  </div>
                   <div class="col-md-4">

              <input  type="checkbox"  id="chkshowinhomepage"  name="showinhomepage" @if($ayurvedapackages->showinhomepage) checked @endif value="1" >
            <input type="hidden" name = "hiddenshowinhomepage" id="hiddenshowinhomepage"/>
                    </div>
                    </div>



<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control" value="{{ $ayurvedapackages->ordernumber }}" >
    </div>



</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> UPDATE  </button> </form>
</div>

   <form id="deleteForm{{ $ayurvedapackages->id }}" action="{{ route('ayurvedapackages.destroy', $ayurvedapackages->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class= "btn btn-danger" onclick="showDeleteConfirmation({{ $ayurvedapackages->id }})">DELETE</button>
</form>

<script>
    function showDeleteConfirmation(ayurvedapackagesId) {
        if (confirm('Are you sure you want to delete this package?')) {
            document.getElementById('deleteForm' + ayurvedapackagesId).submit();
        }
    }
    </script>


</div>
</div>





<script>

CKEDITOR.replace( 'PackageDetails' );
   CKEDITOR.replace( 'Treatment' );
    CKEDITOR.replace( 'includes' );
     CKEDITOR.replace( 'excludes' );


</script>

</div>
@endsection
