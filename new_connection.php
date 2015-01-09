<?php
// define constants for db_host, db_user, db_pass, and db_database

// these values are for MAMP localhost
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); // 'root' if Mac, blank if PC
define('DB_DATABASE', 'emailList');

// these values are for www.gregtennant.com/reneetennant
// define('DB_HOST', 'localhost');
// define('DB_USER', 'gregtenn_access');
// define('DB_PASS', 'rootuser');
// define('DB_DATABASE', 'gregtenn_emailList');

// // these values are for www.choiceofpossibility.com
// define('DB_HOST', 'localhost');
// define('DB_USER', 'choiceo3_admin');
// define('DB_PASS', 'W3!p9000');
// define('DB_DATABASE', 'choiceo3_emailList');

// connect to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

// make sure connection is good or die
if ($connection->connect_errno)
{
	die("Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error);
}

// -----------End of Connection Process---------------
// -----------Below are custom query functions--------

// used when expecting multiple results
function fetch_all($query)
{
	$data = array();
	global $connection;
	$result = $connection->query($query);

	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}
	return $data;
}

// use when expecting a single result
function fetch_record($query)
{
	global $connection;
	$result = $connection->query($query);
	return mysqli_fetch_assoc($result);
}

// use to run INSERT/DELETE/UPDATE, queries that don't return a value
function run_mysql_query($query)
{
	global $connection;
	$result = $connection->query($query);
 	return $connection->insert_id;
}

// this returns an escaped string to help secure the database
function escape_this_string($string)
{
	global $connection;
	return $connection->real_escape_string($string);
}

?>