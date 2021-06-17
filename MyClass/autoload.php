<?php 
//session_start();
//namespace Html;
spl_autoload_register(


   function ($classe){
	   
	   require "$classe.php";
	   
   }


);

?>