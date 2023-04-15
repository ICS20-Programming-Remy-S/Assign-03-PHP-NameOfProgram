<?php
  
	// Get info from the user
	$amountOfFans = $_POST['amountOfFans'];
  $ticketPrice = $_POST['ticketPrice'];
	$playerWage = $_POST['playerWage'];
	$coachWage = $_POST['coachWage'];
	$amountOfPlayers = $_POST['amountOfPlayers'];
	$gamesPlayed = $_POST['gamesPlayed'];

	// calculate the pay
  $moneyGained = $amountOfFans * $ticketPrice * $gamesPlayed;
  $moneySpent = (($playerWage * $amountOfPlayers) + $coachWage) * $gamesPlayed;
  $profit = $moneyGained - $moneySpent;
?>
<?php echo "<h3>Results:</h3>
  The amount of money you make from your team is " . round($moneyGained, 2) . "$." .
  "<br>The amount of money spent on your team is " . round($moneySpent, 2) . "$." .
"<br>The profit you make from your team is " . round($profit, 2) . "$."
?>