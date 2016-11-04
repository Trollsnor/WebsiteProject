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
			<li><a href="Game.php">Play Game</a></li>
		</ul>
	</nav>


<main>
	
	<h1><i>~ Story of Thymara ~</i></h1>
	
	<div>
	
	
	<script type="text/javascript"> 
	
		$(document).ready(function() {
		
			$("<p>GAME STARTS IN...</p>").insertBefore("#tom").fadeIn(100).sleep(1000).fadeOut(100);
			$("<p>3</p>")insertBefore("#tom").fadeIn(1000);
		
		});

	</script>
	
	<p> You are fast asleep when...<br>"Hey, Thymara, wake up!" a small girl whispers.<br>
	<br>You and your fellow keepers lie huddled close together near the campfire.<br>
	Everyone seems to be asleep, the exception being you and the girl.<br>
	The sky is slowly lightning up as the sun rises, and on the far side of the great river<br>
	you can see the silhouettes of the Lost City, Kelsingra.<br>
	<br>"I heard a noise from the woods, I'm scared!" The girl gives you a pleading look. <br>
	"Can you please check it out?"<br><br>
	</p>
	
	<!--
	HERE COMES ALL POPUP <P>
	-->
	
	<p id="interrupt" class="dontShow"> INTERRUPT CONVERSATION!</p>
	<p class="dontShow" id="didHear"> Everything!<br></p>
	<p class="dontShow" id="didNotHear"> Nothing...!<br></p>
	
	<article id="tom"></article>
	
	
	<form onsubmit="return false;">
		<input type="text" size="50" autofocus="autofocus" id="typeIn"/>
		<input type="submit"/>
	</form>
	
	
	<!--
	SCRIPT:
	-->
	
<script type="text/javascript"> 

//FUNCTIONNNNNNNNNNS FOR INVENTORY GOES HERE MADAFAKA NOW WRITE:
	function Inventory()
{
	var list = ["empty","empty","empty"];
	list[0].hide().insertBefore("#tom"). fadeIn(1000);
	windows.alert = ("inside function!")
}
	
	
$(document).ready(function() {


$("form").submit(function() {

	var input = $("#typeIn").val();
	
	if (input == "help")
	{
		window.alert("Write a single word, then click the submit button.");
	}
	else if(input == "yes")
	{
		//call function
		Inventory();
		$("<p>'Thanks' the girl says. <br>You walk into the woods. It's dark in here and you can barely see your feet... You continue pushing through the dense vegetation, as quietly as possible. As you get deeper into the darkness, you hear a strange sound... Some kind of low, deep moaning<br>listen<br>go back</p>").hide().insertBefore("#tom"). fadeIn(1000);
	}
	else if(input == "no")
	{
		$("<p>The girl look at you with big, sad eyes. Without a word, she turns <br>her back at you and walks over to Mercor, <br>perhaps to feel safer...</p>").hide().insertBefore("#tom"). fadeIn(1000);
		
		$("this").sleep(2000).fadeOut(100);
		input="go back";
	}
	else if(input == "sleep")
	{
		$("<p>You hush the girl and turn your back at her, covering your ears to escape her whining. Who need friends, right?<br></p>").hide().insertBefore("#tom"). fadeIn(1000);
	}
	else if(input == "listen")
	{
		$("<p>You lean in and sharpen your senses. The moaning transforms to a mumbling conversation. <br> You can hear the hissing tounge of Greft, that sneaky bastard!<br><i>...Then make sure they don't find out! <br>I hope you realize this is the only way to make sure we'll <br>get the dragon scales to Chalched in time!...</i><br> </p>").hide().insertBefore("#tom"). fadeIn(1000);
		
		$("#interrupt").insertBefore("#tom").fadeIn(100).click(function(){ 
			$("#interrupt").fadeOut(100);
			$("<p><i>Hey! No one is trading those scales! <br></i>Greft and Sedric stare at you, shocked.<br><i>What have you heard..?</i><br>Greft takes a threatening step closer. <br></p>").hide().insertBefore("#tom").hide().fadeIn(1000);
			
			$("#didNotHear").hide().insertBefore("#tom").fadeIn(1000).click(function(){
			$("#didNotHear").fadeOut(100);
			$("#didHear").fadeOut(100);
			$("<p>Greft looks at you suspiciously. <i>I believe you. <br>But what are you doing out here?</i><br>The look in his eyes reveal honest concern.<i><br>Has something happened at the camp?</i><br></p>").hide().insertBefore("#tom").fadeIn(1000).break();
			});
			
			$("#didHear").hide().insertBefore("#tom").fadeIn(1000).click(function(){
			$("#didNotHear").fadeOut(100);
			$("#didHear").fadeOut(100);
			$("<p><i>I guess we have no other choice than to include you in our schemes then...</i>Greft smiles mockingly<br>You stare at them with dismay. How could he even suggest such a plot?<br><i>In that I have no interest, and you know it! Now, tell me, did you actually think you would get away with this?</i><br></p>").hide().insertBefore("#tom").fadeIn(1000);
			});	
		});	
	}
	else if(input == "go back")
	{
	$("<p>You quietly walk back. <br>'what was it?' the girl asked.<br>'eh, just a bird. Don't worry about it.'<br>As you get back to sleep, calm and quiet returns to the camp.<br><br>But suddenly...<br>In the middle of the night, a scream of terror and anger <br>echoes through the camp, so loud it seems to shake the whole ground <br></p>").hide().insertBefore("#tom").fadeIn(1000);
	}
	
 
});


});
		
</script>


<!--
<script type="text/javascript" src="scripts/game.js"> </scripts>

//Tredje valet:
					$("form").submit(function(){
					var input3 = $("#typeIn").val();
						if(input3 == "hit")
						{
							$("<p>You killed the parasite<br></p>").clone().insertBefore("#tom").fadeIn(1000);
						}
						
					
					});	
-->
	
</div>
</main>
<footer>

	<p>This is a footer ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ® ®</p>

</footer>
</body>
</html>