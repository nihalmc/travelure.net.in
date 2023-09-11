@extends('layouts.admin')

@section('content')

<h1>Add International Package Gallery Images</h1>

<form action="{{ route('internationalgalleries.submit') }}" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()" >

    @csrf

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image diemension should be 800X800 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>

  <div class ="form-group row">
                <div class="col-md-2">
            <label for="selectid">Select Package</label>
                </div>
                <div class="col-md-4">

                <select class="form-control" name="package_id" >
                 <option value=0>-----------------  select  ------------------</option>


                 @foreach($packages as $package)
                 <option value="{{$package->id }}">{{ $package->name }}</option>
                  @endforeach

                </select>
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



</div>

</form>
<br>
<h3> List Gallery Images </h3>
<form action="{{ route('internationalgalleries.listgallery') }}" method="post"enctype="multipart/form-data">
    @csrf
<div class ="form-group row">
    <div class="col-md-2">
<label for="selectid">Select Package</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="stud" >
      <option>----------SELECT----------</option>

      @foreach($packages as $interpackage)
      <option value="{{ $interpackage->id }}"@if(isset($selected_stud) && $selected_stud ==$interpackage) selected @endif>{{ $interpackage->name }}</option>
       @endforeach

      </select>



    </div>

    <div class="form-group">

    <div class="col-md-1/2">

    </div>

   <button type="submit" class="btn btn-primary"> SHOW  </button>

    </div>



    </div>
</div>

<br>
<h4>List Gallery by Package </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>
              <th>Package Name</th>
               <th>Image</th>
                <th>Order number</th>
                <th>Edit</th>


            </tr>
        </thead>

        <tbody>

            @foreach($gallery as $package)
            <tr>

                <td>
                    @if($package->interpackage)
                        {{ $package->interpackage->name }}
                    @else
                        No Package Name
                    @endif
                </td>
                <td><img src="{{ asset('storage/' . $package->image) }}" height="100px" width="100px" alt="" /></td>
                <td>{{ $package->ordernumber }}</td>
                <th><a href="{{ route('internationalgalleries.deletegallery', ['id' => $package->id]) }}"  onclick="return showDeleteConfirmation({{ $package->id }})">Delete</a></th>
            </tr>
            @endforeach


  <script>
            function showDeleteConfirmation(galleryId) {
                if (confirm('Are you sure you want to delete this gallery?')) {
                    // The user confirmed, allow the link to proceed
                    return true;
                }
                // The user canceled, prevent the link from executing
                return false;
            }
        </script>

            </tbody>

            </table>

    </div>

    @endsection

