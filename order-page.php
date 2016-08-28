<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="scripts.js"></script>
<?php include('getorders.php'); ?>
</head>

<body>
    
<div id="main">
<h1>Orders</h1>

<form>
  Start Date <input type="date" id="start" name="start" value="dd/mm/yyyy">
  End Date <input type="date" id="end" name="end" value="dd/mm/yyyy">
  <input id="submit" type="submit" value="Submit">
</form>
<div id="errortext"></div>

<table>
  <tr class="table-header">
    <th>Order Number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date</th>
  </tr>
 

  <?php
  foreach($orders as $order) {
        //var_dump($order);
        //die('dead');
    ?>
      <tr>
        <td class="order-details"><?php echo $order['orderNumber']; ?></td>
        <td><?php echo $order['customerFirstname']; ?></td>
        <td><?php echo $order['customerLastname']; ?></td>
        <td><?php echo $order['orderDate']; ?></td>
      </tr>

    <?php
    }
  ?>
</table>

</div><!-- End of main -->

<div id="popup">
 <button id="close" type="button">Close</button>
 
<h2>Customer Details</h2>
<table id="namedetails">
  <tr>
    <td class="table-header">First Name:</td>
    <td>Test</td>
  </tr>
  <tr>
    <td class="table-header">Last Name:</td>
    <td>Test</td>
  </tr>
</table>

<h2>Products</h2>
<table>
  <tr class="table-header">
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
  </tr>
  <tr>
    <td>Test</td>
    <td>Test</td>
    <td>Test</td>
    <td>Test</td>
  </tr>
</table>

<table id="total">
    <tr>
        <td class="table-header">Total:</td>
        <td></td>
    </tr>
</table>

</div><!-- end of popup div -->

</body>

</html>