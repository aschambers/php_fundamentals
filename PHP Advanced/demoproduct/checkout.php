<?php 

session_start();

?>

Hi <?php echo $_SESSION['name']; ?>! Thanks for purchasing <?php echo $_SESSION['quantity']; ?> '<?php echo $_SESSION['item']; ?>' <br />
An email will be sent to <?php echo $_SESSION['email']; ?>!