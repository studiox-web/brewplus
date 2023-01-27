-- 
-- Editor SQL for DB table BP_MainSt_Cust
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `BP_MainSt_Cust` (
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
);