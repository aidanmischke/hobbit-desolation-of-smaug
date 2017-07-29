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
         <h2>Hall of Fame - The Lord of the Rings Trilogy</h2>
      </div>
	        <div class="banner-container center">
         <div class="banner-half">
            <h2>About the Film Series</h2>
         </div>
         <div class="banner-half">
            <h2>See the Fellowship of the Ring</h2>
         </div>
      </div>
      <!--end of banner-container-->
	  <div class="column merge">
		<p class="initial">
		The Lord of the Rings trilogy has a legacy
		The Lord of the Rings is a film series consisting of three epic fantasy adventure films directed by Peter Jackson. They
are based on the novel The Lord of the Rings by J. R. R. Tolkien. The films are subtitled The Fellowship of the Ring
(2001), The Two Towers (2002) and The Return of the King (2003). They were distributed by New Line Cinema.
<br />
<br />
Considered
to be one of the biggest and most ambitious film projects ever undertaken, with an overall budget of $280 million, the
entire project took eight years, with the filming for all three films done simultaneously and entirely in New Zealand,
Jackson's native country. Each film in the series also had special extended editions released on DVD a year after
their respective theatrical releases. While the films follow the book's general storyline, they do omit some of the
novel's plot elements and include some additions to and deviations from the source material.
<br />
<br />		
		Set in the fictional world of Middle-earth, the three films follow the hobbit Frodo Baggins (Elijah Wood) as he and a
Fellowship embark on a quest to destroy the One Ring, and thus ensure the destruction of its maker, the Dark Lord
Sauron. The Fellowship becomes divided and Frodo continues the quest together with his loyal companion Sam (Sean Astin)
and the treacherous Gollum (Andy Serkis). Meanwhile, Aragorn (Viggo Mortensen), heir in exile to the throne of Gondor,
and the wizard Gandalf (Ian McKellen) unite and rally the Free Peoples of Middle-earth, who are ultimately victorious
in the War of the Ring.
<br />
<br />
The series was a major financial success, with the films collectively being among the
highest-grossing film series of all time. The films were critically acclaimed and heavily awarded, winning 17 out of 30
total Academy Award nominations. The final film in the series, The Return of the King, won all of its 11 Academy Awards
nominations, tying it with Ben-Hur and Titanic for most Academy Awards received for a film. The series received wide
praise for its innovative special and visual effects.
		</p>
      </div>
      <!--end of column1-->
	  	  <div class="column merge">
		  <p class="center">
		  Click on a name to see the character
		  </p>
		           <div class="column-hof">
            <a href="img/hall-of-fame/frodo-baggins.jpg" 
               onclick="$(this).pulsate({pulses: 1, duration:1}); swapFrodo(this); return false;">
            <img id="frodo" class="hof-thumbnail" title="Frodo Baggins" src="img/hall-of-fame/frodo-baggins-box.png" alt="Frodo Baggins."/>
            </a>
            <a href="img/hall-of-fame/samwise-gamgee.jpg" 
               onclick="$(this).shake({distance: 1, duration:0.1}); swapSam(this); return false;">
            <img id="sam" class="hof-thumbnail" title="Samwise Gamgee" src="img/hall-of-fame/samwise-gamgee-box.png" alt="Samwise Gamgee."/>
            </a>
            <a href="img/hall-of-fame/gandalf-the-grey.jpg" 
               onclick="$(this).pulsate({pulses: 1, duration:0.5}); swapGandalf(this); return false;">
            <img id="gandalf" class="hof-thumbnail" title="Gandalf the Grey" src="img/hall-of-fame/gandalf-the-grey-box.png" alt="Gandalf the Grey."/>
            </a>
            <a href="img/hall-of-fame/aragorn.jpg" 
               onclick="$(this).shake({distance: 3, duration:0.5}); swapAragorn(this); return false;">
            <img id="aragorn" class="hof-thumbnail" title="Aragorn" src="img/hall-of-fame/aragorn-box.png" alt="Aragorn."/>
            </a>
            <a href="img/hall-of-fame/legolas.jpg" 
               onclick="$(this).shake({distance: 3, duration:1}); swapLegolas(this); return false;">
            <img id="legolas" class="hof-thumbnail" title="Legolas" src="img/hall-of-fame/legolas-box.png" alt="Legolas."/>
            </a>
            <a href="img/hall-of-fame/gimli.jpg" 
               onclick="$(this).shake({distance: 3, duration:2}); swapGimli(this); return false;">
            <img id="gimli" class="hof-thumbnail" title="Gimli" src="img/hall-of-fame/gimli-box.png" alt="Gimli."/>
            </a>
            <a href="img/hall-of-fame/boromir.jpg" 
               onclick="$(this).pulsate({pulses: 2, duration:2}); swapBoromir(this); return false;">
            <img id="boromir" class="hof-thumbnail" title="Boromir" src="img/hall-of-fame/boromir-box.png" alt="Boromir."/>
            </a>
            <a href="img/hall-of-fame/meriadoc-brandybuck.jpg" 
               onclick="$(this).shake({distance: 5, duration:0.5}); swapMerry(this); return false;">
            <img id="merry" class="hof-thumbnail" title="Meriadoc 'Merry' Brandybuck" src="img/hall-of-fame/meriadoc-brandybuck-box.png" alt="Meriadoc 'Merry' Brandybuck."/>
            </a>
            <a href="img/hall-of-fame/peregrin-took.jpg" 
               onclick="$(this).shake({distance: 10, duration:0.5}); swapPippin(this); return false;">
            <img id="pippin" class="hof-thumbnail" title="Peregrin 'Pippin' Took" src="img/hall-of-fame/peregrin-took-box.png" alt="Peregrin 'Pippin' Took."/>
            </a>
         </div>
		 		 		  <p class="center">
		  Click on a name to see the character
		  </p>
		        </div>
      <!--end of column2-->
<!--footer-->
<?php
## Determines which current page link is to be highlighted
if(!isset($current)) { $current = basename(__FILE__, '.php'); }
 ## Include footer.php
require_once('include/footer.php');
?>
   </body>
</html>