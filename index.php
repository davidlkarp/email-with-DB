<?php
session_start();
require_once("connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Email DB</title>
</head>
<body>
	
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='submit'>
		<input type='text' name='email' placeholder='Enter Email'>
		<input type='submit' value='submit'>
	</form>


	<?php
	if (isset($_SESSION['error'])) {
		?>	 <p> <?php echo $_SESSION['error']; ?> </p>	
	<?php } ?>


</body>
</html>

<?php session_destroy(); ?>