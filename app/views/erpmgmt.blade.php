@extends('layouts.erp')
@section('content')
<br><br/>
<div class="row">
                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('items/create')}}">
                          <i class="fa fa-barcode fa-2x"></i>
                          <div>New Item</div>
                          
                        </a>
                      </div>

                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('clients/create')}}">
                          <i class="fa fa-user fa-2x"></i>
                          <div>New Client</div>
                          
                        </a>
                      </div>


                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{URL::to('salesorders/create')}}">
                          <i class="glyphicon glyphicon-tasks fa-2x"></i>
                          <div>New Sale</div>
                          
                        </a>
                      </div>

                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('purchaseorders/create')}}">
                          <i class="glyphicon glyphicon-list fa-2x"></i>
                          <div>New Purchase</div>
                          
                        </a>
                      </div>
                      
                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('payments/create')}}">
                          <i class="glyphicon glyphicon-file fa-2x"></i>
                          <div>New Payment</div>
                          
                        </a>
                      </div>

                      <div class="col-md-2">
                        <a class="btn btn-default btn-icon input-block-level" href="{{ URL::to('stocks/create')}}">
                          <i class="glyphicon glyphicon-random fa-2x"></i>
                          <div>Receive Stock</div>
                          
                        </a>
                      </div>


                       

                      
                    </div>


<br><br>
<hr>
<div class="row">
              						
<div class="col-lg-2"></div>
	<div class="col-lg-2">

		

		<br><br>
		<img src="{{asset('images/ourlogo.png')}}">
    
	</div>


</div>

@stop