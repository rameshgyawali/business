<?php 
session_start();
require 'controller/InsertUpdateCreateDelete.php';
define('url','http://milestoneinfosys.com/adbramin/');
$url=  rtrim(isset($_GET['url'])?$_GET['url']:'', '/');
$url=  explode('/', $url);
$obj=new InsertUpdateCreateDelete();

$page_to_load='view/pages/'.$url[0].'.php';
?>