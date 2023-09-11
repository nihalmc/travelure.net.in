@extends('layouts.admin')

@section('content')
<h3> Home slider </h3>

<h4>List home slider </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>


                <th>Image</th>
                <th>Title</th>
                <th>Second Title</th>
                <th>Order number</th>
                <th>Edit</th>


            </tr>
        </thead>

        <tbody>

            @foreach ($homeslider as $hslider)


             <tr>

                  <td><img src="{{ asset('storage/' . $hslider['image']) }}" height="100px" width ="100px" alt="" /> </td>
                <td>{{ $hslider->title }}</td>
                 <td>{{ $hslider->title2 }}</td>
                  <td>{{ $hslider->order_number }}</td>
              <th> <a href="{{ route('homesliders.edit',$hslider->id) }}"> Edit </th>


            </tr>
            @endforeach



            </tbody>

            </table>

    </div>
    @endsection
