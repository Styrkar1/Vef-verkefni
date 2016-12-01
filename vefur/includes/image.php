<?php
$out = showGallery();
return $out;

function showGallery()
{
	$galleryHTML = "<h1>Dynamic image gallery</h1>";
	$galleryHTML .= "<ul>";
	$images = new DirectoryIterator("./pubimg/");
	while( $images->valid())
	{
		$file = $images->current();
		$filename = $file->getFilename();
		$src = "./pubimg/$filename";
		$info = new Finfo(FILEINFO_MIME_TYPE);
		$type = $info->file($src);
		if($type === 'image/jpg')
		{
			$galleryHTML .= "<li><img src='$src' alt='a pretty picture'</li>";
		}
		$images->next();
	}
	$galleryHTML .= "</ul>";
	return $galleryHTML;
}