@extends('layouts.morgue')
@section('content')

<br><div class="row">
	<div class="col-lg-12">
  <h3>Admission Details</h3>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-5">

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

    
      
        


    <table  class="table table-condensed table-bordered table-responsive table-hover">


     <tr>
       <td>Admission #</td><td>{{$admission->admission_no}}</td>
     </tr>
      <tr>
       <td>Admission Date </td><td>{{$admission->date}}</td>
     </tr>
     <tr>
       <td>Admission Category </td><td>{{$admission->category}}</td>
     </tr>
     <tr>
       <td>Admission Status</td><td>{{$admission->status}}</td>
     </tr>
      <tr>
       <td>Person Name </td><td>{{$admission->name}}</td>
     </tr>
      <tr>
       <td>ID Number </td><td>{{$admission->id_number}}</td>
     </tr>
      <tr>
       <td>Certificate # </td><td>{{$admission->certificate_no}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
      <tr>
       <td>Place of Death </td><td>{{$admission->place_of_death}}</td>
     </tr>
      <tr>
       <td>Cause of Death </td><td>{{$admission->cause_of_death}}</td>
     </tr>
     <tr>
       <td>Next Of Kin </td><td>{{$admission->kin_name}}</td>
     </tr>
     <tr>
       <td>Next Of Kin Phone</td><td>{{$admission->kin_phone}}</td>
     </tr>
     <tr>
       <td>Next Of Kin ID Number</td><td>{{$admission->kin_id_number}}</td>
     </tr>


     <tr>
       <td>Date Released</td><td>{{$admission->date_released}}</td>
     </tr>

    </table>
 


  

</div>

@stop