<!--The following code is a copyright of the website:
<http://stackoverflow.com/questions/4221333/get-the-current-script-file-name>.
However it has been adopted for learning and assignment purposes.
"$current = basename(__FILE__, '.php');"-->

<!--The code below is a copyright of RMIT Web Programming Course Readings.
However it has been adopted for learning and assignment purposes.-->

<!--login-nav-->
        <?php
        if (isset($_SESSION['user'])) {
            ?>
            <div class="login-nav center">
                <ul>
            <li><a href="logout.php" title="Logout of your account">Logout (<span
                        class='username'><?php echo $_SESSION['user']['username']; ?></span>)</a>
						<!--new line--><br /></li>
            <?php echo ($current == 'shop') ? '<li class="current" title="Hobbit Merchandise Shop">Shop</li>' :
                '<li><a href= "shop.php"
                   title="Hobbit Merchandise Shop">Shop</a></li>';?>
            <?php echo ($current == 'cart') ? '<li class="current" title="View items in your shopping cart">Cart('.count($_SESSION['cart']).') items</li>' :
                '<li><a href= "cart.php"
                   title="View items in your shopping cart">Cart ('.count($_SESSION['cart']).') items</a></li>';?>
			<?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
			echo ($current == 'checkout') ? '<li class="current" title="Purchase your items">Checkout</li>' :
				'<li><a href= "checkout.php"
					title="Purchase your items">Checkout</a></li>';	
				}?>
                </ul>
            </div>
            <!--end of login-nav-->
        <?php } else { ?>
            <div class="login-nav center">
			<ul>
            <?php echo ($current == 'login') ? '<li class="current" title="Login into your account to shop &amp; view extra content">Login</li>' :
                '<li><a href= "login.php"
                   title="Login into your account to shop &amp; view extra content">Login</a></li>';?>

            <?php echo ($current == 'register') ? '<li class="current" title="Register to shop &amp; get extra content">Register</li>' :
                '<li><a href= "register.php"
                   title="Register to shop &amp; get extra content">Register</a></li>';?>
    </ul>
</div>
        <?php } ?>
<!--end of login-nav-->
		
<!--logo-->
  <div id="logo">
 <p>
	<img src="img/logo.png" alt="the hobbit logo" />
 </p>
</div>
<!--end of logo-->

<!--header-->
<div id="header" class="navbar">
 <ul>
 <?php echo ($current == 'index') ? '<li class="current" title="Main home page">Home</li>' :
	'<li><a href= "index.php" title="Main home page">Home</a></li>';?>
 <?php echo ($current == 'cast-crew') ? '<li class="current" title="Cast of Actors &amp; Film Crew">Cast &amp; Crew</li>' :
'<li><a href= "cast-crew.php" title="Cast of Actors &amp; Film Crew">Cast &amp; Crew</a></li>';?>
 <?php echo ($current == 'gallery') ? '<li class="current" title="Photo Gallery">Gallery</li>' :
'<li><a href= "gallery.php" title="Photo Gallery">Gallery</a></li>';?>
 <?php echo ($current == 'video') ? '<li class="current" title="The Hobbit film trailer">Video</li>' :
'<li><a href= "video.php" title="The Hobbit film trailer">Video</a></li>';?>
 <?php echo ($current == 'hall-of-fame') ? '<li class="current" title="An animation about the Lord of the Rings Trilogy">Hall of Fame</li>' :
	'<li><a href= "hall-of-fame.php" title="An animation about the Lord of the Rings Trilogy">Hall of Fame</a></li>';?>
 </ul>
</div>
<!--end of header-->