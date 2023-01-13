<?php

session_start();
include 'router.php';
$route = new \apps\router\router();
$route->route();