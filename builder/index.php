<?php

require("MysqlQueryBuilder.php");


$t  = new MysqlQueryBuilder;

echo $t->select("name,email")->where([ ["name","=","kranthi"] ])->limit(10)->toSql();