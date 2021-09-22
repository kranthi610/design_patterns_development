<?php

class YoutubeDownloaderFacade
{

	public function __construct(Youtube $youtube)
	{
		$this->yt = $youtube;
	}

	public function download()
	{
		$file = $this->convert( $videoName );
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
		readfile($file);

	public function convert( $videoName )
	{
		return $this->yt->searchVideo($videoName);
	}

}