<?php
/*The following code is a copyright of RMIT Web Programming Course Readings. 
However it has been adopted for learning and assignment purposes.*/

## Load Test Harness
//require_once('_test-harness/test-harness.php');

## Load Functions
require_once('include/functions.php');

## Login
if (isset($_POST['login_submit']) && $_POST['login_submit'] == 'Login') {

    ## Sanitize
    $user = array();
    $user['username']   = check($_POST['username']);
    $user['password']   = check($_POST['password']);
        
    ## Check For Errors
    $error = array();
    foreach ($user as $key => $value) {
        if ( ! $value) {
            $error[$key] = "$key is empty.";
        }
    }

    ## Attempt to login if no errors
    if (count($error) == 0) {
        if(login($user)) {
            header('Location: shop.php');
        } else {
            $error['msg'] = 'Unable to login.<br />Invalid Username/Password.';
        }
    }
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
   Login
   *****************************************************************************-->
<div class="banner">
    <h2>Member Login</h2>
</div>
<div class="first column full-width">
    <div class="column-form">
    <form action='' method='post'>
        <div><span class="label">Username:</span>
        <input name="username" id="username" type="text" value='' /></div>
        <?php if(isset($error['username'])) { ?>

            <div class="error" id="usernameError"> <?php if (isset($error['username'])) {
                    echo $error['username'];
                } ?> </div>
        <?php } ?>

        <div><span class="label">Password:</span>
            <input name="password" id="password" type="password" value='' /></div>
        <?php if(isset($error['password'])) { ?>

            <div class="error" id="passwordError"> <?php if (isset($error['password'])) {
                    echo $error['password'];
                } ?> </div>
        <?php } ?>

        <!-- bug - only previous id="register_submit" in style sheet works for styling instead of class="button".-->
        <div class="first"><input class="button" name="login_submit" id="login_submit" type="submit" value="Login"/></div>

        <?php if(isset($error['msg'])) { ?>
            <br />
            <span class='error'><?php echo $error['msg']; ?></span>
            <br />
        <?php } ?>

    </form>

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