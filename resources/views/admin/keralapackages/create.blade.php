@extends('layouts.admin')

@section('content')

<h1>Add Package</h1>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('keralapackages.store') }}" method="post" enctype="multipart/form-data">
    @csrf

<div class="form-group row">

    <div class ="col-md-2">
             Name Of Package
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name">
    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 400x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">
    </div>
</div>

<div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Package Type</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="packagetype_id" >

       <option value=0>-----------------  select  ------------------</option>

       @foreach($package_types as $type)
       <option value="{{ $type->id }}">{{ $type->package_type }}</option>
       @endforeach

      </select>
    </div>
    </div>

        <div class="form-group row">

        <div class="col-md-2">
        Itenarary
        </div>

        <div class="col-md-8">

            <textarea name="Itenarary"></textarea>

        </div>
        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Destinations
            </div>

            <div class="col-md-4">
                <input type="text" name ="destination" class="form-control">
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Days
            </div>

            <div class="col-md-4">
                <input type="text" name ="days" class="form-control">
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Class/Plan
            </div>

            <div class="col-md-4">
                <input type="text" name ="class" class="form-control">
            </div>

        </div>


            <div class="form-group row">

            <div class="col-md-2">
            Incudes
            </div>

            <div class="col-md-8">


                <textarea name="includes"></textarea>

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

            <div class ="form-group row">
                <div class="col-md-2">
            <label for="selectid">Select Accomodation</label>
                </div>
                <div class="col-md-4">

                <select class="form-control" name="hotel_id" >
                 <option value=0>-----------------  select  ------------------</option>

                 @foreach ($hotels as $hotel)
                 <option value="{{ $hotel->id }}">{{ $hotel->title }}</option>
                 @endforeach


                </select>
                </div>
           </div>



                 <div class="form-group row">
            <div class="col-md-2">
                <label for="chkshowinhomepage" class="active" > Show in home page </label>
                  </div>
                   <div class="col-md-4">

             <input type="checkbox"  id="chkshowinhomepage"  name="showinhomepage"  value="1">
            <input type="hidden" name="hiddenshowinhomepage" id="hiddenshowinhomepage"/>
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

  CKEDITOR.replace( 'Itenarary' );
   CKEDITOR.replace( 'includes' );
    CKEDITOR.replace( 'excludes' );
    </script>





</div>

@endsection
