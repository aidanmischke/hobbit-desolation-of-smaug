<?php

/*The following code is a copyright of the website:
<http://au1.php.net/print_r>. 
However it has been adopted for learning and assignment purposes.*/
function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}


/*The following code is a copyright of RMIT Web Programming Course Readings.
However it has been adopted for learning and assignment purposes.*/



    ## Enable Sessions (Required)
    session_start();
    
    ## Defaults
    if ( ! isset($_SESSION['CSS']))   { $_SESSION['CSS']   = FALSE; }
    if ( ! isset($_SESSION['DEBUG'])) { $_SESSION['DEBUG'] = FALSE; }
    
    ## Globals
    $USERS_FILE     =   'user/user.txt';      ## password file
	$PRODUCTS_FILE  =	'product/product.txt'; ## products file
    //$ORDERS_FOLDER  =   'orders/';              ## orders folder
	$ORDERS_FILE  =   'order/order.txt';              ## order file
    $DELIMITER      =   '|';                    ## seperator

###########################
    ### -- util -- ##
###########################

    function check($string) {
        if ($string != '') {
            $sanitized_string = htmlentities($string);           ## sanitize (lazy lazy lazy bad way)
            if ($string == $sanitized_string) {                  ## check string matches cleaned one
                return $sanitized_string;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

###########################
### -- file functions -- ##
###########################

    ## Array To File
    function array_to_file($ARRAY, $FILE) {

        ## Globals
        global $DELIMITER;
        
		// if file does not exist, create the file.
		if ( ! file_exists($FILE))
		{
		//$fp = fopen($FILE, 'w') or die('Cannot open file: '.$FILE); //create file
		$fp = fopen($FILE, 'w') or die('Cannot open file: '.$FILE); //create file
		fclose($fp);
		}
		
        ## Checks
        if (is_array($ARRAY)) {     
            if (file_exists($FILE)) { 
            
                ## Create File Pointer 
                if ($fp = fopen($FILE, 'a')) {
                
                    ## Write To File
                    $count = 0;
                    foreach ($ARRAY as $a) {    
                        $keys = ''; $line = ''; 
                        foreach ($a as $key => $value ) {
                            ## [KEYS] Array -> String
                            if ($count == 0) {
                                $keys .= "$key$DELIMITER";
                            }
                            ## [VALUES] Array -> String
                            $line .= "$value$DELIMITER";
                        }
                        
                        ## Append new line chars
                        $line .= "\n"; $keys .= "\n";
                        
                        ## Write To File
                        if ($count == 0) { 
                            fwrite($fp, $keys); 
                            $count ++;
                        }
                        fwrite($fp, $line); 
                    }   
                    
                    ## Close File && End Safely
                    fclose($fp);         
                    return TRUE;        
                    
                }
            }
        } 
    }
    
    ## File To Array
    function file_to_array($FILE) {

        ## Globals
        global $DELIMITER;
        
        if (file_exists($FILE)) {   ## check file exists
            if ($fp = fopen($FILE, 'r')) {  ## create file pointer
            
                ## Prepare
                $keys = array();
                $arrays = array();
                $count = 1;
                
                ## Begin Reading
                while(!feof($fp)) { 
                
                    $line = trim(fgets($fp)); 
                    if ($line != '') {
                    
                        ## Break Up Pieces (explode)
                        $pieces = explode($DELIMITER, $line);
                        array_pop($pieces);
                       
                        ## Prepare Array Keys
                        if ($count == 1) {
                            $keys = $pieces;
                        } else {
                            ## Create array from pieces
                            $index = 0;
                            $array = array();
                            foreach ($pieces as $p) {
                                $array[$keys[$index]] = $p; 
                                $index ++;
                            }
							## If processing Products assign id to array name
							if ($keys[1] == 'id')
							{
								$id = $array['id'];     ## Append array to array.
								$arrays[$id] = $array;     ## Append id named array to array.	
							}
							else 
							{
								$arrays[] = $array;     ## Append index named array to array.
							}
                        }
                        ## Increment count
                        $count ++;   
                    }
                }					
                fclose($fp);         ## close file
                return $arrays;     ## close safely
            } else {
                if ($_SESSION['DEBUG']) { echo '[DEBUG][file_to_array] Error: File cannot be opened'.'<br />'; }         
                return FALSE;   ## file cannot be opened;
            }
        } else {
            if ($_SESSION['DEBUG']) { echo "[DEBUG][file_to_array] Error: $FILE not found".'<br />'; }         
            return FALSE;   ## file not found;
        }
    }

###########################
### -- user functions -- ##
###########################

    ### Register
    # -- $USER => array()
    function register($USER) {
        
        ## Globals
        global $USERS_FILE;

// if file does not exist, create the file.
if ( ! file_exists($USERS_FILE))
{
$fp = fopen($USERS_FILE, 'w') or die('Cannot open file: '.$USERS_FILE); //create file
fclose($fp);
//    $fp = fopen($USERS_FILE, 'w');
}

## Load Users
if ( ! file_exists($USERS_FILE) && ! $USERS = file_to_array($USERS_FILE)) {
    if ($_SESSION['DEBUG']) { echo "[DEBUG][LOGIN] Error: file_to_array failed".'<br />'; }
	return FALSE;
}


## User Checks
## username
if(isset($USER['username']) && isset($USERS)) {
foreach ($USERS as $u) {                                            ## unique user check
if (isset($u['username']) && $u['username'] == $USER['username']) {
return FALSE;
}
}
}

## password
if(isset($USER['password']) && isset($USER['passwordc'])) {
if ($USER['password'] == $USER['passwordc']) {               ## passwords match check
$USER['password'] = md5($USER['passwordc']);              ## [security] md5 password
unset($USER['passwordc']);
}
} else {
return FALSE;
}

        ## Register
        $USERS[] = $USER;        
        if(array_to_file($USERS, $USERS_FILE)) {
            $_SESSION['user'] = $USER;
            return TRUE; 
        } else {
            return FALSE;
        }
        
    }
    
 
     
    ## Login
    function login($LOGIN) {

        ## Globals
        global $USERS_FILE;  

        ## Load Users
        if ( ! $USERS = file_to_array($USERS_FILE)) { 
            if ($_SESSION['DEBUG']) { echo "[DEBUG][LOGIN] Error: file_to_array failed".'<br />'; }         
            return FALSE;
        }
      
        ## Attempt To Locate User
        foreach ($USERS as $USER) {  
            if($USER['username'] == $LOGIN['username'] ) {
                if ($USER['password'] == md5($LOGIN['password'])) {
                    $_SESSION['user'] = $USER;
                    return $USER;
                }
                
            } 
        }
        
        ## Fails :(
        if ($_SESSION['DEBUG']) { echo "[DEBUG][LOGIN] Error: No user found.".'<br />'; }                
        return FALSE;
    }
    
    ## Logout
    function logout() {
        session_destroy();      ## destroy session.
        return TRUE;
    }
  
###########################
### -- cart functions -- ##
###########################

    ## Globals
    if ( ! isset($_SESSION['cart'])) {  
        $_SESSION['cart'] = array();           ## make sure cart exists
    }

	## Empty Cart when user places an order
    function empty_cart() {
        if(isset($_SESSION['cart'])) {
			## unset and recreate cart
            unset($_SESSION['cart']);
			$_SESSION['cart'] = array();  
            return TRUE;
        } else {
          return FALSE;
		  }
    }
	
    ## Add to Cart
    function add($product) {
        if(isset($_SESSION['cart'][$product['id']])) {
            $_SESSION['cart'][$product['id']]['qty'] ++;
            return TRUE;
        } else {
            $_SESSION['cart'][$product['id']] = $product;
            $_SESSION['cart'][$product['id']]['qty'] = 1;
            return TRUE;
        }
        return FALSE;
    }
  
    ## Remove from Cart
    function remove($id) {
        if(isset($_SESSION['cart'][$id])) {
            if ($_SESSION['cart'][$id]['qty'] > 1) {
                $_SESSION['cart'][$id]['qty'] --;            
            } else {
                unset($_SESSION['cart'][$id]);
            }
            return TRUE;
        } else {
          return FALSE;
        }
        return FALSE;
    }

##############################
### -- product functions -- ##
##############################

function displayProduct($PRODUCT, $category)
{
    foreach ($PRODUCT as $p) {

        if ($p['category'] == $category) {
            echo "<div class=\"column\">";

            foreach ($p as $key => $value) {

// id and category are not to be output to shop page
                if (!($key == 'id' || $key == 'category')) {
                    if ($key == 'name') {
                        echo "<h4 class=\"center\">$value</h4><br />";
                    } else if ($key == 'price') {
                        echo "<br />Price: $" . $value . "<br />";
                    } else {
                        echo "<br />$value<br />";
                    }
                }
                if ($key == 'name') {
                    $productImg = "<p><img class=\"img-shop img-center\" src=\""
                        . "img/shop/" . $p["id"] . ".png\" alt=\""
                        . $p["name"] . "\"/> </p>";

                    echo $productImg;
                }
            }
            $buy = "<br /><span class='buy'><a href=".'"?submit=add&id='.
                $p['id'].'">add to cart</a></span>'.'</div> <!--end of column1-->';

            echo $buy;




            }
    }
}

?>



















