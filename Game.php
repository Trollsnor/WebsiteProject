<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css"  href="scripts/styleGame.css">
<script type="text/javascript" src="scripts/jquery.js"> </script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<meta charset="UTF-8">
<title>TextBasedBrowserGame</title>	
</head>


<body>

<nav>
	<img class="header" src="city.jpg"> 
		<ul>
			<li><a href="FanartPage.php">Fanart</a></li>
			<li><a href="About.php">the Dragon Keepers</a></li>
			<li> <a href="Game.php">Play Game</a></li>
		</ul>
	</nav>


<main>
	

	<h1>The Keepers Quest</h1>
	<p>******************************************</p>
	<p>This is a text based game based on the <i>Dragon Keeper</i> series.<br>
	To play, first choose a character to play, then simply write and submit your choices in the textbox below.<br>
	Type "help" at any time to display a list of possible commands. Enjoy!<br>
	<br>******************************************</p>	

	
	<div>
	
	<h1 id="startButton">START GAME</h1>
	
	<article  id="choose">
	<p> Choose a character<br></p>
	<a href="ThymaraPage.php"><img src="Borat Nice.jpg" height="300" width="300"></a>
	<a href="ThymaraPage.php"><img src="John Goblikon3.jpg" height="300" width="300"></a>
	</article>
	
	<!--
	HERE COMES ALL POPUP <P>
	-->
	
	
	<!--
	SCRIPT:
	-->
	
	
<script type="text/javascript">
	$(document).ready(function(){
	
		$("h1").click(function(){
			$("#startButton").fadeOut(2);
			$("#choose").fadeIn(2000);
		
		});
	});
</script>	

	
<script type="text/javascript"> 
	
$(document).ready(function(){
	
	//if u wanna script something pretteeh!!
	
});
</script>


<!--
<script type="text/javascript" src="scripts/game.js"> </scripts>
-->
	
</div>
	
	<p>******************************************<br></p>
	<p>DISCLAIMER:<br>this game it not meant for entertainment. It's purely meant as a training exercise in JavaScript and jQuery<br>
	However, it you indeed are enjoying this, I will not be mad. <br><br>
	Right now, controls may seem a bit confusing, but here's a tip:<br>
	All you can do it either click on certain text phases, or write in a word or <br>
	phrase. Normally just 'yes' or maybe a 'attack' or 'discard item'<br><br>
	In the future I might even try to organize a simple inventory system,<br>
	so that the player might collect items, and then use them when pleasing,<br>
	by writing 'open inventory' and then choose from a list of contained items.</p>
	<p><br>******************************************</p>	

</main>
<footer>

	<p>This is a footer</p>

</footer>
</body>
</html>