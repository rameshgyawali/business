<?php 
session_start();

require 'preemin/controller/InsertUpdateCreateDelete.php';
define('url','http://localhost/business/');
define('urljobandvacancy',url.'jobs-and-vacancy/');
define('urlDiscussion',url.'discussion/');
define('urlDiary',url.'diary/');
define('urlCommunicate',url.'communicate/');
define('urladmin','http://localhost/business/preemin/');

$url=  rtrim(isset($_GET['url'])?$_GET['url']:'', '/');

$url=  explode('/', $url);
$page_to_load='';
$obj=new InsertUpdateCreateDelete();

if(count($url)>1){
$page_to_load='pages/'.$url[0].'/'.$url[1].'.php';
}
else
{
$page_to_load='pages/'.$url[0].'.php';	
}

if(file_exists($page_to_load))
{
	$page_to_load=$page_to_load;
}
else
{
	$page_to_load='pages/home.php';
}
?>