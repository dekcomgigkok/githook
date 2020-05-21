<?php
	// The commands
	$commands = array(
		'git pull -f',
		'git status',
	);

	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "{$command} <br/>";
		$output .= htmlentities(trim($tmp)) . "<br/>";
	}
	echo $output;
?>
