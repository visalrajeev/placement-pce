<?php

$db['db_host']='zwgaqwfn759tj79r.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$db['db_user']='j62ddodka9k5mhgq';
$db['db_pass']='h3tnum2q51pgaced';
$db['db_name']='of1jgn58ph93e6xu';


foreach ($db as $key => $value) {

	define(strtoupper($key),$value);
}

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connection){

	echo 'connection failed';
}


?>
