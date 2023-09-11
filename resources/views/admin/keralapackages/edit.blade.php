@extends('layouts.admin')

@section('content')

<h3> Edit Kerala Packages</h3>
<div class="row container" style="">
 <script  src="{{ asset('admin/ckeditor/ckeditor.js') }}" > </script>
<form action="{{ route('keralapackages.update' , $keralapackages->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')

<div class="form-group row">

    <div class ="col-md-2">
            Package Name
    </div>
    <div class = "col-md-4">
     <input type="Text" class="form-control" name ="name" value="{{ $keralapackages->name }}">

    </div>

</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
     Image diemension should be 400x400 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
        <img src="{{ asset('storage/' . $keralapackages->image) }}" height="100px" width ="100px" alt="" />
    </div>
</div>

<div class ="form-group row">
    <div class="col-md-2">
   <label for="selectid">Select Package Type</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="packagetype_id" >

        @foreach($package_types as $type)
        <option value="{{ $type->id }}" {{ $type->id == $keralapackages->packagetype_id ? 'selected' : '' }}>
            {{ $type->package_type }}
        </option>
        @endforeach



      </select>


    </div>
    </div>

        <div class="form-group row">

        <div class="col-md-2">
        Itenarary
        </div>

        <div class="col-md-8">

            <textarea name="Itenarary">{{ $keralapackages->Itenarary }}</textarea>

        </div>
        </div>



        <div class ="form-group row">

            <div class="col-md-2">
            Destination
            </div>

            <div class="col-md-4">
                <input type="text" name ="destination" class="form-control" value="{{ $keralapackages->destination }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Days
            </div>

            <div class="col-md-4">
                <input type="text" name ="days" class="form-control" value="{{ $keralapackages->days }}" >
            </div>

        </div>

        <div class ="form-group row">

            <div class="col-md-2">
            Class/Plan
            </div>

            <div class="col-md-4">
                <input type="text" name ="class" class="form-control" value="{{ $keralapackages->class }}" >
            </div>

        </div>

        <div class="form-group row">

            <div class="col-md-2">
            Includes
            </div>

            <div class="col-md-8">


                <textarea name="includes">{{ $keralapackages->includes }}</textarea>

            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-2">
            Excludes
            </div>

            <div class="col-md-8">


                <textarea name="excludes">{{ $keralapackages->excludes }}</textarea>

            </div>
            </div>

            <div class ="form-group row">
                <div class="col-md-2">
            <label for="selectid">Select Accomodation</label>
                </div>
                <div class="col-md-4">

                <select class="form-control" name="hotel_id" >

                    @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}"  {{ $hotel->id == $keralapackages->hotel_id ? 'selected' : '' }}>
                        {{$hotel->title }}
                    </option>
                    @endforeach


                </select>


                </div>
                </div>



 <div class="form-group row">
            <div class="col-md-2">
                <label for="chkshowinhomepage" class="active" >Show in home page </label>
                  </div>
                   <div class="col-md-4">

              <input  type="checkbox"  id="chkshowinhomepage"  name="showinhomepage"@if($keralapackages->showinhomepage) checked @endif value="1" >
            <input type="hidden" name = "hiddenshowinhomepage" id="hiddenshowinhomepage"/>
                    </div>
                    </div>



<div class ="form-group row">

    <div class="col-md-2">
       Order number
    </div>

    <div class="col-md-4">
        <input type="text" name ="ordernumber" class="form-control" value="{{ $keralapackages->ordernumber }}" >
    </div>



</div>


<div class="form-group">

    <div class="col-md-2">

    </div>
    <div class="col-md-2">
   <button type="submit" class="btn btn-primary">UPDATE</button></form>

   <form action="{{ route('keralapackages.destroy', $keralapackages->id) }}" method="POST" id="deleteForm{{ $keralapackages->id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $keralapackages->id }})">DELETE</button>
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

CKEDITOR.replace( 'Itenarary' );
   CKEDITOR.replace( 'includes' );
    CKEDITOR.replace( 'excludes' );


</script>
<script>
function FrmSub(){
 debugger;
if(document.getElementById('chkshowinhomepage').checked  == true){
    document.getElementById('hiddenshowinhomepage').value = "1";
    console.log('1');

}
else
{
    document.getElementById('hiddenshowinhomepage').value = "0";
    console.log('2');


}
}

</script>
</div>
@endsection
