@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>New Booking</h3>

<hr>
</div>	
</div>
<font color="red"><i>All fields marked with * are mandatory</i></font>

<div class="row">
	<div class="col-lg-5">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('bookings') }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Client <span style="color:red">*</span> :</label>
            <select class="form-control" name="client_id">
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
            @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="username">Car <span style="color:red">*</span> :</label>
            <select class="form-control" name="car_id">
            @foreach($cars as $car)
                @if($car->status == 'available')
                <option value="{{$car->id}}">{{$car->reg_no}}</option>
                @endif
            @endforeach
            </select>
        </div>


       <div class="form-group">
                        <label for="username">Date Out</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker3"   placeholder="" type="text" name="date_out" id="date_out" value="">
                        </div>
          </div>


          <div class="form-group">
                        <label for="username">Date Back</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker3"   placeholder="" type="text" name="date_back" id="date_back" value="">
                        </div>
          </div>

         <div class="form-group">
            <label for="username">Destination:</label>
            <input class="form-control" placeholder="" type="text" name="destination" id="destination" value="{{{ Input::old('destination') }}}">
        </div>

       
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create Booking</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop