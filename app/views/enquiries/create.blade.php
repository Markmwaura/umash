@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>New Enquiry</h3>

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

		 <form method="POST" action="{{{ URL::to('enquiries') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Client Name <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="name" id="name" value="{{{ Input::old('name') }}}">
        </div>

         <div class="form-group">
            <label for="username">Subject:<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="subject" id="subject" value="{{{ Input::old('subject') }}}">
        </div>

       

        <div class="form-group">
            <label for="username">Description:</label>
           <textarea class="form-control" name="description"></textarea>
        </div>

        
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create Enquiry</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop