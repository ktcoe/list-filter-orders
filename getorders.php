<?php

// Fill data on page load
$servername = "localhost";
$username = "ktcoe";
$password = "";
$dbname = "procook";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

$sql = "SELECT * FROM orders JOIN customers ON orders.orderCustomer = customers.customerNumber ORDER BY orders.orderNumber ASC";
$result = $connect->query($sql);

$orders = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $orderTmp = array();
        $orderTmp['orderNumber'] = $row["orderNumber"];
        $orderTmp['customerFirstname'] = $row["customerFirstname"];
        $orderTmp['customerLastname'] = $row["customerLastname"];
        $orderTmp['orderDate'] = $row["orderDate"];
        $orders[] = $orderTmp; 
    }
}

$connect->close();
?>