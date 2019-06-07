<?php

	//Standard Config File w/ connection, timezone and db prefix
	//Copyright 2019 Lukas Dörr / RZDEV.DE | Alle Rechte vorbehalten.
	
	
	//Database Connection placeholder
	define('host','localhost');
	define('user','USERNAME');
	define('pass','PASSWORD');
	define('db','DBNAME');
	
	//Prefix for database
	define('pfx','PFX');
	
	//Default Timezone
	date_default_timezone_set('Europe/Berlin');
	
	//Database Connection
	$con = mysqli_connect(host, user, pass, db);
	