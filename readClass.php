<?php 
session_start();
    require 'MyClass/autoload.php';


$table = new Folder();
$table->title = "moumen abdelali";
$table->numRows = 20;
///////////////////////////////
$folder = new patsh();
$folder->path = "upload/temp/ostad/temp/";
$folder->pathG = "upload/temp/ostad/";


$table->message();

$folder->message();

echo '<br> welcome ali: '.$folder->Name_Of_File;


//echo '<br>Number of x: '.$folder->nx;

if(!empty($folder->Name_Of_File)){
 $file = new creator();
 $file->urlFile = $folder->path.$folder->Name_Of_File;
 $file->momtaz = "عمل ممتاز";
 $file->hasanjidan = "حسن جدا";
 $file->hasan="عمل حسن";
 $file->mostahsan="عمل مستحسن";
 $file->labas="عمل لا بأس به";
 $file->aktar="المرجو الاجتهاد أكثر بالتوفيق";
 $file->jtahid="المرجو الاجتهاد أكثر بالتوفيق";
 $file->daaif="المرجو الاجتهاد والاهتمام بدروسكم أكثر";
 $file->folderSave= "upload/";
 
$file->message();
echo $file->prof;
echo $file->donNisba;

echo $file->another_material;

if ($file->another_material == "another matareal existe"){}


///////////////////////////////////    في حالة إذا كانت النسبة غير مسجلة نهائيا
if ($file->another_material == "another matareal not existe"){
// نقل الملف إلى ملف عام تحت إسم نسب غير معروفة

                  
				  //echo '<br><b style="color:red;">'.$folder->Name_Of_File.' --- '.$file->mostawa_and_madda.'</b>';
				  
				  $_SESSION['Nm_file'.$folder->Name_Of_File.''] = $folder->Name_Of_File; // أسم الملف الذي في حاجة إلى تحديد النسبة
				  $_SESSION['madaWmostawa'.$folder->Name_Of_File.''] = $file->mada_and_mstwa;
				  $_SESSION['mada'.$folder->Name_Of_File.''] = $file->material;
				  $_SESSION['mostawa'.$folder->Name_Of_File.''] = $file->mostawa;
				//  echo 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll';
				 // echo $_SESSION['Nm_file'.$folder->Name_Of_File.''].$_SESSION['madaWnisba'.$folder->Name_Of_File.''];
				 // echo $_SESSION['needTo'.$folder->Name_Of_File.''];
				  //echo '<br>needTo'.$folder->Name_Of_File;
				  
                  if (!is_dir($folder->pathG."donNisba")) {
                               mkdir($folder->pathG."donNisba");
                  }
				  
				  //$newname = date('YmdHis',time()).mt_rand().'.xlsx';
                  rename($folder->path.$folder->Name_Of_File,$folder->pathG."donNisba/".$folder->Name_Of_File);
	
}




}


////////////////////////////////////////////////////////// مطالبة الأستاذ بتحديد النسبة المئوية
$donNisba = new patsh();
$donNisba->path = "upload/temp/ostad/donNisba/";
$donNisba->message();
//echo $donNisba->Name_Of_File;
if((empty($folder->Name_Of_File))&&(!empty($donNisba->Name_Of_File))){
	
	         ?>	
			 
			<style>
			.nisbaTD{
				width:33.3%;
			}
			
			<form action="sendNesba.php" method="post">
			</style>
			 <table style="width:100%;">
		
			
			 <?php
	
             if(empty($_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa1.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file1.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa1.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada1.xlsx'].'</center></td></tr>'; }
			 if((empty($_SESSION['madaWmostawa2.xlsx']))||($_SESSION['madaWmostawa2.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa2.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file2.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa2.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada2.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa3.xlsx']))||($_SESSION['madaWmostawa3.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa3.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa3.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file3.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa3.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada3.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa4.xlsx']))||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa4.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file4.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa4.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada4.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa5.xlsx']))||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa5.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file5.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa5.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada5.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa6.xlsx']))||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa6.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file6.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa6.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada6.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa7.xlsx']))||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file7.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa7.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada7.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa8.xlsx']))||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file8.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa8.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada8.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa9.xlsx']))||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file9.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa9.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada9.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa10.xlsx']))||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file10.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa10.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada10.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa11.xlsx']))||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file11.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa11.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada11.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa12.xlsx']))||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file12.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa12.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada12.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa13.xlsx']))||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file13.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa13.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada13.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa14.xlsx']))||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file14.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa14.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada14.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa15.xlsx']))||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file15.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa15.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada15.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa16.xlsx']))||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file16.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa16.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada16.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa17.xlsx']))||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file17.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa17.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada17.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa18.xlsx']))||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file18.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa18.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada18.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa19.xlsx']))||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa18.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file19.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa19.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada19.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa20.xlsx']))||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa19.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa18.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file20.xlsx'].'" max="50" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa20.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada20.xlsx'].'</center></td></tr>';}
             
			 ?>
			 <tr><td class="nisbaTD"></td><td class="nisbaTD"></td><td class="nisbaTD"><center><input style="margin-top:20px; width:70%; height:40px;" type="submit" name="إرسال" value="إرسال" /></center></td></tr>
			 </form>
			 
			 </table>
			 <?php
			 
			 
}


?>