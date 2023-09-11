@extends('layouts.admin')

@section('content')

<h3> Edit Kerala Houseboats Packages</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('houseboatspackages.update' , $houseboatspackages->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')
<div class="form-group row">

    <div class ="col-md-2">
            Package Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="hotelname" value="{{ $houseboatspackages->hotelname }}">

    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 400x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $houseboatspackages->image) }}" height="100px" width ="100px" alt="" />
    </div>
</div>

<div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Package Type</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="packagetype_id" >

        @foreach($houseboatspackagestypes as $type)
        <option value="{{ $type->id }}" {{ $type->id == $houseboatspackages->packagetype_id ? 'selected' : '' }}>
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

            <textarea name="packagedetails">{{ $houseboatspackages->packagedetails }}</textarea>

        </div>
        </div>

        <div class="form-group row">

        <div class="col-md-2">
        Rooms & Details
        </div>

        <div class="col-md-8">

            <textarea name="roomdetails">{{ $houseboatspackages->roomdetails }}</textarea>

        </div>
        </div>



        <div class ="form-group row">

            <div class="col-md-2">
            Destination
            </div>

            <div class="col-md-4">
                <input type="text" name ="destination" class="form-control" value="{{ $houseboatspackages->destination }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Days
            </div>

            <div class="col-md-4">
                <input type="text" name ="days" class="form-control" value="{{ $houseboatspackages->days }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Class/Plan
            </div>

            <div class="col-md-4">
                <input type="text" name ="class" class="form-control" value="{{ $houseboatspackages->class }}" >
            </div>

        </div>

        <div class="form-group row">

            <div class="col-md-2">
            Facilities
            </div>

            <div class="col-md-8">


                <textarea name="facilities">{{ $houseboatspackages->facilities }}</textarea>

            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-2">
            Excludes
            </div>

            <div class="col-md-8">


                <textarea name="excludes">{{ $houseboatspackages->excludes }}</textarea>

            </div>
            </div>

            <div class ="form-group row">
                <div class="col-md-2">
            <label for="selectid">Select Accomodation</label>
                </div>
                <div class="col-md-4">

                <select class="form-control" name="hotel_id" >

                    @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}"{{ $hotel->id == $houseboatspackages->hotel_id ? 'selected' : '' }}>
                        {{$hotel->title }}</option>
                    @endforeach



                </select>


                </div>
                </div>



 <div class="form-group row">
            <div class="col-md-2">
                <label for="chkshowinhomepage" class="active" > Show in home page </label>
                  </div>
                   <div class="col-md-4">

              <input  type="checkbox"  id="chkshowinhomepage"  name="showinhomepage" @if($houseboatspackages->showinhomepage) checked @endif value="1"  >
            <input type="hidden" name = "hiddenshowinhomepage" id="hiddenshowinhomepage"/>
                    </div>
                    </div>



<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control" value="{{ $houseboatspackages->ordernumber }}" >
    </div>



</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary"> UPDATE  </button> </form>

   <form action="{{ route('houseboatspackages.destroy', $houseboatspackages->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class= "btn btn-danger" >DELETE</button>
</form>

</div>

</div>
</div>
<script>

CKEDITOR.replace( 'packagedetails' );
   CKEDITOR.replace( 'roomdetails' );
    CKEDITOR.replace( 'facilities' );
    CKEDITOR.replace( 'excludes' );


</script>

</div>
@endsection
