<?php


require("YoutubeDownloaderFacade.php");

require("Youtube.php");

$yt = new Youtube();

$ytd = YoutubeDownloaderFacade($yt);


$ytd->download("https://youtu.be/NS8WuseYjR8");