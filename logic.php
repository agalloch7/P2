<?php
	function getPassword () {
		$words = Array (
			'apple',
			'banana',
			'sunshine',
			'happy',
			'snow',
			'throne',
			'lightening',
			'lipstick',
			'diablo',
			'haha',
			'great',
		);

		$Char = '~!@#$%^&*()_+{}[]|';

	if (isset($_POST['submit'])) {
		/*initialize an empty string*/
		$randwords = '';
		/*iterate the array $word exactly numWords times as the user entered and concatenate a string*/
		for($i=0; $i<$_POST['numWords']; $i++) {
			$randwords .=  $words[rand(0,count($words)-1)];	
		}
		/*Add number to the concatenated string*/
		if (isset($_POST['number']) && isset($_POST['number'])== "yes") {
			$randwords .= rand(0,9);
		}
		/*Add a special character to the concatednated string*/
		if (isset($_POST['specialChar']) && isset($_POST['specialChar'])=="yes") {
			$randwords .= $Char[rand(0,strlen($Char)-1)];
		}
		return $randwords;
	}
}