<?php
error_reporting(0);
	$db = new mysqli('localhost', 'snaredla', 'snaredla2015', 'snaredla');

	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$json = file_get_contents("http://api.randomuser.me/?results=1000");

	$json_array = json_decode($json);

	for($i=0;$i<sizeof($json_array->results);$i++){
		$gender = $json_array->results[$i]->user->gender;
		$title = $json_array->results[$i]->user->name->title;
		$first = $json_array->results[$i]->user->name->first;
		$last = $json_array->results[$i]->user->name->last;
		$street = $json_array->results[$i]->user->location->street;
		$city = $json_array->results[$i]->user->location->city;
		$state = $json_array->results[$i]->user->location->state;
		$zip = $json_array->results[$i]->user->location->zip;
		$email = $json_array->results[$i]->user->email;
		$username = $json_array->results[$i]->user->username;
		$password = $json_array->results[$i]->user->password;
		$dob = $json_array->results[$i]->user->dob;
		$phone = $json_array->results[$i]->user->phone;
		$picture = $json_array->results[$i]->user->picture->medium;
	
		echo "'$gender','$title','$first','$last','$street','$city','$state','$zip','$email','$username','$password','$dob','$phone','$picture'";
	
		$selectquery = "select * from users where email = '{$email}'";
		if(!$result = $db->query($selectquery)){
			die('There was an error running the query[' . $db->error . ']');
		}
	
		if(!$result->num-rows>0)
		{
			$selectquery1 = <<<SQL
			INSERT into users
			VALUES('$gender','$title','$first','$last','$street','$city','$state','$zip','$email','$username','$password','$dob','$phone','$picture');

SQL;

			if(!$result1 = $db->query($selectquery1)){
				die('There was an error running the query ['.$db->error.']');
			}
		}
	}
