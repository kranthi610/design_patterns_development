<?php

require("FileLogger.php");

require("DatabaseLogger.php");


class LoggerFactory
{
	public function FileLogger()
	{
		return new FileLogger();
	}

	public function DatabaseLogger()
	{
		return new DatabaseLogger();
	}
}