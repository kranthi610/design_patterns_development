<?php


require("SocialNetworkPoster.php");

$poster = ( new SocialNetworkPoster("kranthi610@gmail.com","password"))->getSocialNetwork();

$poster->login()->post("My first Social Network Post")->logout()->apiKey;