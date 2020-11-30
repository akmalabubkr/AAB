<?php
session_start();
$_SESSION['checkout'] = $checkout;
?>

<table>
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    <?php
    
foreach($_POST['ids'] as $id) {
    $title = $_POST['titles'][$id];
    $price = $_POST['prices'][$id];
    echo "  
    <tr>
      <td>$id</td>
      <td>$title<td>
      <td>$price</td>
    </tr>
    ";
  }

?>
    <tr>
        <td>Grand Total</td>
        <td></td>
        <td>RM</td>
    </tr>
</table>