<?php 

session_start();

	// session number is not set yet, so we are saying if it's not set, which it's not
	// to set session number equal to a random value between 0 and 101.
  	if(!isset($_SESSION['number']))
  	{
  		// store number in session since it can't be reset until browser closed
      	$_SESSION['number'] = rand(1,100);
  	}

  	// take the guess entered in and submitted and do some logic
  	if(isset($_POST['guess']))
  	{
  		// if the guess equals the number stored in session then we got it correct, let user know
      	if($_POST['guess'] == $_SESSION['number'])
      	{
          	$_SESSION['correct'] = 	"<div class='box green'>
                                  		<p style='margin-left:-40px; margin-top:20px;'>" . $_SESSION['number'] . " was the number</p>
                                  		<form action='process.php' method='post'>
                                    		<input type='hidden' name='reset' value='reset'>
                                    		<input style='margin-left:-40px;' type='submit' value='Play Again!?'>
                                  		</form>
                                  	</div>";
      	}
      	// else the guess is lower than the number, let user know
      	else if ($_POST['guess'] < $_SESSION['number'])
      	{
          	$_SESSION['low'] =  "<div class='box red'>
                                	<p style='margin-left:-40px; margin-top:20px;'>Too Low!</p>
                              	</div>";
      	}
      	// else number is too high so let user know
      	else
      	{
          	$_SESSION['high'] = "<div class='box red'>
                                	<p style='margin-left:-40px; margin-top:20px;'>Too High!</p>
                              	</div>";
      	}
  	}
  	// if user clicks the button to play again, destroy the current number stored in session, reset the game, and redirect to index.php
  	if(isset($_POST['reset']) && $_POST['reset'] == 'reset')
  	{
      	session_destroy();
      	header("Location: index.php");
  	}
  	// always redirect back to index.php whenever the user enters a guess and submits it
  	header("Location: index.php");

?>