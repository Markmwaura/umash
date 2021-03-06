@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>Update Admission</h3>

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

		 <form method="POST" action="{{{ URL::to('admissions/update/'.$admission->id) }}}" accept-charset="UTF-8">
   
    <fieldset>

         <div class="form-group">
            <label for="username">Category:</label>
          <select name="category" class="form-control">
          <option value="{{$admission->category}}">{{$admission->category}}</option>
          <option></option>
              <option value="general">General</option>
              <option value="VIP">VIP</option>
              <option value="presidential">Presidential</option>
          </select>
        </div>


      
         <div class="form-group">
            <label for="username">Name:</label>
            <input class="form-control" placeholder="" type="text" name="name" id="name" value="{{$admission->name}}">
        </div>

        <div class="form-group">
            <label for="username">ID Number:</label>
            <input class="form-control" placeholder="" type="text" name="id_number" id="id_number" value="{{$admission->id_number}}">
        </div>


        <div class="form-group">
            <label for="username">Certificate Number:</label>
            <input class="form-control" placeholder="" type="text" name="certificate_no" id="certificate_no" value="{{$admission->certificate_no}}">
        </div>

        <div class="form-group">
            <label for="username">Cause of Death:</label>
            <input class="form-control" placeholder="" type="text" name="cause_of_death" id="cause_of_death" value="{{$admission->cause_of_death}}">
        </div>


        <div class="form-group">
            <label for="username">Place of Death:</label>
            <input class="form-control" placeholder="" type="text" name="place_of_death" id="place_of_death" value="{{$admission->place_of_death}}">
        </div>


        <div class="form-group">
            <label for="username">Next Of Kin Name:</label>
            <input class="form-control" placeholder="" type="text" name="kin_name" id="kin_name" value="{{$admission->kin_name}}">
        </div>

        <div class="form-group">
            <label for="username">Next Of Kin Phone:</label>
            <input class="form-control" placeholder="" type="text" name="kin_phone" id="kin_phone" value="{{$admission->kin_phone}}">
        </div>

         <div class="form-group">
            <label for="username">Next Of Kin ID Number:</label>
            <input class="form-control" placeholder="" type="text" name="kin_id_number" id="kin_id_number" value="{{$admission->kin_id_number}}">
        </div>



       
        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Update Admission</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop