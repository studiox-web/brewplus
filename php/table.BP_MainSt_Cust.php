<?php

/*
 * Editor server script for DB table BP_MainSt_Cust
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `BP_MainSt_Cust` (
	`id` int(10) NOT NULL auto_increment,
	`firstname` varchar(255),
	`lastname` varchar(255),
	`email` varchar(255),
	`newsletter` varchar(255),
	`stamps` varchar(255),
	`cards` varchar(255),
	`points` varchar(255),
	`history` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'BP_MainSt_Cust', 'id' )
	->fields(
		Field::inst( 'firstname' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'lastname' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'email' )
			->validator( Validate::email() ),
		Field::inst( 'newsletter' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'stamps' ),
		Field::inst( 'cards' ),
		Field::inst( 'points' ),
		Field::inst( 'history' )
	)
	->process( $_POST )
	->json();
