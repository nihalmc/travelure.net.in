@extends('layouts.admin')

@section('content')

<h1>Add Kerala Packages Gallery Images</h1>

<form action="{{ route('packagegalleries.submit') }}" method="post" enctype="multipart/form-data" >

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

                    @foreach($keralapackages as $keralapackage)
              <option value="{{$keralapackage->id }}">{{ $keralapackage->name }}</option>
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




    <h4>List Gallery by Package</h4>
    <div class="row" style="margin-top:20px;">
        <!-- Your form and dropdown code here -->

        <form action="{{ route('packagegalleries.listkeralagallery') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="stud">Select Package</label>
                </div>
                <div class="col-md-4">
                    <select class="form-control" name="stud">
                        <option value="">----------SELECT----------</option>

                        @foreach($keralapackages as $keralapackage)
                        <option value="{{ $keralapackage->id }}"@if(isset($selected_stud) && $selected_stud == $keralapackage) selected @endif>{{ $keralapackage->name }}</option>
                         @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <div class="col-md-1/2"></div>
                    <button type="submit" class="btn btn-primary">SHOW</button>
                </div>
            </div>
        </form>

        @if(isset($packagegalleries))

    <h4>List Gallery by Package</h4>
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

                    @foreach($packagegalleries as $package)
                        <tr>

                            <td>
                                @if($package->keralapackage)
                                    {{ $package->keralapackage->name }}
                                @else
                                    No Package Name
                                @endif
                            </td>
                            <td><img src="{{ asset('storage/' . $package->image) }}" height="100px" width="100px" alt="" /></td>
                            <td>{{ $package->ordernumber }}</td>
                            <th>
                                <a href="{{ route('packagegalleries.deletekeralagallery', ['id' => $package->id]) }}"
                                   class="btn btn-danger"
                                   onclick="return showDeleteConfirmation({{ $package->id }})">
                                    Delete
                                </a>
                            </th>
                        </tr>
                        @endforeach

                </tbody>
            </table>
            <script>
                function showDeleteConfirmation(packageId) {
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




