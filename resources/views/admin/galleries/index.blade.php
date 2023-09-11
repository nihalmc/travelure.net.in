@extends('layouts.admin')

@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<h1>Add  Hotel Gallery Images</h1>

<form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
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
            <label for="selectid">Select Hotel</label>
                </div>
                <div class="col-md-4">

                <select class="form-control" name="hotels_id" >

                 <option value=0>-----------------  select  ------------------</option>

                 @foreach ($hotels as $hotel)
                 <option value="{{ $hotel->id }}">{{ $hotel->title }}</option>
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


<h3> List Gallery Images </h3>

<form action="{{ route('galleries.listByHotel') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-md-2">
            <label for="selectid">Select Hotel</label>
        </div>
        <div class="col-md-4">
            <select class="form-control" name="stud">
                <option>----------SELECT----------</option>
                @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}" @if(isset($selectedHotelId) && $selectedHotelId == $hotel->id) selected @endif>{{ $hotel->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <div class="col-md-1/2">
            </div>
            <button type="submit" class="btn btn-primary"> SHOW </button>
        </div>
    </div>
</form>

@if(isset($galleries))

<h4>List Gallery by Hotel </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>
              <th>Hotel Name</th>
               <th>Image</th>
                <th>Order number</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($galleries as $peo)





             <tr>

                <td>
                    @if ($peo->hotel)
                        {{ $peo->hotel->title }}
                    @else
                        No Hotels
                    @endif
                </td>


                  <td><img src="{{ asset('storage/' . $peo->image) }}" height="100px" width ="100px" alt="" /> </td>

                  <td>{{ $peo->ordernumber }}</td>

              <th>
                <form id="deleteForm{{ $peo->id }}" action="{{ route('galleries.destroy', $peo->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $peo->id }})">DELETE</button>
                </form>

            </th>

            </tr>
            @endforeach



            </tbody>

            </table>
            
            <script>
                function showDeleteConfirmation(galleryId) {
                    if (confirm('Are you sure you want to delete this gallery?')) {
                        document.getElementById('deleteForm' + galleryId).submit();
                    }
                }
            </script>


    </div>
    @endif

    @endsection

