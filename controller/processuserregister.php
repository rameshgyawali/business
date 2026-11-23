<?php
require('../preemin/controller/InsertUpdateCreateDelete.php');
$obj=new InsertUpdateCreateDelete();
$fname=$obj->loadPostValue('fname');
/////
$lname=$obj->loadPostValue('lname');
/////
$gender=$obj->loadPostValue('gender');
/////
$photo=$obj->loadFileName('photo');
$phototmpname=$obj->loadFileTmpName('photo');
/////
$email=$obj->loadPostValue('email');
/////
$phone=$obj->loadPostValue('phone');
/////
$bday=$obj->loadPostValue('bday');
/////
$bmonth=$obj->loadPostValue('bmonth');
/////
$byear=$obj->loadPostValue('byear');
/////
$mobile=$obj->loadPostValue('mobile');
/////
$see=$obj->loadPostValue('see');
/////
$seedate=$obj->loadPostValue('seedate');
/////
$inter=$obj->loadPostValue('inter');
/////
$interdate=$obj->loadPostValue('interdate');
/////
$bachelor=$obj->loadPostValue('bachelor');
/////
$bachelordate=$obj->loadPostValue('bachelordate');
/////
$masters=$obj->loadPostValue('masters');
/////
$mastersdate=$obj->loadPostValue('mastersdate');
/////
$eduother=$obj->loadPostValue('eduother');
/////
$eduotherdate=$obj->loadPostValue('eduotherdate');
/////
$curaddress=$obj->loadPostValue('curaddress');
/////
$peraddress=$obj->loadPostValue('peraddress');
/////
$country=$obj->loadPostValue('country');
/////
$city=$obj->loadPostValue('city');

$password=$obj->loadPostValue('password');
//$url=$obj->loadPostValue('url');
$fileext=$obj->getExtensionLowerCase($photo);
$newname=date('y-m-d-h-i-s').$fname.'.'.$fileext;
if($photo!=null)
{
   $location='profilepicture/'; 
    
    move_uploaded_file($phototmpname,$location.$newname);
    
    
}

$sql="insert into tbl_register(fname,lname,gender,photo,email,phone,dobday,dobmonth,dobyear,mobile,edusee,seedate,eduplus2,interdate,edubachelor,bachelordate,edumasters,mastersdate,eduother,otherdate,currentaddress,permanentaddress,country,city,password) values('$fname','$lname','$gender','$newname','$email','$phone','$bday','$bmonth','$byear','$mobile','$see','$seedate','$inter','$interdate','$bachelor','$bachelordate','$masters','$mastersdate','$eduother','$eduotherdate','$curaddress','$peraddress','$country','$city','$password')";
    $res=$obj->insertUpdateCreateDelete($sql);
    $obj->reDirect($obj->normalurl.'welcome.php?result='.$res);

?>