<?php


class SocialNetworkConnector
{
	public $apiKey;
	
	public function __construct( $username, $password )
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function login()
	{
		$this->apiKey = login($this->username,$this->password );
		return $this;
	}

	public function logout()
	{
		echo "$this->apiKey.....Loggued out";
		return true;
	}

	public function post( $content )
	{
		echo "$this->apiKey.....$content posted";
		return $this;
	}
}



function login($user,$password)
{
	return "frfwerr2423423dfsd";
}