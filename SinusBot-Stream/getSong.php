<?php
error_reporting('E_ERROR');
include("sinusbot.class.php");
include("config.php");
session_start();
$sinusbot = new SinusBot($ipport);
$sinusbot->login($user, $passwd);
$status = $sinusbot->getStatus($instanceIDS[$_SESSION['inst']]);
$track = (($status["currentTrack"]["type"] == "url") ? $status["currentTrack"]["tempTitle"] : $status["currentTrack"]["title"]);
$artist = $status["currentTrack"]["tempArtist"];
$name = $track;
$track = preg_replace('^ ^', '+', $track);

function getTrack(){
	global $track;
	return $track;
}

function getName(){
	global $name;
	return $name;
}

function getArtist(){
	global $artist;
	return $artist;
}