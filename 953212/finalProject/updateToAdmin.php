<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "SteakJustice") or die("Can't MySQL sever");
$sql = "SELECT * FROM Customers 
WHERE noCustomer = '" . $_SESSION['ID'] . "' ";
$objOrders = mysqli_query($link, $sql);
$orderResult = mysqli_fetch_array($objOrders);

  $sql2 = "UPDATE Customers
  SET status = 'A'
  WHERE noCustomer = '".$_POST['upgrade']."' ";
  $objQuery2 = mysqli_query($link, $sql2);
?>
<script language = "javascript">
    window.location.href='profileAdmin.php';
</script>

