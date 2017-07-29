<?php

## Load Test Harness
//require_once('_test-harness/test-harness.php');

## Load Functions
require_once('include/functions.php');

//minimum phone number length
define("PHONE_MIN", "8");
//date of birth length
define("DOB_LEN", "8");
//default text in address text area
define("ADDRESS_DEF", "Type your address here");

$success = false;

## Register
if (isset($_POST['register_submit'])) {

    $firstname = trim($_POST["firstname"]);
    $firstname = check($firstname);
    $lastname = trim($_POST["lastname"]);
    $lastname = check($lastname);
    $username = trim($_POST["username"]);
    $username = check($username);
    $password = trim($_POST["password"]);
    $password = check($password);
    $passwordc = trim($_POST["passwordc"]);
    $passwordc = check($passwordc);

    /* Optional Fields */
    $dobSelected = false;
    $dob = trim($_POST["dob"]);
    if ($dob != "") {
        $dobSelected = true;
    }

    $genderSelected = false;
    if (!empty($_POST["gender"])) {
        $gender = trim($_POST["gender"]);
        $genderSelected = true;
    }

    $addressSelected = false;
    $address = trim($_POST["address"]);
    if ($address != ADDRESS_DEF && $address != "") {
        $addressSelected = true;
    }
    /* Back to Compulsory Fields */

    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $membership = trim($_POST["membership"]);
    $duration = trim($_POST["duration"]);

    $required = '<span class="required">Required:</span> ';
    $optional = '<span class="optional">Optional:</span> ';

    if (isset($firstname) && strlen($firstname) == 0) {
        $error = $required . 'Please enter your first name';
        $code = "1";
    } elseif ($lastname == "") {
        $error = $required . 'Please enter your last name';
        $code = "2";
    } elseif ($username == "") {
        $error = $required . 'Please enter a username';
        $code = "3";
    } //check if password field is empty
    elseif ($password == "") {
        $error = $required . 'Please enter a password';
        $code = "4";
    }
    //check for valid password
    /*The following code is a copyright of the websites:
    <http://www.rexegg.com/regex-lookarounds.html>
    <http://stackoverflow.com/questions/15393882/regex-to-match-at-least-2-digits-2-letters-in-any-order-in-a-string>.
    However it has been adopted for learning and assignment purposes.*/
    elseif (!preg_match("/^(?=\w{8,20}$)(?=.*?\d.*\d)/", $password)) {
        $error = $required . 'Please enter a password between 8 to 20 characters,
                        <br />at least two of which need to be digits.';
        $code = "4A";
        // Error - Do not save password fields
        unset($password);
        unset($passwordc);
    } elseif ($password != $passwordc) {
            $error = $required . 'Passwords must match.';
            $code = "4B";
        // Error - Do not save password fields
            unset($password);
            unset($passwordc);
    } //check if dob is selected, its length is valid, and it's numeric
    elseif ($dobSelected && (strlen($dob) != DOB_LEN || is_numeric($dob) == false)) {
        $error = $optional . 'Please enter your date of birth.
                        <br /> Must be in DDMMYYYY format with 8 digits.
                        <br /> i.e. 1 Feb 1990 = 01021990';
        $code = "5";
        // Error checking for address is currently not required
        /*
    } elseif ($address == "") {
        $error = $required . 'Please enter your home address';
        $code = "6";
        */
    } //check if the phone number field is numeric
    elseif (is_numeric($phone) == false) {
        $error = $required . "Please enter a numeric value";
        $code = "7";
    } //check if the phone number length is valid
    elseif (strlen($phone) < PHONE_MIN) {
        $error = $required . "Phone number should be at least " . PHONE_MIN . " digits";
        $code = "7";
    } //check if email field is empty
    elseif ($email == "") {
        $error = $required . "Please enter an email address";
        $code = "8";
    } //check for valid email
    elseif (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
        $error = $required . 'Please enter a valid email';
        $code = "8";
    } elseif ($membership == "choose your membership") {
        $error = $required . 'Please choose a membership type';
        $code = "9";
    } elseif ($duration == "choose membership duration") {
        $error = $required . 'Please choose a membership duration';
        $code = "10";
    } else {
        ## Register
        if (isset($_POST['register_submit']) && $_POST['register_submit'] == 'Register' ) {

            ## Fill user array
            $user = array();
            $user['firstname'] = $firstname;
            $user['lastname'] = $lastname;
            $user['username'] = $username;
            $user['password'] = $password;
            $user['passwordc'] = $passwordc;

            if($dobSelected) $user['dob'] = $dob;
            if($genderSelected) $user['gender'] = $gender;
            if($addressSelected) $user['address'] = $address;

            $user['phone'] = $phone;
            $user['email'] = $email;
            $user['membership'] = $membership;
            $user['duration'] = $duration;

            ## Check For Errors
            $error = array();
            foreach ($user as $key => $value) {
                if ( ! $value) {
                    $error[$key] = " $key is empty.";
                }
            }

            ## Attempt to register new user if no errors
            if (count($error) == 0) {
                if(register($user)) {
                    //header('Location: register.php');
					$success = true;
                } else {
                    $error['msg'] = 'registration error';
                }
            }
        }
    }
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
   Successful Registration
   *****************************************************************************-->
<?php
if ($success == true) {
    echo '
<div class="banner">
    <h2>Registration Success</h2>
</div>
<!--end of banner-container-->
<div class="first column full-width">
    <h3>Details Entered:</h3>';

    echo "<p>First Name: $firstname<br /> Last Name: $lastname<br /> Username: $username<br />";
    if($dobSelected) echo "Date of Birth: $dob<br />";
    if($genderSelected) echo "Gender: $gender<br />";
    if($addressSelected) echo "Address: $address<br />";
echo "Phone Number: $phone<br /> Email: $email<br /> " .
        "Membership Type: $membership<br /> Membership Duration: $duration</p>";
    echo '<p><br />Click <a href="shop.php">here</a> to continue to the hobbit online shop.</p>
</div>
<!--end of column1-->';
}
elseif(isset($error['msg'])) { 
//	"<span class='error'>".$error['msg'].'</span>'.
echo '<div class="banner">
    <h2>Registration Failure</h2>
</div>
<!--end of banner-container-->
<div class="first column full-width">
    <h3>Registration Error:</h3>'.
	'Possible cause:<br />'.
	'	<div class="indent">The supplied username is already taken<br />'.
	'The supplied passwords do not match<br />'.
	'An internal error occurred'.
	'</div></div>
<!--end of column1-->';
} 
?>



<!--****************************************************************************
   Register
   *****************************************************************************-->
<div class="banner">
    <h2>Membership Registration</h2>
</div>
<!--end of banner-container-->
<div class="first column merge">
    <h2>Mithril</h2>

    <p>
        The one membership to rule them all.
        <br/>
        Mithril gives you exclusive access to behind the scenes content from The Hobbit trilogy.
        Also, you will have access to the The Hobbit Online Shop
        with pre-ordering, priority shipping, and rewards points.
    </p>
</div>
<!--end of column1-->
<div class="column">
    <h2>Gold</h2>

    <p>
        Gold membership give you access to the The Hobbit Online Shop
        with pre-ordering, priority shipping, and rewards points.
    </p>
</div>
<!--end of column2-->
<div class="column">
    <h2>Silver</h2>

    <p>
        Silver membership gives you access to The Hobbit Online Shop.
    </p>
</div>
<!--end of column3-->
<div class="first column merge">
    <h3>Mithril Fees</h3>

    <div class="merge-half">
        <p>
            Annual: <br/>
            5 Years: <br/>
            10 Years: <br/>
            Lifetime:
        </p>
    </div>
    <div class="column-half">
        <p>
            $20 <br/>
            $90 <br/>
            $160 <br/>
            $200
        </p>
    </div>
    <!--end of column-half-->
</div>
<!--end of column1-->
<div class="column">
    <h3>Gold Fees</h3>

    <div class="column-half">
        <p>
            Annual: <br/>
            5 Years: <br/>
            10 Years: <br/>
            Lifetime:
        </p>
    </div>
    <div class="column-half">
        <p>
            $10 <br/>
            $40 <br/>
            $70 <br/>
            $100
        </p>
    </div>
    <!--end of column-half-->
</div>
<!--end of column2-->
<div class="column">
    <h3>Silver Fees</h3>

    <div class="column-half">
        <p>
            Annual: <br/>
            5 Years: <br/>
            10 Years: <br/>
            Lifetime:
        </p>
    </div>
    <div class="column-half">
        <p>
            Free <br/>
            Free <br/>
            Free <br/>
            Free
        </p>
    </div>
    <!--end of column-half-->
</div>
<!--end of column3-->
<div class="first column full-width">
    <h3>How to Register</h3>

    <p>
        Fill out your details on the form below and click submit:
        <br/>
        Note: Mithril &amp; Gold membership have membership fees.
    </p>
</div>
<!--end of column1-->
<div class="first column full-width">
    <div class="column-form">
        <!--The code below is a copyright of RMIT Web Programming Course Readings.
           However it has been adopted for learning and assignment purposes.-->
        <h3>Registration Form</h3>
        <!--
           <form id="register_form" onsubmit="return checkForm()" method="post" action="">
           -->
        <form name="register_form" id="register_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="first">
                <div><span class="label">First Name:</span><input name="firstname" id="firstname" type="text"
                                                                  value="<?php if (isset($firstname)) {
                                                                      echo $firstname;
                                                                  } ?>"/></div>
                <div class="error" id="firstnameError"> <?php if (isset($code) && $code == 1) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Last Name:</span><input name="lastname" id="lastname" type="text"
                                                                 value="<?php if (isset($lastname)) {
                                                                     echo $lastname;
                                                                 } ?>"/></div>
                <div class="error" id="lastnameError"> <?php if (isset($code) && $code == 2) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Username:</span><input class="first" name="username" id="username" type="text"
                                                                value="<?php if (isset($username)) {
                                                                    echo $username;
                                                                } ?>"/></div>
                <div class="error" id="usernameError"> <?php if (isset($code) && $code == 3) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Password:</span><input name="password" id="password" type="password"
                                                                value="<?php if (isset($password)) {
                                                                    echo $password;
                                                                } ?>"/>&nbsp;At least 8 characters with 2 digits
                </div>
                <div class="error" id="passwordError"> <?php if (isset($code) && $code == "4A") {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Confirm Password:</span><input name="passwordc" id="passwordc" type="password"
                                                                value="<?php if (isset($passwordc)) {
                                                                    echo $passwordc;
                                                                } ?>"/>&nbsp;Retype Password
                </div>
                <div class="error" id="passwordErrorc"> <?php if (isset($code) && $code == "4B") {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Date of Birth:</span><input name="dob" id="dob" type="text"
                                                                     value="<?php if (isset($dob)) {
                                                                         echo $dob;
                                                                     } ?>"/>&nbsp;<span class="optional">Optional</span>
                    8 Digits as DDMMYYYY
                </div>
                <div class="error" id="dobError"> <?php if (isset($code) && $code == 5) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div>
                    <span class="label">Gender:</span>

                    <div class="radio-container">
                        <input class="radio" name="gender" id="male" type="radio" value="Male"
                            <?php if (isset($gender) && $gender == "Male") {
                                echo ' checked ';
                            } ?> onclick="0"/>Male
                        <input class="radio" name="gender" id="female" type="radio" value="Female"
                            <?php if (isset($gender) && $gender == "Female") {
                                echo ' checked ';
                            } ?> onclick="1"/>Female
                    </div>
                    <span class="optional">Optional</span>
                </div>
            </div>

            <div class="first">
                <div><span class="label">Home Address:</span>
                    <!-- Any whitespace in between the <textarea> tags will appear in the textarea -->
                    <textarea name="address" id="address" rows="5"
                              cols="20"><?php echo (isset($address)) ? $address : ADDRESS_DEF; ?></textarea>
                    <span class="optional">Optional</span></div>
                <div class="error" id="addressError"> <?php if (isset($code) && $code == 6) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Phone Number:</span><input name="phone" id="phone" type="text"
                                                                    value="<?php if (isset($phone)) {
                                                                        echo $phone;
                                                                    } ?>"/></div>
                <div class="error" id="phoneError"> <?php if (isset($code) && $code == 7) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div><span class="label">Email:</span><input name="email" id="email" type="text"
                                                             value="<?php if (isset($email)) {
                                                                 echo $email;
                                                             } ?>"/></div>
                <div class="error" id="emailError"> <?php if (isset($code) && $code == 8) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div>
                    <span class="label">Membership:</span>
                    <select name="membership" id="membership">
                        <option selected="selected">choose your membership</option>
                        <option <?php if (isset($membership) && $membership == "Mithril") {
                            echo 'selected="selected" ';
                        } ?> value="Mithril">Mithril
                        </option>
                        <option <?php if (isset($membership) && $membership == "Gold") {
                            echo 'selected="selected" ';
                        } ?> value="Gold">Gold
                        </option>
                        <option <?php if (isset($membership) && $membership == "Silver") {
                            echo 'selected="selected" ';
                        } ?> value="Silver">Silver
                        </option>
                    </select>
                </div>
                <div class="error" id="membershipError"> <?php if (isset($code) && $code == 9) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first">
                <div>
                    <span class="label">Duration:</span>
                    <select name="duration" id="duration">
                        <option selected="selected">choose membership duration</option>
                        <option <?php if (isset($duration) && $duration == "Lifetime") {
                            echo 'selected="selected" ';
                        } ?> value="Lifetime">Lifetime
                        </option>
                        <option <?php if (isset($duration) && $duration == "10 years") {
                            echo 'selected="selected" ';
                        } ?> value="10 years">10 Years
                        </option>
                        <option <?php if (isset($duration) && $duration == "5 years") {
                            echo 'selected="selected" ';
                        } ?> value="5 years">5 Years
                        </option>
                        <option <?php if (isset($duration) && $duration == "Annual") {
                            echo 'selected="selected" ';
                        } ?> value="Annual">Annual
                        </option>
                    </select>
                </div>
                <div class="error" id="durationError"> <?php if (isset($code) && $code == 10) {
                        echo $error;
                    } ?> </div>
            </div>
            <div class="first"><input class="button" name="register_submit" id="register_submit"  type="submit" value="Register"/></div>
            <!--
			<div class="first"><input class="button" name="register_submit" id="register_submit"  type="submit" value="Register"/></div>
               <div class="first"><input id="submit_button" type="submit" value="Submit"/></div>
               -->
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