<?php
//Name:   Sahaja Reddy Naredla
//Course: CMPS 5303-Adv-Database

// connect
$m = new MongoClient();

// select a database
$db = $m->snaredla;

// select a collection 
$collection = $db->random_people;

// Gets 1000 users from the randomuser api, and loads it into a variable called $json
$json = file_get_contents("http://api.randomuser.me/?results=1000");

$json_array = json_decode($json);

for($i=0;$i<sizeof($json_array->results);$i++)
{
	$collection->insert($json_array->results[$i]);
}	
?>
