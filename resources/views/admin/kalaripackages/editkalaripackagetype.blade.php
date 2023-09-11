@extends('layouts.admin')

@section('content')

<h1>Edit Kalari Package Type</h1>
<h3>Edit </h3>
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<form action="{{ route('kalaripackage_type.update', $package_types->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="form-group row">
    <div class="col-md-2">
        Kalari Package Type Title
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="package_type" value="{{ $package_types->package_type }}">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        Image
    </div>
    <div class="col-md-4">
        <input type="file" class="form-control" name="image">
        <img src="{{ asset('storage/' . $package_types->image) }}" height="100px" width="100px" alt="">
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        Description
    </div>
    <div class="col-md-10">
        <textarea name="text">{{ $package_types->text }}</textarea>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        Order Number
    </div>
    <div class="col-md-4">
        <input type="text" name="ordernumber" class="form-control" value="{{ $package_types->ordernumber }}">
    </div>
</div>

<div class="form-group">
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary"> Update </button>

</form>
<a class="btn btn-danger" onclick="deletepackagetype({{ $package_types->id }})">DELETE</a>
</div>

</div>
</div>

<script>
    function deletepackagetype(id) {
        if (confirm("Are you sure you want to delete this Package Type?")) {
            window.location = "{{ url('/Packagetype/deletekalaripackagetype') }}/" + id;
        }
    }
</script>

<script>
    CKEDITOR.replace('text');
</script>


@endsection
