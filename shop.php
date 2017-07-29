<?php

## Load Functions
require_once('include/functions.php');

## Load Products
$PRODUCT = file_to_array($PRODUCTS_FILE);

## Load user check to prevent direct page access
require_once('include/security.php');

## Add
if (isset($_GET['submit']) && $_GET['submit'] == 'add' ) {
    $product = $PRODUCT[$_GET['id']];
    add($product);
    header('Location: shop.php');
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
         Shop
         *****************************************************************************-->
<!--Need to update to only two foreach loops using the following method:
1-Print 1st category.
2-Check if new category is different from the first.
3-If so, print that category. Otherwise do nothing.

The following code is a copyright of RMIT Web Programming Course Readings.
However it has been adopted for learning and assignment purposes.
-->
<div class="banner">
    <h2>The Hobbit Online Shop</h2>
</div>
<!--end of banner-->
<!--****************************************************************************
The Hobbit An Unexpected Journey Film
*****************************************************************************-->
<div class="banner2 center">
    <h3>The Hobbit An Unexpected Journey Film</h3>
</div>
<!--end of banner-container-->
<div class="first column full-width center">
<h3>Synopsis</h3>
<p>
The adventure follows Bilbo Baggins, who is swept into an epic quest to reclaim Erebor 
<br />with the help of Gandalf the Grey and 13 Dwarves led by the legendary warrior Thorin Oakenshield.
</p>
</div>
<!--end of column1-->

<?php displayProduct($PRODUCT, 'hobbit-film'); ?>

<!--****************************************************************************
Extended Edition's of The Lord of the Rings Film Series
*****************************************************************************-->
<div class="banner2 center">
    <h3>Extended Edition's of The Lord of the Rings Film Series</h3>
</div>
<!--end of banner-container-->

<?php displayProduct($PRODUCT, 'lotr-film'); ?>

<!--****************************************************************************
Jewelry
*****************************************************************************-->
<div class="banner2 center">
    <h3>Jewelry</h3>
</div>
<!--end of banner-container-->

<?php displayProduct($PRODUCT, 'jewelry'); ?>

<!--footer-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
 ## Include footer.php
require_once('include/footer.php');
?>
</body>
</html>