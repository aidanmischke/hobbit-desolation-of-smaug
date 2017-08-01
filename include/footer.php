<div id="footer" class="navbar">
 <ul class="navbar float footer">
  <?php echo ($current == 'index') ? '<li class="current" title="Main home page">Home</li>' :
	'<li><a href= "index.php" title="Main home page">Home</a></li>';?>
 <?php echo ($current == 'cast-crew') ? '<li class="current" title="Cast of Actors &amp; Film Crew">Cast &amp; Crew</li>' :
'<li><a href= "cast-crew.php" title="Cast of Actors &amp; Film Crew">Cast &amp; Crew</a></li>';?>
 <?php echo ($current == 'gallery') ? '<li class="current" title="Photo Gallery">Gallery</li>' :
'<li><a href= "gallery.php" title="Photo Gallery">Gallery</a></li>';?>
 <?php echo ($current == 'video') ? '<li class="current" title="The Hobbit film trailer">Video</li>' :
'<li><a href= "video.php" title="The Hobbit film trailer">Video</a></li>';?>
  <?php echo ($current == 'privacy') ? '<li class="current" title="Privacy information">Privacy</li>' :
'<li><a href= "privacy.php" title="Privacy information">Privacy</a></li>';?>
 <?php echo ($current == 'site-map') ? '<li class="current" title="A list of all the website\'s pages">Site Map</li>' :
'<li><a href= "site-map.php" title="A list of all the website\'s pages">Site Map</a></li>';?>
 </ul>
</div>
<!--end of footer-->

<!--validation badge--> 
<div id="badge">
 <p>
	<a href="http://validator.w3.org/check?uri=referer">
	<img src="https://www.w3.org/Icons/valid-xhtml10" 
	   alt="Valid XHTML 1.0 Strict" height="31" width="88" />
	</a>
	<a href="http://jigsaw.w3.org/css-validator/check/referer">
	<img style="border:0;width:88px;height:31px"
	   src="https://jigsaw.w3.org/css-validator/images/vcss"
	   alt="Valid CSS!" />			
	</a>	
 </p>
</div>
<!--end of validation badge-->