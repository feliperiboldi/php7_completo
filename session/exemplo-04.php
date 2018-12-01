<?php 

session_id('o131l598kdpu51jjnj92u3rhk2array');

require_once "config.php";

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>