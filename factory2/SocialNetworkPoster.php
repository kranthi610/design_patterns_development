<?php

require("SocialNetworkConnector.php");

class SocialNetworkPoster
{
	
	public function __construct( $username, $password )
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function getSocialNetwork()
	{
		return new SocialNetworkConnector($this->username,$this->password );
	}
}