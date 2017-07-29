<?php

## Load Functions
require_once('include/functions.php');

## Load Products
$PRODUCT = file_to_array($PRODUCTS_FILE);

## Load user check to prevent direct page access
require_once('include/security.php');

## Add
if (isset($_GET['submit']) && $_GET['submit'] == 'add') {
    $product = $PRODUCT[$_GET['id']];
    add($product);
    header('Location: cart.php');
}

## Remove
if (isset($_GET['submit']) && $_GET['submit'] == 'remove') {
    remove($_GET['id']);
    header('Location: cart.php');
}

?>
<?php print "<?xml version=\"1.0\" encoding=\"utf-8\"?>" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--author-->
<?php
## Include author.php
require_once('include/author.php');
?>
   <head>
       <!--head-->
       <?php
       ## Determines which current page link is to be highlighted
       if(!isset($current)) { $current = basename(__FILE__, '.php'); }
       ## Include head.php
       require_once('include/head.php');
       ?>
   </head>
   <body>

<!--header-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
## Include header.php
require_once('include/header.php');
?>
<!--****************************************************************************
   Cart
   *****************************************************************************-->
<?php
$empty = false;
## Determine if cart is empty
if (count($_SESSION['cart']) == 0) {
    $empty = true;
}
?>
<div class="banner">
    <h2>Shopping Cart</h2>
</div>
<!--end of banner-container-->

<div class="first column full-width">
    <div class="column-form">
        <?php
        $total = 0;
        ?>
        <?php
        foreach ($_SESSION['cart'] as $product) {
            ?>
            <div class='product'>
                <ul>
                    <?php
                    $price = $product['price'] * $product['qty'];
                    $total += $price;
                    ?>
                    <?php foreach ($product as $key => $value) { ?>
                        <li>

                            <?php
                            // id and category are not to be output to shop page
                            if (!($key == 'id' || $key == 'category' || $key == 'desc')) {
                                if ($key == 'name') {
                                    // can style item name differently
                                    echo "<div class='first'><span class='bold label wide-label'>$value</span></div>";
                                } else if ($key == 'qty') {
									echo "<div class='first'><span class='label'>Quantity:</span></div>$value";
									echo "<div class='qty-buttons'><a class='minus' href=\"?submit=remove&id=".$product['id']. "\">-</a>
									<a class='plus' href=\"?submit=add&id=".$product['id']. "\">+</a></div></div>";
                                } else if ($key == 'price') {
											echo "<div class='first'><span class='label'>Price:</span>\$".number_format((float)$value, 2, '.', '')."</div>";
                                } else {
                                    echo "$value<br />";
                                }
                            }?>
                        </li>
                    <?php } ?>
                </ul>
        <?php } ?>
        <?php
        if ($empty) {
            echo "<p>Your shopping cart is empty</p>
			<div class='first'><br /><a href='shop.php'>Back to Shop</a></div>";
        } else {
			echo "<div class='first'><span class='label'><br />Total Price Payable:</span>
						<br />\$".number_format((float)$total, 2, '.', '')."</div>
						<div class='first'><br /><a href='checkout.php'>Proceed to Checkout</a></div>";
        }?>
    </div>
    <!--end of column-form-->
</div>
<!--end of column1-->

<!--footer-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
## Include footer.php
require_once('include/footer.php');
?>
</body>
</html>