<?php
/* SVN File: $Id$ */
/**
 * File download script
 *
 *  This file enables files to be easily downloaded without revealing the
 *  path to the files.
 *
 * FreeSpirit ESU Website Coding
 * Copyright 2008-2009, FreeSpirit Explorer Scout Unit. (http://www.freespiritesu.org.uk)
 *
 * @filesource
 * @copyright     Copyright 2008-2009, FreeSpirit Explorer Scout Unit. (http://www.freespiritesu.org.uk)
 * @package       fsesu
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 */


$fs_root = './';

$directory = urldecode(convert_uudecode($_GET['dl']));
$filename = urldecode($_GET['file']);

$file = $_SERVER['DOCUMENT_ROOT'] . $directory . $filename;

// Quick check to verify that the file exists
if( !file_exists($file) ) die("File not found");

// Figure out the MIME type | Check in array 
 $known_mime_types=array(
 	"pdf" => "application/pdf",
 	"txt" => "text/plain",
 	"html" => "text/html",
 	"htm" => "text/html",
	"exe" => "application/octet-stream",
	"zip" => "application/zip",
	"doc" => "application/msword",
	"xls" => "application/vnd.ms-excel",
	"ppt" => "application/vnd.ms-powerpoint",
	"gif" => "image/gif",
	"png" => "image/png",
	"jpeg"=> "image/jpg",
	"jpg" =>  "image/jpg",
	"php" => "text/plain"
 );
 
$file_extension = strtolower(substr(strrchr($file,"."),1));
	 if(array_key_exists($file_extension, $known_mime_types)){
		$mime_type=$known_mime_types[$file_extension];
	 } else {
		$mime_type="application/octet-stream";
	 };

// Force the download
header("Content-Type: " . $mime_type . ";");
header("Content-Disposition: inline; filename=\"" . basename($file) . "\"");
header('Content-Transfer-Encoding: binary');
header("Content-Length: " . filesize($file));
header('Accept-Ranges: bytes');

readfile($file); 