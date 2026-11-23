<?php
function getIp()
{
	if(isset($_SERVER['HTTP_CLIENT_IP']))
	{

		return $_SERVER['HTTP_CLIENT_IP'];
	} else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{

		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		return (isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'');
	}
	$ad=getIp();
	echo $ad;
	$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ad));
	if($query && $query['status']=='success')
	{
		echo 'ISP'.$query['countrycode'];
	}
}
?>