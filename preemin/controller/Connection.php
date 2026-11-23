<?php 
class Connnection{
	
	public $conxn;
	
	public function connect()
	{
	 /*define('HOST','localhost');	
	 define('USER','pathsnra_brain');	
	 define('PWD','3HrcK4#6%v!P');	
	 define('DB','pathsnra_brain');
	 */
	 //////////////////
	  define('HOST','localhost');	
	 define('USER','root');	
	 define('PWD','');	
	 define('DB','db_milestoneinfosys');
	 $this->conxn=mysqli_connect(HOST,USER,PWD,DB) or die(mysqli_error($this->conxn));
	 return $this->conxn;	
	
	}
	
	
	}


?>