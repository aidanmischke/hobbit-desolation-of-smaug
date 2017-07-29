<?php

## Load Test Harness
//require_once('_test-harness/test-harness.php');

## Load Functions
require_once('include/functions.php');

## Load Products
$PRODUCT = file_to_array($PRODUCTS_FILE);

## Load user check to prevent direct page access
require_once('include/security.php');

## Checkout
if (isset($_POST['checkout_submit']) && $_POST['checkout_submit'] == 'Process Order') {

    ## Sanitize
    $order = array();
    $firstname = trim($_POST["firstname"]);
    $firstname = check($firstname);
    $lastname = trim($_POST["lastname"]);
    $lastname = check($lastname);
	$email = trim($_POST["email"]);
    $email = check($email);
	
    $creditcard = trim($_POST["field"]);
    $creditcard = check($field);
	$expirydate = trim($_POST["expirydate"]);
    $expirydate = check($expirydate);
	
	$address = trim($_POST["address"]);
    $address = check($address);
	$city = trim($_POST["city"]);
    $city = check($city);	
	$state = trim($_POST["state"]);
    $state = check($state);		
	$country = trim($_POST["country"]);
    $country = check($country);	
	
	## Fill order array
	$order = array();
	$order['firstname'] = $firstname;
	$order['lastname'] = $lastname;
	$order['email'] = $email;
	$order['creditcard'] = $creditcard;
	$order['expirydate'] = $expirydate;
	$order['address'] = $address;
	$order['city'] = $city;	
	$order['state'] = $state;
	$order['country'] = $country;	

	/*
    ## Check For Errors
    $error = array();
    foreach ($user as $key => $value) {
        if ( ! $value) {
            $error[$key] = "$key is empty.";
        }
    }

    ## Attempt to write order to file if no errors
    if (count($error) == 0) {
        if(array_to_file($order)) {
            header('Location: order-summary.php');
        } else {
            $error['msg'] = 'Unable to login.<br />Invalid Username/Password.';
        }
    }
	*/
	// ADD ERROR CHECKING for inputs
	
	// add try/catch
		
	// display order copy on order-summary page
	$_SESSION['order'] = $_SESSION['cart'];

	$orders = array();
	$orders[0] = $order;
	
	/*
	Both the customer details and the ordered items are in same file.
	Update to separate files with some form of linkage. i.e. ID number.
	*/
	
	// write customer to file
	array_to_file($orders, $ORDERS_FILE);	
	// write order to file
	array_to_file($_SESSION['order'], $ORDERS_FILE);

	// remove all items from cart
	empty_cart();
	// go to summary
	header('Location: order-summary.php');
	
}
?>
<?php print "<?xml version=\"1.0\" encoding=\"utf-8\"?>" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
	     <script>
	    $( function() {
      $("input[type='checkout_submit']").prop("disabled", true); // disable the submit button
      $("input.credit_card_expiry").formance("format_credit_card_expiry") // setup the formatter
                             .on( 'keyup change blur', function (event) { // setup the event listeners to validate the field whenever the user takes an action
                               if ( $(this).formance('validate_credit_card_expiry') )
                                 $("input[type='checkout_submit']").prop("disabled", false); // enable the submit button if valid phone number
                               else
                                 $("input[type='checkout_submit']").prop("disabled", true); // disable the submit button if invalid phone number
                             });
    });
</script>
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
   Checkout
   *****************************************************************************-->
<div id='cart'>
    <div class="banner">
        <h2>Checkout</h2>
    </div>
    <!--end of banner-container-->

    <!-- DELETE script src in body-->
    <div class="first column full-width">
	
	
	
	
	
	<?php
	print_r2($order);
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
        <div class="column-form">
            <h3>Details</h3>
            <form name="checkout_form" id="checkout_form" method="post" action="">
                <div class="first">
                    <div><span class="label">First Name:</span><input name="firstname" id="firstname" type="text"
                                                                      value="<?php echo $_SESSION['user']['firstname']; ?>"/></div>
                    <div class="error" id="firstnameError"> <?php if (isset($code) && $code == 1) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Last Name:</span><input name="lastname" id="lastname" type="text"
                                                                     value="<?php echo $_SESSION['user']['lastname']; ?>"/></div>
                    <div class="error" id="lastnameError"> <?php if (isset($code) && $code == 2) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Email:</span><input name="email" id="email" type="text"
                                                                 value="<?php echo $_SESSION['user']['email']; ?>"/></div>
                    <div class="error" id="emailError"> <?php if (isset($code) && $code == 8) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Credit Card Number:</span><input name="field" id="field" type="text"
                                                                 value="<?php if (isset($field)) {echo $field;} ?>"/></div>
                    <div class="error" id="creditcardError"> <?php if (isset($code) && $code == 8) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Expiry Date:</span><input class="credit_card_expiry" name="expirydate" id="expirydate" type="text"
                                                                 value="<?php if (isset($expirydate)) {echo $expirydate;} ?>"/></div>
                    <div class="error" id="expirydateError"> <?php if (isset($code) && $code == 8) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Billing Address:</span>
                        <!-- Any whitespace in between the <textarea> tags will appear in the textarea -->
                        <textarea name="address" id="address" rows="5"
                                  cols="20"><?php echo $_SESSION['user']['address']; ?></textarea></div>
                    <div class="error" id="addressError"> <?php if (isset($code) && $code == 6) {
                            echo $error;
                        } ?> </div>
                </div>
                    <div class="first">
                        <div><span class="label">City:</span><input name="city" id="city" type="text"
                                                                     value="<?php if (isset($city)) {echo $city;} ?>"/></div>
                        <div class="error" id="cityError"> <?php if (isset($code) && $code == 8) {
                                echo $error;
                            } ?> </div>
                    </div>
                <div class="first">
                    <div><span class="label">State:</span><input name="state" id="state" type="text"
                                                                value="<?php if (isset($state)) {echo $state;} ?>"/></div>
                    <div class="error" id="stateError"> <?php if (isset($code) && $code == 8) {
                            echo $error;
                        } ?> </div>
                </div>
                <div class="first">
                    <div><span class="label">Country:</span><input name="country" id="country" type="text"
                                                                value="<?php if (isset($country)) {echo $country;} ?>"/></div>
                    <div class="error" id="countryError"> <?php if (isset($code) && $code == 8) {
                            echo $error;
                        } ?> </div>
                </div>
				
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
                </ul>
            </div>
        <?php } ?>
        <?php echo "<div><span class='label'>Total Price Payable:</span>\$".
		number_format((float)$total, 2, '.', '')
				."</div>";?>
				
                <div class="first"><input class="button wide-button" name="checkout_submit" id="checkout_submit"  type="submit" value="Process Order"/></div>
                <!--
                   <div class="first"><input id="submit_button" type="submit" value="Submit"/></div>
                   -->
            </form>
            <script>
                $( "#checkout_form" ).validate({
                    rules: {
						firstname: {
							required: true
						},
						lastname: {
							required: true
						},
						email: {
							required: true,
							email: true
						},	
                        field: {
                            required: true,
                            creditcard: true
                        },						
						expirydate: {
							required: true
						},
						address: {
							required: true
						},
						city: {
							required: true
						},						
						state: {
							required: true
						},
						country: {
							required: true
						}
                    }
                });
            </script>
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