<?php 
session_start(); ?>

<form name="cart" id="cart" action="checkout.php" method='post'>
    <h1>Your Cart:</h1>
    <table>
        <tr>
            <td><span class='title'>ID</span></td>
            <td><span class='title'>Product</span></td>
            <td><span class='title'>Price</span></td>
        </tr>
        <?php

    $total = 0;

foreach ( $_SESSION['cart'] = $cartid ) {
     ?>
        <tr>
            <td width="20%">
                <?php echo $cartid; ?> <input type="hidden" name="id[]"
                value="<?php echo $cartid; ?>">
            </td>
            <td width="100%">
                <?php echo $title?>
                <input type="hidden" name="title[]" value="<?php echo $title; ?>">
            </td>
            <td width="100%">RM<?php echo $price;?>
                <input type="hidden" name="prices[]" value="<?php echo $price; ?>">
            </td>
        </tr>
        <?php
    $total += $price;
    $tax = $price*0.6;
    $grandtotal = number_format ($tax,2)+$price;}

    ?>

        <tr>
            <td>Total</td>
            <td></td>
            <td>RM<?php echo $total; ?></td>
        </tr>

        <tr>
            <td>Total</td>
            <td></td>
            <td>RM<?php echo $tax; ?></td>
        </tr>

        <tr>
            <td>Total</td>
            <td></td>
            <td>RM<?php echo $grandtoal; ?></td>
        </tr>

    </table>
    <input type="submit" value="Buy" class="submit-button" />
</form>


