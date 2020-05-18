<?php

$db['db_host']='ec2-54-246-85-151.eu-west-1.compute.amazonaws.com';
$db['db_user']='acwcmjsesiiimf';
$db['db_pass']='3c302a2a83cf5e3e643585a1546e01b273e138002504d57b2932cbb6fdd9cdef';
$db['db_name']='miniproject';


foreach ($db as $key => $value) {

	define(strtoupper($key),$value);
}

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connection){

	echo 'connection failed';
}


?>
