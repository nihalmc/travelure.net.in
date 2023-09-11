@extends('layouts.admin')

@section('content')

<h1>Add Ayurveda package Gallery Images</h1>

<form action="{{ route('ayurvedapackagegalleries.submit') }}" method="post" enctype="multipart/form-data"onSubmit="return FrmSub()" >

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

                 @foreach ($ayurvedapackages as $ayurvedapackage)
                 <option value="{{ $ayurvedapackage->id }}">
                     {{$ayurvedapackage->name}}</option>
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
<form action="{{ route('ayurvedapackagegalleries.listgallery') }}" method="post"enctype="multipart/form-data">
    @csrf

<div class ="form-group row">
    <div class="col-md-2">
<label for="selectid">Select Package</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="stud" >

      <option>----------SELECT----------</option>
      @foreach ($ayurvedapackages as $ayurvedapackage)
      <option value="{{ $ayurvedapackage->id }}"@if(isset($selected_stud) && $selected_stud == $ayurvedapackage) selected @endif>
          {{$ayurvedapackage->name}}</option>
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
</form>

<br>

@if(isset($ayurvedapackagegalleries))
    <h4>List Gallery by Package</h4>
    <div class="row" style="margin-top:20px;">
        <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Image</th>
                    <th>Order number</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ayurvedapackagegalleries as $peop)
                    <tr>
                        <td>
                            @if($peop->ayurvedapackage)
                            {{ $peop->ayurvedapackage->name}}
                        @else
                            No Package Name
                        @endif
                        </td>
                        <td><img src="{{ asset('storage/' . $peop->image) }}" height="100px" width="100px" alt="" /></td>
                        <td>{{ $peop->ordernumber }}</td>
                        <th>
                            <a href="{{ route('ayurvedapackagegalleries.deletegallery', ['id' => $peop->id]) }}"
                               onclick="return showDeleteConfirmation({{ $peop->id }})">
                                Delete
                            </a>
                        </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
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

    </div>
@endif

    @endsection

