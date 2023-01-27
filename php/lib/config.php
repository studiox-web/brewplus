<?php 

if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

/*
 * DB connection script for Editor
 * Created by http://editor.datatables.net/generator
 */

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 * Edit the following with your database connection options
 */



// DEV
if ($_SERVER['SERVER_NAME'] == "localhost")
{
	$sql_details = array(
		"type" => "Mysql",
		"user" => "loyalweb",
		"pass" => "Yellow00!",
		"host" => "localhost",
		"port" => "3306",
		"db"   => "djvibe_BrewPlus",
		"dsn"  => "charset=utf8"
	);
}

///// PRD.
if ($_SERVER['SERVER_NAME'] == "loyalweb.azurewebsites.net")
{
$sql_details = array(
	"type" => "Mysql",
	"user" => "loyalwebadmin@loyalweb",
	"pass" => "5dl64wRsl",
	"host" => "loyalweb.mysql.database.azure.com",
	"port" => "3306",
	"db"   => "loyalweb",
	"dsn"  => "charset=utf8"
);
}