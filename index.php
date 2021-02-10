<?php

require 'classes/user.php';

$user = new user();

echo user::MAX_INSTANCES;

echo "<br><br>";

$user->parseRequest();





