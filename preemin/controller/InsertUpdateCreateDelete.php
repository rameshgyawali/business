<?php

require('Connection.php');
class InsertUpdateCreateDelete {
 


	public $sql;
	public $res;
	public $numrows;
	public $affrows;
	public $data=array();
	public $row;
	public $obj;
	public $directory;
	public $conxn;
	public $normalurl;
	public $adminurl;
	
	public function __construct()
	{
	 	$this->obj=new Connnection();
		$this->obj->connect();
		$this->conxn=$this->obj->conxn;
		$this->normalurl='http://localhost/business/';
		$this->adminurl='http://localhost/business/preemin/';

              
	}
	public function __destruct()
	{
	mysqli_close($this->conxn);	
	}
	
	///////////////////////////////function insert countries
	
		
		///////
		public function getExtensionLowerCase($fileName)
		{
			return strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
		}
		
		public function verifyExtension($extension)
		{
			$extension=strtolower($extension);
			if($extension==('jpg' || 'jpeg' || 'gif' ||'png' ||'bmp'))
			{
			return true;	
			}
			else
			{
			return false;	
			}
			
		}
		//////////////////////////////////////getip function
		function getRealIpAddr()
{
			if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
			{
			  $ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
			{
			  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			else
			{
			  $ip=$_SERVER['REMOTE_ADDR'];
			}
			return $ip;
}
		
		///////getip ended
		
		////////insert about
                
                public function Select($sql)
{
$this->res=mysqli_query($this->conxn,$sql) or die(mysqli_error($this->conxn));
			$this->data=array();
			$this->numrows=mysqli_num_rows($this->res);
			
			if($this->numrows>0)
			{
			while($this->row=mysqli_fetch_assoc($this->res))
			{
			array_push($this->data,$this->row);	
			}
			return $this->data;
			}
			
				
}
public function getColumn($sql)
{
$this->res=mysqli_query($this->conxn,$sql) or die(mysqli_error($this->conxn));
			$this->data=array();
			$this->numrows=mysqli_num_rows($this->res);
			
			if($this->numrows>0)
			{
			return $this->numrows;
			
			}
			
				
}

		
public function SelectSingle($sql)
{
$this->res=mysqli_query($this->conxn,$sql) or die(mysqli_error($this->conxn));
			$this->data=array();
			$this->numrows=mysqli_num_rows($this->res);
			
			if($this->numrows>0)
			{
			$this->row=mysqli_fetch_assoc($this->res);
			return $this->row;
			
			}
			
				
}

	
		
		public function getSingleData($table,$id)
{
$this->sql="select * from ".$table." where id='$id' ";
$this->res=mysqli_query($this->conxn,$this->sql) or die(mysqli_error($this->conxn));
			
			$this->numrows=mysqli_num_rows($this->res);
			
			if($this->numrows>0)
			{
			$this->row=mysqli_fetch_assoc($this->res);
			
			return $this->row;
			}
			
				
}


		
			public function insertUpdateCreateDelete($sql){
		
		
			$this->sql=$sql;
			$this->res=mysqli_query($this->conxn,$this->sql) or die(mysqli_error($this->conxn));
			$this->affrows=mysqli_affected_rows($this->conxn);
			
			if($this->affrows>0)
			{
			return 'success';	
			}
			else
			{
			return 'failed';	
			}
			
		}
                public function deleteDataAndFiles($id,$table)
                {
                    
                
			$this->sql="delete from ".$table." where id='$id'";
			$this->res=mysqli_query($this->conxn,$this->sql) or die(mysqli_error($this->conxn));
			$this->affrows=mysqli_affected_rows($this->conxn);
			
			if($this->affrows>0)
			{
			return 'success';	
			}
			else
			{
			return 'failed';	
			}    
                }
		////////insert services

function reDirect($url)
{
echo '<script type="text/javascript">
document.location="'.$url.'";
</script>';	
}
////////////////////////
///////delet
////////getDirectoryname
public function encryptPwd($pwd)
{
return md5(sha1(md5(md5(md5(sha1(sha1(sha1(md5($pwd)))))))));	
}

/////////////////////////
///////delet
public function loadPostValue($value)
{
	return mysqli_real_escape_string($this->conxn,$_POST[$value]);
}


public function loadGetValue($value)
{
	return mysqli_real_escape_string($this->conxn,$_GET[$value]);
}
public function loadConditionalPostValue($value)
{
	return mysqli_real_escape_string($this->conxn,isset($_POST[$value])?$_POST[$value]:'');
}


public function loadConditionalGetValue($value)
{
	return mysqli_real_escape_string($this->conxn,isset($_GET[$value])?$_GET[$value]:'');
}
public function loadFileName($value)
{
	return isset($_FILES[$value]['name'])?$_FILES[$value]['name']:'';
}
public function loadFileTmpName($value)
{
	return isset($_FILES[$value]['tmp_name'])?$_FILES[$value]['tmp_name']:'';
}
 public function getDirectory($dirName)
 {
     
   return str_replace('@', '-', str_replace('_', '-', str_replace('/', '-', str_replace(' ', '-', $dirName))));  
 }
}
 
?>
	
	
	
	
	
		
	




