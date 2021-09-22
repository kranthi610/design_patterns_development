<?php

require("LoggerFactory.php");


$logger = (new LoggerFactory)->FileLogger();

echo $logger->log("file")."<br>";

$logger = (new LoggerFactory)->DatabaseLogger();

echo $logger->log("database")."<br>";