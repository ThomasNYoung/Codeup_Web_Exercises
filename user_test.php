<?php

require_once 'User.php';

$users  = User::all();
print_r($users);