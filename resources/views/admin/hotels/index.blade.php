@extends('layouts.admin')

@section('content')
<h3> Hotels/Resorts </h3>


<form action="{{ route('hotels.listbydestination') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class ="form-group row">
    <div class="col-md-2">
<label for="selectid">Select destination</label>
    </div>
    <div class="col-md-4">

      <select class="form-control" name="stud" >

      <option>----------SELECT----------</option>
      @foreach($destinations  as $destination )
        <option value="{{  $destination->id }}" @if(isset($selected_stud) && $selected_stud == $destination) selected @endif>{{ $destination->name }}</option>
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






@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


@if(isset($hotels))

<h4>List hotel </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>

            <th>Hotel Name</th>
            <th>Room Type</th>
                <th>Image</th>
                <th>Description</th>
                <th>Destination</th>
                <th>Order number</th>
                <th>Edit</th>


            </tr>
        </thead>

        <tbody>

            @foreach($hotels as $peop)


             <tr>

               <td>{{ $peop->title }}</td>
              <td>{{ $peop->roomtype}}</td>

              <td>
                <img src="{{ asset('storage/' . $peop->image) }}" height="100px" width="100px" alt="" />
            </td>

                <td>{{ $peop->text }}</td>


        <td>
            @if($peop->destination)
                {{ $peop->destination->name }}
            @else
                No Destination
            @endif
        </td>


                  <td>{{ $peop->ordernumber }}</td>

              <th><a  href="{{ route('hotels.edit', $peop->id) }}"> Edit </th>

            </tr>

            @endforeach


            </tbody>

            </table>

    </div>
    @endif

    @endsection
