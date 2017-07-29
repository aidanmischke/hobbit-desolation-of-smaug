<?php
## Load Functions
require_once('include/functions.php');
?>
<!DOCTYPE html> 
<html lang= "en">
<meta charset="UTF-8">
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

      <div class="banner">
         <h2>The Desolation of Smaug Film Trailer</h2>
      </div>
      <div class="first column full-width">
          <div class="center">
         <iframe width="853" height="480"
            src="//www.youtube-nocookie.com/embed/lfflhfn1W-o?rel=0" allowfullscreen></iframe>
         <p>
            If the above embedded video does not load, click 
            <a href="http://www.youtube.com/watch?v=lfflhfn1W-o">here</a>
            to watch the trailer on the Youtube website.
         </p>
          </div>
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