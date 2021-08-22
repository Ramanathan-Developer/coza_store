<?php
session_start();
include ('../partials/connect.php');
$total = $_POST['total'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$customerid = $_SESSION['customerid'];
$sql = " INSERT INTO orders(customer_id,address,phone,total) VALUES('$customerid','$address','$phone','$total')";
$connect -> query($sql);


$sql2 = "SELECT id FROM orders order by id DESC limit 1";
$results = $connect->query($sql2);
$final=$results->fetch_assoc();
$orderid = $final['id'];

foreach($_SESSION['cart'] as $key => $value){
    $proid = $value['item_id'];
    $sql3 = "INSERT INTO order_details(order_id,product_id) VALUES('$orderid','$proid')";
    $connect -> query($sql3);
}
echo "<script>
alert('Order is Placed');
window.location.href='../index.php';
</script>";

unset($_SESSION['cart']);

?>