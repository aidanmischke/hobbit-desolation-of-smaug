<?php
## Determines which current page link is to be highlighted
$current = basename(__FILE__, '.php');
## Load Functions
require_once('include/functions.php');
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
         Home
         *****************************************************************************-->
      <div class="banner">
         <h2>Welcome to The Hobbit: Desolation of Smaug</h2>
      </div>
      <div class="first column">
         <!--The following code is a copyright of the website:
            <http://demosthenes.info/blog/586/CSS-Fluid-Image-Techniques-for-Responsive-Site-Design>. 
            However it has been adopted for learning and assignment purposes.-->
         <p>
            <img class="img-column img-center" src="img/bg-1.jpg" 
               alt="Montage of characters from The Hobbit."/>
         </p>
      </div>
      <!--end of column1-->
      <div class="column merge">
         <h3>Plot Synopsis</h3>
         <p class="initial">
			The Hobbit: The Desolation of Smaug continues the adventure of the title
            character Bilbo Baggins as he journeys with the Wizard Gandalf and thirteen Dwarves, led by Thorin Oakenshield, on an
            epic quest to reclaim the Lonely Mountain and the lost Dwarf Kingdom of Erebor.
            <br/>
            <br/>
            Having survived the
            beginning of their unexpected journey, the Company travels East, encountering along the way the skin-changer Beorn and
            a swarm of giant Spiders in the treacherous forest of Mirkwood. After escaping capture by the dangerous Wood-elves, the
            Dwarves journey to Lake-town, and finally to the Lonely Mountain itself, where they must face the greatest danger of
            all&mdash;a creature more terrifying than any other; one which will test not only the depth of their courage but the limits
            of their friendship and the wisdom of the journey itself&mdash;The Dragon Smaug.
            <br /><br />
         </p>
         <h3>About the Series</h3>
         <p>
            From Academy Award&reg;-winning filmmaker Peter Jackson comes "The Hobbit: The Desolation of Smaug," the second in a
            trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien.
            <br/>
            <br/>
            The three films
            tell a continuous story set in Middle-earth 60 years before "The Lord of the Rings," which Jackson and his filmmaking
            team brought to the big screen in the blockbuster trilogy that culminated with the Oscar&reg;-winning "The Lord of the
            Rings: The Return of the King."
         </p>
      </div>
      <!--end of column2-->
      <div class="column">
         <p>
            <img class="img-column img-center" src="img/bg-2.jpg" 
               alt="Montage of characters from The Hobbit."/>
         </p>
      </div>
      <!--end of column3-->
	  
<!--footer-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
 ## Include footer.php
require_once('include/footer.php');
?>
   </body>
</html>