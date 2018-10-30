<?php

	$file = "data.json";
	$json = json_decode(file_get_contents($file), true);

	$new_entry = json_decode(file_get_contents('php://input'), true);

	$new_entry = json_decode(json_encode($new_entry), true);

	$json[] = $new_entry; 

	$file = fopen($file,'w+');

	fwrite($file, json_encode($json));
	fclose($file);

	echo 'done';
?>