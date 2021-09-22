<?php

class DB
{
	private static $instance = null;

	private function __construct(){}

	public static function getConnection()
	{
		if( self::$instance === null )
		{
			self::$instance = new mysqli("localhost:3306", "root", "rootroot");
		}
		return self::$instance;
	}

	public function get( $sql )
	{
		return self::getConnection()->query($sql);
	}

}