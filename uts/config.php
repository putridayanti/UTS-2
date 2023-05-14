<?php

$protocol = (isset($_SERVER['HTTPS']))? "https":"http";
$host = $_SERVER['HTTP_HOST'];

$root_url = $protocol . "://" . $host .'/pratikumpw/contoh/uts/backend/';

define("ROOT_PATH_ADMIN", $root_url);
// define("ROOT_DIR_ADMIN", $root_url);
