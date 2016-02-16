<?php session_start(); ?>

@extends('layouts.erp')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>Payment Details</h3>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-5">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('payments') }}}" accept-charset="UTF-8">
   
    <fieldset>
      <font color="red"><i>All fields marked with * are mandatory</i></font>
        
        <div class="form-group">
            <label for="username">Order Number</label><span style="color:red">*</span> :
           <select name="order" class="form-control">
                           <option>..................................Select Order....................................</option>
                           @foreach($erporders as $erporder)
                            <option value="{{$erporder->id}}">{{$erporder->order_number."-".$erporder->client->name}}</option>
                           @endforeach
                        </select>
        </div>

        <!-- <div class="form-group">
            <label for="username">Amount To Be Paid<span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="amounttopay" id="amounttopay" value="{{{ Input::old('amount') }}}">
        </div> -->

        <!-- <div class="form-group">
            <label for="username">Withstanding Amount :</label>
            <input class="form-control" placeholder="" type="text" name="withstandingamount" id="withstandingamount" value="{{{ Input::old('withstandingamount') }}}">
        </div> -->

        <div class="form-group">
            <label for="username">Payment <span style="color:red">*</span> :</label>
            <input class="form-control" placeholder="" type="text" name="amount" id="amount" value="{{{ Input::old('amount') }}}">
        </div>


        <!-- <div class="form-group">
            <label for="username">Balance :</label>
            <input class="form-control" placeholder="" type="text" name="balance" id="Balance" value="{{{ Input::old('Balance') }}}">
        </div> -->



        <div class="form-group">
            <label for="username">Payment Method</label><span style="color:red">*</span> :
           <select name="paymentmethod" class="form-control">
                           <option>......................Select Payment Method......................</option>
                           @foreach($paymentmethods as $paymentmethod)
                            <option value="{{$paymentmethod->id}}">{{$paymentmethod->name}}</option>
                           @endforeach
                        </select>
        </div>        

        
            <input class="form-control" placeholder="" type="hidden" readonly="readonly" name="received_by" id="received_by" value="{{{ Confide::user()->username}}}">
        
         <div class="form-group">
                        <label for="username">Date</label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input class="form-control datepicker"  readonly="readonly" placeholder="" type="text" name="pay_date" id="pay_date" value="{{date('d-M-Y')}}">
                        </div>
          </div>



          
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Accept Payment</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>

@stop