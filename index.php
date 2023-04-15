<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Remy Skelton">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Profit for owner of a soccer team </title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Profit of a soccer club owner</h1>";
			echo "<h3>Please enter your soccers club information</h3>";
		?>
		<!--- Average Amount of Fans --->
        <form action="./results.php" method="post" target="results">
        <label for="amount-of-fans">Average Amount of Fans</label>
        <input type="number" id="amount-of-fans" placeholder="eg.15000" name="amountOfFans" step="1" min="1"><br><br>
    <!--- Average Ticket Price --->
        <label for="ticket-price">Average Ticket Price</label>
        <input type="number" id="ticket-price" placeholder="eg.14.99" name="ticketPrice" step=".01"><br><br>
    <!--- Players Wage --->
        <label for="player-wage">Players Wage/player:</label>
        <input type="number" id="player-wage" placeholder="eg.5000" name="playerWage" step=".01"><br><br>
    <!--- Coach Wage --->
        <label for="coach-wage">Coaches Wage:</label>
        <input type="number" id="coach-wage" placeholder="eg.9000" name="coachWage" step=".01"><br><br>
    <!--- Amount of Players --->
        <label for="amount-of-players">Entre the amount of player:</label>
        <input type="number" id="amount-of-players" placeholder="eg.15" name="amountOfPlayers" step="1" min="11" max="26"><br><br>
    <!--- Games Played --->
        <label for="games-played">Amount of Games Played:</label>
        <input type="number" id="games-played" placeholder="eg.10" name="gamesPlayed" step="1" min="1"><br><br>
        <input type="submit" value="calculate">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The amount of money you make from your team is " . round($moneyGained, 2) . "$." .
  "<br>The amount of money spent on your team is " . round($moneySpent, 2) . "$."
"<br>The profit you make from your team is " . round($profit 2) . "$."
?>
	    </iframe>
        <h3>If you are an owner of a soccer team it is very important to be in control of where your money goes, Which is why it is very important to have a calculator like this one. The reason for that is it allows you to find ways in which you get your money, but it also helps with keeping your expenses in check. Finally, it allows you to find all the money you earn and lose to give you an overall financial calculator which tells you how well your team is doing.</h3>
    <h1>
    <img src="./images/stadium.jpg" width="300" height="300">
    </h1>
	</body>
</html>