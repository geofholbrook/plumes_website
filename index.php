
<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<script src="jquery-1.9.1.min.js">
	</script>

	<script type="text/javascript" src="http://www.bandsintown.com/javascripts/bit_widget.js"></script>
	<script>

	var fadepages = ["ABOUT", "TOUR", "LISTEN", "PHOTOS", "PRESS"]; // ok, all of them

	var fadelevel = {ABOUT: 0.5, LISTEN: 0.9, PHOTOS: 0.25, TOUR: 0.7, PRESS: 0.6 };

	var debug_page = null;



	function menuBold(id) {
		$(".menuitem").each(function(){
			if ($(this).text() == id)
			$(this).css({ 'font-weight': 'bold' })
			else
			$(this).css({ 'font-weight': 'normal' }) 
		});
	}		


	function fadeCurtain(id) {
		if (jQuery.support.opacity)  // curtain fading doesn't work in IE?!
		{
			if ( fadepages.indexOf(id) != -1) 
			$("#curtain").fadeTo(1000, fadelevel[id])
			else
			$("#curtain").fadeTo(750, 0);
		}
	}

	function fadeDivs(id) {
		// fade all divs out, except for chosen one which fades in
		$(".page").each(function() 
		{
			if ($(this).attr("id") == id)
			$(this).fadeIn(1000);
			else
			$(this).fadeOut(500);
		})
	}

	function switchPage(id) { 
		menuBold(id);
		fadeCurtain(id);
		fadeDivs(id);
	}



	$(document).ready(function()
	{
		if (debug_page)
		{
			$(".title").fadeIn(0);
			$(".menu").fadeIn(0);
			$("#bg").fadeIn(0);

			switchPage(debug_page);
		}
		else
		{
			$(".title").fadeIn(300, function() {
				$(".menu").fadeIn(300, function() {
					$("#bg").fadeIn(750); 
					} ) } )	;
		}

		$(".menuitem").click(function(){

			var id = $(this).text();
			switchPage(id);
		}); 
	
	});
		

	</script>





	<style type="text/css">

	a:link {text-decoration:none;}
	a:visited {text-decoration:none;}
	a:hover {text-decoration:underline;}
	a:active {text-decoration:underline;}

	body {
		background-image:url('images/web-background.jpg');
		background-position:center -100px; 
		background-repeat:repeat-y;	
		background-color:rgb(0, 0, 35);
	}

	#curtain { 
		position:fixed;
		top:0px;
		left:0px;
		width:3000px;
		height:2000px;
		background-color:rgb(0, 20, 40);
		display:none
	}

	#main 
	{
		position:absolute;
		margin-left:auto;
		margin-right:auto;
		width:1100px;
		font:48px arial,sans-serif;
		color:white;
	}

	#bg {	
		position:absolute;
		width:1100px;			
		margin-left:auto;
		margin-right:auto;
		bottom:0;
		display:none;
	}

	#bgimg {
		width:1100px;
	}	

	div.page
	{
		display:none;
		position:absolute;
		font:14px times;

		color:white;
		left:75px;
		top:150px;
	}

	div.pressitem
	{
		position:relative; 
		background-color:white; 
		color:black; 
		opacity:0.8; 
		padding:10px;
		padding-bottom:2px;
		margin:20px;
	}
	
	div.pressitem a
	{
 		color:blue;
	}
		

	p.title
	{
		position:relative;
		left:0px;
		top:0px;
		display:none;
	}

	table.menu
	{
		font:22px arial,sans-serif;
		color:white;
		position:relative;
		left:-20px;
		top:0px;
		display:none;

	}

	#ABOUT {
		width: 400px;
		text-align: justify;	
		background-color:white; 
		color:black; 
		opacity:0.8; 
		padding:10px;
		font-size:14px; 
		font-family:Arial, arial, sans-serif;		
	}	

	.menuitem {
		cursor: pointer;
	}

	table.shows {
		font:14px arial,sans-serif;
	}

	th {
		font:16px arial,sans-serif;
		text-align:left;
	}

	tr.top {
		vertical-align:top;
	}


	</style>
</head>



