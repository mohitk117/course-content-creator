<?php
include('credentials.php');
require_once 'db.class.php';

DB::$user = $user_name;
DB::$password = $password_string;
DB::$dbName = $database_name;
DB::$host = $host_name;
DB::$port = $port_number;
DB::$encoding = $encoding_string;

?>