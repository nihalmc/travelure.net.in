@extends('layouts.admin')

@section('content')

<h3>List Students Packages</h3>
<div class="row" style="margin-top: 20px;">
    <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Destination</th>
                <th>Image</th>
                <th>Days</th>
                <th>Accommodation</th>
                <th>Show in homepage</th>
                <th>Order number</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($packages as $package)
            <tr>
                <td>{{ $package->name }}</td>

                <td>@if($package->packagetype)
                    {{ $package->packagetype->package_type }}
                @else
                    No Package type Name
                @endif</td>
                <td>{{ $package->destination }}</td>
                <td>
                    <img src="{{ asset('storage/' . $package->image) }}" height="100px" width="100px" alt="" />
                </td>
                <td>{{ $package->days }}</td>
                <td>{{ $package->accomodation->title }}</td>
                <td>{{ $package->showinhomepage }}</td>
                <td>{{ $package->ordernumber }}</td>
                <td><a href="{{ route('studentspackages.edit' , $package->id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
