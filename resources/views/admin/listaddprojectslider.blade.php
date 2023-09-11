@extends('layouts.admin')

@section('content')
<h3> Project slider </h3>

<h4>List project slider </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>

            <th>Project Name</th>
                <th>Image</th>
                <th>Order_number</th>
                <th>Title</th>

                <th>Edit</th>


            </tr>
        </thead>

        <tbody>


             <tr>

                <td></td>

                  <td><img src="/uploads/projectslider/" height="100px" width ="100px" alt="" /> </td>
                  <td></td>
                  <td></td>

             <th> <a href="/Projectslider/edit/"> Edit </th>


            </tr>




            </tbody>

            </table>

    </div>
    @endsection
