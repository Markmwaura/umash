<html >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">

table {
  max-width: 100%;
  background-color: transparent;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #2226a9;
    color: white;
}
.table {
  width: 100%;
  margin-bottom: 2px;
}
hr {
  margin-top: 1px;
  margin-bottom: 2px;
  border: 0;
  border-top: 2px dotted #eee;
}

.hr1 {
  display: block;
    height: 1px;
    width: 300px;
    border: 0;
    border-top: 1px solid #000;
    padding: 0;
}

.hr2 {
  display: block;
    height: 1px;
    width: 300px;
    margin-top: -100px;
    border: 0;
    border-top: 1px solid #000;
    padding: 0;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 1.428571429;
  color: #333;
  background-color: #fff;
}



 @page { margin: 170px 30px; }
 .header { position: fixed; left: 0px; top: -150px; right: 0px; height: 150px;  text-align: center; }
 .content {margin-top: -100px; margin-bottom: -150px}
 .footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 50px;  }
 .footer .page:after { content: counter(page, upper-roman); }





</style>

<?php

function asMoney($value) {
  return number_format($value, 2);
}

?>

</head>

<body>

  <div class="header">
     <table >

      <tr>


       
        <td style="width:150px">

            <img src="{{ '../images/logo.png' }}" alt="{{ $organization->logo }}" width="100px"/>
    
        </td>

        <td>
        <strong>
          {{ strtoupper($organization->name)}}<br>
          </strong>
          {{ $organization->phone}} |
          {{ $organization->email}} |
          {{ $organization->website}}<br>
          {{ $organization->address}}
       

        </td>
        

      </tr>


      <tr>

        <hr>
      </tr>



    </table>
   </div>



<div class="footer">
     <p class="page">Page <?php $PAGE_NUM ?></p>
   </div>


	<div class="content" style='margin-top:0px;'>
   <div align="center"><strong>Purchases Report</strong></div><br>

    <table class="table table-bordered" border='0' cellspacing='0' cellpadding='0'>

      <tr>
        


        <th width='20'><strong># </strong></th>
        <th><strong>Order ID </strong></th>
        <th><strong>Customer Name </strong></th>
        <th><strong>Item </strong></th>
        <th align="center"><strong>Quantity </strong></th>
        <th align="center"><strong>Price </strong></th>
        <th align="center"><strong>Total Amount </strog></th>
        
      </tr>

     
      <?php $i =1; $total = 0; ?>
      @foreach($purchases as $purchases)
      
      <?php
      $total = $total + ($purchases->price * $purchases->quantity)

      ?>

      <tr>


       <td td width='20'>{{$i}}</td>
        <td> {{ $purchases->order_number }}</td>
        <td> {{ $purchases->client }}</td>
        <td> {{ $purchases->item }}</td>
        <td align = "center"> {{ $purchases->quantity }}</td>
        <td align = "right"> {{asMoney($purchases->price)}}</td>
        <td align = "right"> {{ asMoney($purchases->price * $purchases->quantity)}}</td>
         
        
        </tr>
      <?php $i++; ?>
   
    @endforeach



    <tr>
           <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><strong><font color="red">Grand Total</font></strong></td>
            <td align = "right"><strong>{{asMoney($total)}}</strong></td>


            

            
            
          
        </tr>

       

    </table>

<br><br>

   
</div>


</body>

</html>



