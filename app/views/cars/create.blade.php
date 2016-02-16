@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>New Car</h3>

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

		 <form method="POST" action="{{{ URL::to('cars') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Registration Number <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="reg_no" id="reg_no" value="{{{ Input::old('reg_no') }}}">
        </div>

         <div class="form-group">
            <label for="username">Make:</label>
            <input class="form-control" placeholder="" type="text" name="make" id="make" value="{{{ Input::old('make') }}}">
        </div>

        <div class="form-group">
            <label for="username">Driver Name:</label>
            <input class="form-control" placeholder="" type="text" name="driver" id="driver" value="{{{ Input::old('driver') }}}">
        </div>

        <div class="form-group">
            <label for="username">Driver Contact:</label>
            <input class="form-control" placeholder="" type="text" name="driver_contact" id="driver_contact" value="{{{ Input::old('driver_contact') }}}">
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create Car</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop