@extends('layouts.admin')

@section('content')

<h3>List Kalari Packages</h3>
<div class="row" style="margin-top:20px;">
    <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Destination</th>
                <th>Image</th>
                <th>Days</th>
                <th>Show in homepage</th>
                <th>Order number</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $peop)
            <tr>
                <td>{{ $peop->name }}</td>
                <td>@if($peop->Package_type)
                    {{$peop->Package_type->package_type }}
                @else
                    No Package type Name
                @endif</td>
                <td>{{ $peop->destination }}</td>
                <td><img src="{{ asset('storage/' . $peop->image) }}" height="100px" width="100px" alt="" /></td>
                <td>{{ $peop->days }}</td>
                <td>{{ $peop->showinhomepage }}</td>
                <td>{{ $peop->ordernumber }}</td>
                <td><a href="{{ route('kalaripackages.edit', $peop->id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
