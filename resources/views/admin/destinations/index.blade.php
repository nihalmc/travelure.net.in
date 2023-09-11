@extends('layouts.admin')

@section('content')
<h3>List Destination </h3>
<div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('destination.create') }}">Create list</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
                <tr>


                 <th>Name</th>
                  <th>Image</th>

                   <th>Order number</th>
                    <th>Show in home page</th>
                <th>Edit</th>


                </tr>
        </thead>

        <tbody>

		@foreach ($destination as $cat)
             <tr>

                <td>{{ $cat->name }}</td>
                <td> <img src="{{ asset('storage/' . $cat['image']) }}" height="100px" width ="100px" alt="" /> </td>

                   <td>{{ $cat->ordernumber }}</td>
                    <td>{{ $cat->showinhomepage }}</td>


              <th> <a href="{{ route('destination.edit',$cat->id) }}"> Edit </th>

            </tr>



         @endforeach

            </tbody>

            </table>

    </div>

    @endsection

