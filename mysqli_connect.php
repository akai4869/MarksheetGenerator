<?php

define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_NAME','mu_marksheet');

$dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Could not connect to mysql: ' . mysqli_connect_error());


?>