<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">


	<?php
    	// connect to database
        $hostname = "plumesdata.db.9039704.hostedresource.com";
        $username = "plumesdata";
		$dbname = $username;
        $password = "ge055rGe055r!";

        //Connecting to your database
        $dbLink = mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
        connect to database! Please try again later.");
           
		mysql_query("SET character_set_results=utf8", $dbLink);
	    mb_language('uni'); 
	    mb_internal_encoding('UTF-8');
	
		mysql_select_db($dbname, $dbLink);

		// ini_set("default_charset", 'utf-8');		 // someone else's advice...
		mysql_query("set names 'utf8'", $dbLink);
	?>


	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-39032867-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();
	

	</script>

	<div id="curtain"> </div>

	<div id="main">


		<div class="title">
			PLUMES	
		</div>

		<table class="menu" cellspacing="20">
			<tr >
				<td class="menuitem">ABOUT</td>
				<td class="menuitem">LISTEN</td>
				<td class="menuitem">TOUR</td>
				<td class="menuitem">PRESS</td>
				<td class="menuitem">PHOTOS</td>
				<td><a href="http://www.facebook.com/plumesensemble" target="blank">
					<img height="40" width="40" src="images/f_logo.jpg"></img>
				</a></td>
				<td><a href="http://www.twitter.com/plumesensemble" target="blank">
					<img height="40" width="40" src="images/t_logo.jpg"></img>
				</a></td>
				<td><a href="http://www.plumesensemble.com/chambermusic" target="blank">
					<i>PLUMES ENSEMBLE</i>
				</a></td>
			</tr>
		</table>

		<div class="page" id="PHOTOS">
			<div width="25"></div>

			<a href="images/PLUMES-PRESS3.jpg" target="_blank">
				<img src="images/PLUMES-PRESS3-THUMB.jpg" height="200"> </img> 
			</a>

			<a href="images/PLUMES-PRESS1.jpg" target="_blank">
				<img src="images/PLUMES-PRESS1-THUMB.jpg" height="200"> </img>  
			</a>

			<a href="images/PLUMES-PRESS2.jpg" target="_blank">
				<img src="images/PLUMES-PRESS2-THUMB.jpg" height="200"> </img>  
			</a>
			<br>
			<br>
			(click on an image for hi-res version)

		</div>

		<div class="page" id="ABOUT" width="450"> 

		<?php 
			$fh = fopen("data/about.txt", 'r');
			$aboutText = fread($fh, 25000);

		    echo nl2br($aboutText);
		 ?>

	</div>


	<div class       = "page" id="LISTEN">

		<center>
			<div>
				<iframe style="border: 0; width: 500px; height: 120px;" src="http://bandcamp.com/EmbeddedPlayer/album=3530073123/size=medium/bgcol=ffffff/linkcol=0687f5/t=3/transparent=true/" seamless><a href="http://plumesensemble.bandcamp.com/album/plumes">Plumes by Plumes</a></iframe>
				<br>	

				<a href        = "https://itunes.apple.com/ca/artist/plumes/id583281788" target="blank">
					<img src      = "images/itunes.jpg"></img>
				</a>

			</div>
		</center>

		<br>

		<div height      = "20"></div>
		<iframe src      = "http://player.vimeo.com/video/46696626?title=0&amp;byline=0&amp;portrait=0&amp;
		badge            = 0&amp;color=ffffff" width="500" height="281" frameborder="0" 
		webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 

		<iframe width    = "500" height="281" src="http://www.youtube.com/embed/8C7TPDYa8Ho" 
		frameborder      = "0" allowfullscreen></iframe>
		<br>	
	</div>


	<div class="page" height="500" id="TOUR">

		<table class="shows">
			<tr height="30">
				<th width="400">UPCOMING SHOWS</th>
				<th>RECENT SHOWS</th>
			</tr>

			<tr class="top" height="700">
				<td>
					<p>
						Fall 2013: (recording)<br>
						<br>
						Spring 2014: shows in Canada, USA <br> and Europe (TBA!)
					</p>
				</td>

				<td id="pastshows">
					<table>

					<?php
					
					$query = "SELECT * FROM shows ORDER BY date";
					$result = mysql_query($query);

					if ($result) {
						while($row = mysql_fetch_array($result)) {
							$city = $row["city"];
							$area = $row["area"];
							$date = date('M d', strtotime($row["date"]));
							$venue = $row["venue"];

							echo "<tr>
								<td width=\"70\">$date</td>
							<td width=\"150\">$city, $area</td>
							<td>$venue</td>
							</td>";
						}
					}
					
					?>   
				</table>
			</td>
		</table>

	</div>	

	<div class="page" id="PRESS"  style="width: 850px; text-align: justify">

		<table>
			<tr>
		
		<?php
				
			function make_press_column($col_num)   // column number is 0 or 1
			{
			
				$query = "SELECT * FROM press WHERE include_excerpt = 1 AND site_order % 2 = $col_num 
							AND site_order > 0 	ORDER BY site_order";
				$result = mysql_query($query);
				
				if ($result) 
				{
				
					echo "<td>";

					while($row = mysql_fetch_array($result)) {
					
						$excerpt = $row["Excerpt"];
						$publication = $row["Publication"];
						$link = $row["Link"];
					
						echo "<div class=\"pressitem\">";
					
							echo "\"", nl2br($row["Excerpt"]), "...\" <br>";
						
							echo "<div align=\"right\">";
						
								// create link to press item
								echo "<a href=\"$link\" target=\"_blank\">$publication</a>";
						
							echo "</div>";
					
						echo "</div>";
					}
					echo "</td>";
				}
			}
			
			make_press_column(1);
			make_press_column(0);
			
		?>
			</tr>
		<table>

</div>

</div>

</body>

</html>