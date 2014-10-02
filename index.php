<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
 
<!DOCTYPE html>
<html>
<head>
	<style>
		div {
			width:500px;
			margin-right: auto;
			margin-left: auto;
			background-color: #D8D8D8;
		}
		body {
			text-align: center;
		}

	</style>
	<meta charset="utf-8">
	<title>xkcd Password Generator</title>
<div>
	<h1>xkcd Password Generator</h1>

	<p>This website will help you generate a password consist of words, numbers, and/or special characters to create a strong passwords hard to guess but easy to remember. </p>
</div>

	<?php require('logic.php'); ?>
</head>

<body>
	<div>
		<form action='index.php' method='POST'>
			Number of words <input type='text' name='numWords' value='Enter_Here'> Max 9.<br>
			<input type="checkbox" name='number' value='yes'>Add a number<br>
			<input type="checkbox" name='specialChar' value='yes'>Add a special character<br>
			<input type="submit" name='submit' value="Gimme a Password">
		</form>
	</div>
	<div>
		<h1>
			Your passwords is <?php 
			$password = getPassword();
			echo $password; ?>
		</h1>
	</div>

	<div>
	<h3>What does xkcd mean?</h3>

	<img src='http://imgs.xkcd.com/comics/what_xkcd_means.png' alt='What does xkcd mean?'>
	</div>
</body>
</html>