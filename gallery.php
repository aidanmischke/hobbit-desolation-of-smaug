<?php
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
         Gallery
         *****************************************************************************-->
      <div class="banner">
         <h2>Gallery</h2>
      </div>
      <div class="first column full-width">
         <!--The following code is a copyright of the website:
            <http://stackoverflow.com/questions/1640727/javascript-clicking-thumbnails-to-switch-a-larger-image-best-method>. 
            However it has been adopted for learning and assignment purposes.-->
         <img id="gallery" class="img-center" src="img/home-bg.jpg" alt="larger view of selected thumbnail image" />
         <p id="gallery-description">
            Click on an image below to see a larger version of that image.
         </p>
         <div class="thumbnail-container img-center">
            <p>
               <a href="img/gallery/bard.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/bard.jpg" alt="Bard the bowman and his son Bain."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/barrels.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/barrels.jpg" alt="The party of dwarves floating downstream in barrels."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/bilbo.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/bilbo.jpg" alt="Biblo sneaking through Smaug's treasure."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/dale.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/dale.jpg" alt="Desolated by Smaug, the city of Dale lies in ruins."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/elves.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/elves.jpg" alt="Tauriel and Legolas."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/gandalf.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/gandalf.jpg" alt="Gandalf the Grey."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/master.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/master.jpg" alt="The Master of Lake-town with his servant Alfrid."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/orcs.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/orcs.jpg" alt="A small party of orcs."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/thranduil.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/thranduil.jpg" alt="Thranduil, the elven king of Mirkwood."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/azog.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/azog.jpg" alt="Azog, the orc leader."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/legolas.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/legolas.jpg" alt="Legolas, the elven prince with his blades drawn."/>
               </a>
            </p>
            <p>
               <a href="img/gallery/tauriel.jpg" onclick="swap(this); return false;">
               <img class="thumbnail" src="img/thumbnail/tauriel.jpg" alt="Tauriel, the head of the Mirkwood elven guard with her bow and arrow drawn."/>
               </a>
            </p>
         </div>
         <!--end of thumbnail-container-->
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