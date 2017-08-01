<?php
$title = "untitled";
if ($current == "index")
{$title = "home";}
elseif ($current == "cast-crew")
{$title = "cast &amp; crew";}
elseif ($current == "order-summary")
{$title = "order summary";}
else {$title = $current;} ?>

<title>The Hobbit: The Desolation of Smaug</title>
<link rel= "stylesheet" href= "css/reset.css" type= "text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Almendra:700,400' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css' />
<!--scripts-->
<?php
if ($current == 'checkout') {
    echo '<script type="text/javascript" src="script/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="script/jquery.validate.js"></script>
    <script type="text/javascript" src="script/additional-methods.js"></script>
	<script type="text/javascript" src="script/jquery.formance.js"></script>';
	  }
elseif ($current == 'gallery') {
      echo '<script type="text/javascript" src="script/gallery.js"></script>';
	  }
/*elseif ($current == 'register') {
	echo '<script type="text/javascript" src="js/register.js"></script>';
	}*/
?>
<meta name="description" content="<?php echo "$title - " ?>From Academy Award&reg;-winning filmmaker Peter Jackson comes
         THE HOBBIT: THE DESOLATION OF SMAUG the second of three films
         adapting the enduringly popular masterpiece The Hobbit, by
         J.R.R. Tolkien."/>
<meta name="author" content="Aidan Mischke"/>
<meta name="keywords" content="<?php echo "$title, " ?>hobbit, the hobbit, the hobbit movie, the hobbit the desolation
         of smaug, lord of the rings, Peter Jackson, Ian McKellen, Martin
         Freeman, Cate Blanchett, Orlando Bloom, Iam Holm, Christopher
         Lee, Hugo Weaving, Elijah Wood, Andy Serkis, Richard Armitage,
         Jed Brophy, Adam Brown, John Callen, Stephen Fry, Ryan Gage,
         Mark Hadlow, Peter Hambleton, Stephen Hunter, William Kircher,
         Sylvester McCoy, Bret McKenzie, Graham McTavish, Mike Mizrahi,
         James Nesbitt, Dean O'Gorman, Lee Pace, Mikael Persbrandt, Conan
         Stevens, Ken Stott, Jeffrey Thomas, Aidan Turner, j.r.r.
         Tolkien, film, movie, fantasy, sci-fi, cinema, warner bros,
         warner bros pictures, wb, warner brothers, new line, new line
         cinema"/>
<link rel="icon" type="image/png" href="favicon.ico" />