<?php
	header('Content-Type: application/json');
	include_once("drive.php");

	$url = (!isset($_GET['id']) || !$_GET['id']) ? 'https://drive.google.com/file/d/18K1wv1bb4dQ7J2AZtIHjN40Nijs0HoP4/view' : $_GET['id'];
	if($url) {
		preg_match('@^(?:http.?://)?([^/]+)@i', $url, $matches);
		$host = $matches[1];
		$id = (strpos($url, 'drive.google.com') !== false) ? get_drive_id($url) : $id = $_GET['id'];
		echo GoogleDrive($id);
	}


?>
