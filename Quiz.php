<?php
	$answer = $_POST["jessie"];
	$points = 0;
	echo "<center><h3>Incredibly Mind-Blowing Exciting Song Quiz Answers</h3>";
	echo "<h4>Question 1</h4>";
	echo "<p>Whose girl do you wish you had?<br>";
	echo "You answered: " . $answer . "<br>";
	echo "The correct answer is: Jessie's</p><br>";
	if($answer == "Jessie's"){
		$points++;
	}
	$answer = $_POST["paradise"];
	echo "<h4>Question 2</h4>";
	echo "<p>Where do I have 2 tickets to?<br>";
	echo "You answered: " . $answer . "<br>";
	echo "The correct answer is: Paradise</p><br>";
	if($answer == "Paradise"){
		$points++;
	}
	$answer = $_POST["allstar"];
	echo "<h4>Question 3</h4>";
	echo "<p>One could say that your brain gets smart but your head gets what?<br>";
	echo "You answered: " . $answer . "<br>";
	echo "The correct answer is: dumb</p><br>";
	if($answer == "dumb"){
		$points++;
	}
	$answer = $_POST["dinosaur"];
	echo "<h4>Question 4</h4>";
	echo "<p>You open the door. You get on the floor. What do you do next?<br>";
	echo "You answered: " . $answer . "<br>";
	echo "The correct answer is: Walk the dinosaur</p><br>";
	if($answer == "Walk the dinosaur"){
		$points++;
	}
	$answer = $_POST["aquarius"];
	echo "<h4>Question 4</h4>";
	echo "<p>When the moon is in the Seventh House, and Jupiter aligns with Mars, then peace will guide the planets, and love will steer the stars. What age is this?<br>";
	echo "You answered: " . $answer . "<br>";
	echo "The correct answer is: The dawning of the age of aquarius</p><br>";
	if($answer == "The dawning of the age of aquarius"){
		$points++;
	}

	echo "You scored: " . $points . "/5<br>";
	echo "Your score: %" . ($points / 5) * 100

	

?> 
