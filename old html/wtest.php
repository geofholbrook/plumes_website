
<!DOCTYPE html>
<html>
<head>

	<script src="jquery-1.9.1.min.js">
	</script>

	<script type="text/javascript" src="http://www.bandsintown.com/javascripts/bit_widget.js"></script>
	<script>

	var fadepages = ["ABOUT", "TOUR", "LISTEN", "PHOTOS", "REVIEWS"]; // ok, all of them

	var fadelevel = {ABOUT: 0.5, LISTEN: 0.9, PHOTOS: 0.25, TOUR: 0.7, REVIEWS: 0.6 };


	$(document).ready(function(){

		$(".title").fadeIn(300, function() {
			$(".menu").fadeIn(300, function() {
				$("#bg").fadeIn(750); 
				} ) } )	;



				$(".menuitem").click(function(){

					var id = $(this).text();

					$("td").each(function(){
						if ($(this).text() == id)
						$(this).css({ 'font-weight': 'bold' })
						else
						$(this).css({ 'font-weight': 'normal' }) });

						// fade curtain?
						if (jQuery.support.opacity)  // curtain fading doesn't work in IE?!
						{
							if ( fadepages.indexOf(id) != -1) 
							$("#curtain").fadeTo(1000, fadelevel[id])
							else
							$("#curtain").fadeTo(750, 0);
						}



						// fade all divs out, except for chosen one which fades in
						$(".page").each(function() 
						{
							if ($(this).attr("id") == id)
							$(this).fadeIn(1000);
							else
							$(this).fadeOut(500);
						})
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
					text-align: justify
				}	

				.menuitem {
					cursor: pointer;
				}

				</style>
			</head>



			<body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

				<script type="text/javascript">

				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-39032867-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
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
								<td class="menuitem">REVIEWS</td>
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


						<!--<div id="social" style="position:fixed; top:0px; right:0px; float:right">
						<a href="http://www.facebook.com/plumesensemble/app_178091127385">      
						<img src="http://www.plumesensemble.com/images/findus.jpg" width="175"></img></a>

</div>
-->




<div class="page" id="PHOTOS">
	<div width="25"></div>

	<a href="images/PLUMES-PRESS3.jpg" target="_blank">
		<img src="images/PLUMES-PRESS3-THUMB.jpg" height="200"> </img>  </a>

		<a href="images/PLUMES-PRESS1.jpg" target="_blank">
			<img src="images/PLUMES-PRESS1-THUMB.jpg" height="200"> </img>  </a>

			<a href="images/PLUMES-PRESS2.jpg" target="_blank">
				<img src="images/PLUMES-PRESS2-THUMB.jpg" height="200"> </img>  </a>
				<br>
				<br>
				(click on an image for hi-res version)

			</div>

			<div class="page" id="ABOUT" width="450" 
			style="background-color:white; color:black; opacity:0.8; padding:10px;
			font-size:14px; font-family:Arial, arial, sans-serif;">

			<p>Plumes is a hybrid pop/classical group originating from
				Montr&eacute;al, whose recent "homes away from homes" have included
				New York City and Paris. Singer/guitarist and songwriter Veronica Charnley,
				former frontperson for Canadian indie rock group Flotilla, is joined
				by musicians from diverse backgrounds, including composer and multi-instrumentalist
				Geof Holbrook, harpist &Eacute;veline Gr&eacute;goire-Rousseau, drummer Noel Webb (Skydiggers) and an 
				expanding cast of orchestral players.</p>

				<p>On the group's eponymous full-length, released in July 2012, 
					Charnley's inventive songwriting is supported by arrangements for
					string quartets, brass quintets, clarinets and
					violas, and even a full orchestra in a central eight-minute track 
					inspired by the Greek myth of Hero and Leander. 
					The record received glowing reviews from publications such as
					Exclaim! and Deli Magazine, and it been broadcast extensively on CBC Radio.</p>

					<p>The band has performed in festivals such as NXNE, Wolfe Island Festival, 
						Evolve, Brain Cave, and Pitter Patter. In May 2013, Plumes Ensemble, 
						the chamber music offshoot of Plumes, will tour the West Coast of Canada,
						starting with the Ritornello Festival in Saskatoon.</p>

					</div>

					<div class="page" id="LISTEN">

						<center>
							<div>
								<iframe width="400" height="100" style="position: relative; 
								display:block; width: 400px; height: 100px;"
								src="http://bandcamp.com/EmbeddedPlayer/v=2/album=3530073123/size=venti/
								bgcol=FFFFFF/linkcol=4285BB/" allowtransparency="true"
								frameborder="0"><a
								href="http://plumesensemble.bandcamp.com/album/plumes">Plumes(2012)</a>
							</iframe>
							<br>	

							<a href="https://itunes.apple.com/ca/artist/plumes/id583281788" target="blank">
								<img src="images/itunes.jpg"></img>
							</a>

						</div>
					</center>

					<br>

					<div height="20"></div>
					<iframe src="http://player.vimeo.com/video/46696626?title=0&amp;byline=0&amp;portrait=0&amp;
					badge=0&amp;color=ffffff" width="500" height="281" frameborder="0" 
					webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 

					<iframe width="500" height="281" src="http://www.youtube.com/embed/8C7TPDYa8Ho" 
					frameborder="0" allowfullscreen></iframe>
					<br>	
				</div>

				<div class="page" height="500" id="TOUR">

					<table>
						<tr height="10">
							<th>Upcoming Shows</th>
							<th>Past Shows</th>
						</tr>

						<tr height="700">
							<td>
								<p>
									Fall 2013: recording<br>
									<br>
									Spring 2014: shows in US, Canada and Europe TBA!!!
								</p>
							</td>

							<td id="pastshows">
								<table>
								<?php
								$hostname = "plumesshows.db.9039704.hostedresource.com";
								$usertable = "shows";

								mysql_connect($hostname, "plumesshows", "ge055rGe055r!") OR DIE ("Unable to 
									connect to database! Please try again later.");
								mysql_select_db("plumesshows");

								$query = "SELECT * FROM $usertable ORDER BY date desc";
								$result = mysql_query($query);

								if ($result) {
									while($row = mysql_fetch_array($result)) {
										$city = $row["city"];
										$area = $row["area"];
										$date = date('M-d-y', strtotime($row["date"]));
										$venue = $row["venue"];
										
										echo "<tr>
												<td>$date</td>
												<td>$city, $area</td>
												<td>$venue</td>
											  </td>";
									}
								}

								?>
								</table>
						</td>




					</div>	

					<div class="page" id="REVIEWS" width="450" style="
					width: 400px;
					text-align: justify
					">

					<div style="position:relative; left: 50px; 
					background-color:white; color:black; opacity:0.8; padding:10px">
					&ldquo;The ambitious musical partnership has reached sublime new heights
					on their debut as Plumes. With an eight-minute, Debussy-inspired,
					fully-orchestrated centrepiece based upon the Greek myth of Hero and
					Leander, composer Holbrook and singer/songwriter Charnley are operating
					near Sufjan Stevens territory, but have also retained a sense of raw
					rock energy.&rdquo;
					<br><br>&nbsp;<i> Scott A. Gray, Exclaim! Magazine</i>
				</div> 

				<div style="position:relative; left: 250px; top: 20px; 
				background-color:white; color:black; opacity:0.8; padding:10px">
				&ldquo;Plumes&#8217;
				self-titled LP is a carefully constructed Baroque masterpiece, filled
				with orchestrated meditations on the peaks and valleys of love. This duo
				have written life's epic soundtrack, and their vision can&#8217;t be
				overstated. I suggest you park yourself immediately and pop this magic
				in your ears. Plumes ... I don&#8217;t know where you came from, but thank you.&rdquo;
				<br><br>&nbsp;<i> Mike Levine, The NYC Deli Magazine </i>
			</div>

			<div style="position:relative; left: 450px; top: 40px; 
			background-color:white; color:black; opacity:0.8; padding:10px">
			&ldquo;This musical duo have
			created an ambitious, textured, and at times epic record. With its
			assortment of strings, various brass arrangements, guitars, and so much
			more, Plumes is a glorious crossover of classical music grace and
			indie-pop catchiness. <i>Hero and Leander</i> treads on Sufjan Stevens&#8217; Age
			of Adz epic territory. As you allow the completeness and vitality of
			Plumes&#8217; record to wash over you, you too will realize you could be
			listening to the next big band to come out of Montreal.&rdquo;
			<br><br>&nbsp;<i>Laura Stanley, Grayowl Point </i>
		</div>

	</div>



</div>

<!-- the old bandsintown code >
<script type="text/javascript">
var widget = new BIT.Widget({"artist": "Plumes", "div_id": "TOUR"});
widget.insert_events();
</script>
<-->



</body>

</html>