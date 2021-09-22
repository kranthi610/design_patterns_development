<?php

require("singleton.php");

$users = DB::get("select * from pay_rent.users");

print_r( $users );