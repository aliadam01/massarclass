<?php 
//session_start();

class patsh{
	
	//public function __construct(){
		
/////////////////

		
		//echo $_SESSION['uploads'];

public $path='';
public $Name_Of_File='';
public $urlOne = '';


 public function message() {
	 
	 
	 
if(is_dir($this->path))
{
$files= opendir($this->path);
{
if($files)
{

while((($file_name = readdir($files)) !== FALSE))
{
if($file_name != '.' && $file_name != '..'){
	//echo "<option>$file_name</option>"; 
	$this->Name_Of_File= $file_name;
	

	//$this->nfurl1 = $file_name;
	//echo "<option>$file_name</option>";//خاص بالعرض على شكل قائمة مسندلة
//echo $file_name.'</br>';
//$href=$this->path.$file_name;
//$_SESSION['الملف'] = $href;
//echo "<a href='$href'>$file_name</a><br>";
}else{
	//$_SESSION['الملف'] ='النهاية';
	}
 }
}
}
}





 }


/////////////////////////////////
	//}
	
}
?>


