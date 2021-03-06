@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>Cars</h3>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-12">

    @if (Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
     </div>
    @endif

    @if (Session::has('delete_message'))

      <div class="alert alert-danger">
      {{ Session::get('delete_message') }}
     </div>
    @endif

    <div class="panel panel-default">
      <div class="panel-heading">
          <a class="btn btn-info btn-sm" href="{{ URL::to('cars/create')}}">New Car</a>
        </div>
        <div class="panel-body">


    <table id="users" class="table table-condensed table-bordered table-responsive table-hover">


      <thead>

        <th>#</th>
        <th>Reg Number</th>
        <th>Make</th>
        <th>Driver</th>
        <th>Driver Contact</th>
        <th>Status</th>
        <th></th>

      </thead>
      <tbody>

        <?php $i = 1; ?>
        @foreach($cars as $car)

        <tr>

          <td> {{ $i }}</td>
          <td>{{ $car->reg_no }}</td>
          <td>{{ $car->make }}</td>
          <td>{{ $car->driver }}</td>
          <td>{{ $car->driver_contact }}</td>
          <td>{{ $car->status }}</td>
          <td>

                  <div class="btn-group">
                  <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Action <span class="caret"></span>
                  </button>
          
                  <ul class="dropdown-menu" role="menu">

                    

                    <li><a href="{{URL::to('cars/edit/'.$car->id)}}">Update</a></li>
                   
                    <li><a href="{{URL::to('car/delete/'.$car->id)}}"  onclick="return (confirm('Are you sure you want to delete this car?'))">Delete</a></li>
                    
                  </ul>
              </div>

                    </td>



        </tr>

        <?php $i++; ?>
        @endforeach


      </tbody>


    </table>
  </div>


  </div>

</div>

@stop