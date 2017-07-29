<?php
## Load Functions
require_once('include/functions.php');

## Load Products
$PRODUCT = file_to_array($PRODUCTS_FILE);

## Load user check to prevent direct page access
require_once('include/security.php');

## Empty cart, because order has been placed
empty_cart();
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

<!--Privacy-->
<div class="banner">
    <h2>Order Confirmation</h2>
</div>
<div class="first column full-width">
    <div class="column-form">
	<p>Your order has been confirmed.<br />Thanks for shopping at The Hobbit Shop.<br /><br /></p>
	<h3>Order Summary</h3>
        <?php
        $total = 0;
        ?>
        <?php
        foreach ($_SESSION['order'] as $product) {
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
                                } else if ($key == 'price') {
											echo "<div class='first'><span class='label'>Price:</span>\$"
											.number_format((float)$value, 2, '.', '')."</div>";
                                } else {
                                    echo "$value<br />";
                                }
                            }?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <?php
			echo "<div class='first'><span class='label'><br />Total Price:</span>
						<br />\$".number_format((float)$total, 2, '.', '')."</div>
						<div class='first'><br /><a href='logout.php'>Logout of your account</a></div>";
        ?>
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