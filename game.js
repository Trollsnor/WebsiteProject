


	
$(document).ready(function(){


	
	alert("blalalla");
	
		$("form").submit(function(){ 

		var input = $("#typeIn").val(); //creates and assigns value to variable "input".

			if (input == "help")
			{
				$("#helpMessage").clone().insertBefore("#tom").fadeIn(1000); 
			}
	
	});
	
	
	
	
	
	$(document).ready(function(){
	
		$("form").submit(function(){ 
		var input = $("#typeIn").val(); //Creates and assigns value to variable "input".
		if (input == "help") // Help popup alert!
		{
			alert("Write in your answer, typically just yes or no, to continue customized storyline. Possible commands: yes, no, run, use (name of item), hit."); 
		}
			
		else if(input == "yes")
		{
			$("<p>You walk into the woods! There you see a bloodstained sword on the ground.<br>It looks ancient! Do you want to pick it up?<br></p>").clone().insertBefore("#tom").fadeIn(1000);
			//enable second input.
			
				
			    //Andra valet:
				$("form").submit(function(){
				var input2 = $("#typeIn").val(); //creates and assigns value to variable "input2".
				if(input2 == "yes")
				{
					$("<p>You pick up sword!<br> Now, a giant tree-parasite attacks you.<br>What do you do?<br></p>").clone().insertBefore("#tom").fadeIn(1000);
					$strenght = 10;
				}
				
				
				//Andra valet:
				else if(input2 == "no")
				{
					$("").clone().insertBefore("#tom").fadeIn(1000);
				}		
					
					
				});
			
			
		//Första valet:
		else if(input == "no")
		{
			$("<p>Little girl looks disappointed. You go back to sleep...<br></p>").clone().insertBefore("#tom").fadeIn(1000);
		}
		
		});
		
	});
	
	
	
	
});