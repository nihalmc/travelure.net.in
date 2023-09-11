@extends('layouts.admin')

@section('content')


<h1>Add Testimonils</h1>

<form action="{{ route('testimonials.store')}}" method="post" enctype="multipart/form-data" >


    @csrf


<div class ="form-group row">

    <div class="col-md-2">
        Name
    </div>

    <div class="col-md-4">
        <input type="text" name ="name" class="form-control">
    </div>



</div>
<div class ="form-group row">

    <div class="col-md-2">
      Comment
    </div>

    <div class="col-md-4">
        <input type="text" name ="comment" class="form-control">
    </div>



</div>

<div class ="form-group row">
    <div class="col-md-2">
    Image
    </div>
    Image diemension should be 2190x1461 pixels
    <div class="col-md-4">
        <input type="file" class="form-control" name="image" >
    </div>

</div>

<div class ="form-group row">

    <div class="col-md-2">
      Designation - Companyname
    </div>

    <div class="col-md-4">
        <input type="text" name ="companyname" class="form-control">
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
<br>
<h4>List </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>


                <th>Image</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Designation - Company Name</th>
                <th>DELETE</th>


            </tr>
        </thead>

        <tbody>
            @foreach ($testimonials as $home)
            <tr>
                <td><img src="{{ asset('storage/' . $home->image) }}" height="100px" width="100px" alt=""></td>
                <td>{{ $home->name }}</td>
                <td>{{ $home->comment }}</td>
                <td>{{ $home->companyname }}</td>

                <td>
                    <form id="deleteForm{{ $home->id }}" action="{{ route('testimonials.destroy', $home->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="showDeleteConfirmation({{ $home->id }})">DELETE</button>
                    </form>
                </td>

            </tr>
        @endforeach

            </tbody>

            </table>
            <script>
                function showDeleteConfirmation(testimonialId) {
                    if (confirm('Are you sure you want to delete this testimonial?')) {
                        document.getElementById('deleteForm' + testimonialId).submit();
                    }
                }
            </script>


    </div>
    @endsection

