<?php
session_start();
/*
    require 'MyClass/autoload.php';


$table = new Folder();
$table->title = "moumen abdelali";
$table->numRows = 20;
///////////////////////////////
$folder = new patsh();
$folder->path = "upload/";
//$folder->pashFile = "";

*/

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="description" content="ملاحظات مسار، إضافة ملاحظات الأستاذ إلى نتائج التلاميذ أونلاين، استتمار نتائج التلاميذ">
  <meta name="keywords" content="ملاحظات, ملفات, لاضافة, مسار, الاستاذ, الى, الفرنسية, بالعربية, برنامج, تنقيط, التعليمات, نافدة, مساعدة, ستفتح, اللازمة, لتجاوز, بالتوفيق, الحروف, واجهة, البرنامج,إضافة ملاحظات الأستاذ إلى نقط التلاميذ, إضافة ملاحظات الأستاذ إلى ملفات مسار, ملء ملفات النقط بالملاحظات تلقائيا, ملء ملفات مسار بالملاحظات آليا, دالة الملاحظات مسار إضافة ملاحظات الأستاذ باللغتين  العربية والفرنسية, ملاحظات الأستاذ بالفرنسية, ملاحظات الأستاذ بالإنجليزية, ملاحظات الأستاذ باللغات الأجنبية, ملاحظات الّأستاذ, ملاحظات مسار, ملاحظات التلاميذ, ملاحظات النقط, مسار, ملاحظات, النقط, ملفات, دالة مسار, دالة النقط, molahadat massar, molahadat, massar, masar, note, student massar">
  <meta name="author" content="molahadat massar online">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/uploadfile2.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<style>
            ::-webkit-input-placeholder { /* Edge */
                color: white;
            }

            :-ms-input-placeholder { /* Internet Explorer */
               color: white;
            }

           ::placeholder {
               color: black;
           }
		   
		   
		           input.search {
    background-image: url('icon/write_burned.png');
	background-position: center;
	background-image-border-radius:50px;
    //background-size:contain;
	background-size:30px;
    background-repeat: no-repeat;
    text-indent: 20px;
    }
    input.search:focus {
    background-image:none;
    text-indent:0px
    }
	
	
	 input:not(:placeholder-shown) {
        background-image:none;
        text-indent:0px
     }






.ajax-upload-dragdrop {
    width: 98.5%;
    height: 140px;
    margin: auto;
    background: #ffffff;
    padding: 4px;
    left: 0%;
    border: 2px dashed brown;
    position: relative;
    cursor: pointer;
	color:#ffffff00;
 

}

   .ajax-upload-dragdrop::before {
	   // border: 2px dashed brown;
		margin: auto;
        content: '';
        position: absolute;
        background: #ffffff;
        font-size: 20px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
    }

    .ajax-upload-dragdrop::after {
		// border: 2px dashed brown;
		margin: auto;
        content: 'اضغط أو اسحب ملفات النقط إلى هنا';
        position: absolute;
        color: #808080;
        font-size: 16px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

.ajax-file-upload {
	width:100%;
	height:100%;
	background-color:#ffffff00;
	color:#ffffff00;
	border:0px;

}


.tableTcheck{
	position:absolute;top:8px;
	/* right:20%; */
	width: 100%;
	background-color:;
	text-align:right;
	background-color: #b7b0b0e8;box-shadow: 6px 9px 18px 3px black;
}




/***********************************************/
  .contentCenter{
	  width:60%;
	  right:20%;
      }
	  
@media (max-width: 600px) {
  .contentCenter{
	  width:96%;
	  right:2%;
      }
}
</style>
</head>
<body>

<?php

/*
$table->message();

$folder->message();

echo '<br> welcome ali: '.$folder->options;

if(!empty($folder->options)){
$file = new creator();
$file->urlFile = $folder->path.$folder->options;
 $file->momtaz = "عمل ممتاز";
 $file->hasanjidan = "حسن جدا";
 $file->hasan="عمل حسن";
 $file->mostahsan="عمل مستحسن";
 $file->labas="عمل لا بأس به";
 $file->aktar="المرجو الاجتهاد أكثر بالتوفيق";
 $file->jtahid="المرجو الاجتهاد أكثر بالتوفيق";
 $file->daaif="المرجو الاجتهاد والاهتمام بدروسكم أكثر";
 $file->folderSave= "folderSave";
 
$file->message();
echo $file->prof;
echo $file->donNisba;
}
*/


?>



<div id="readClass"></div>
<script type="text/javascript">
    var auto_refresh = setInterval(
    function ()
    {
    $('#readClass').load('readClass.php');
    }, 10); // refresh every 1000 milliseconds
</script>










			<style>
			.nisbaTD{
				width:33.3%;
			}
			.nisba{
				width:70%;
			}
			
			</style>
			
			 <form action="/sendNesba.php" method="post">
			 <table style="width:100%;">
		
			
			 <?php
	
             if(empty($_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa1.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file1.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa1.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada1.xlsx'].'</center></td></tr>'; }
			 if((empty($_SESSION['madaWmostawa2.xlsx']))||($_SESSION['madaWmostawa2.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa2.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file2.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa2.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada2.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa3.xlsx']))||($_SESSION['madaWmostawa3.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa3.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa3.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file3.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa3.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada3.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa4.xlsx']))||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa4.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa4.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file4.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa4.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada4.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa5.xlsx']))||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa5.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa5.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file5.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa5.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada5.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa6.xlsx']))||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa6.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa6.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file6.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa6.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada6.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa7.xlsx']))||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa7.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file7.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa7.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada7.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa8.xlsx']))||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa8.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file8.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa8.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada8.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa9.xlsx']))||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa9.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file9.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa9.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada9.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa10.xlsx']))||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa10.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file10.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa10.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada10.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa11.xlsx']))||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa11.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file11.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa11.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada11.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa12.xlsx']))||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa12.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file12.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa12.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada12.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa13.xlsx']))||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa13.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file13.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa13.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada13.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa14.xlsx']))||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa14.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file14.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa14.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada14.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa15.xlsx']))||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa15.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file15.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa15.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada15.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa16.xlsx']))||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa16.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file16.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa16.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada16.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa17.xlsx']))||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa17.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file17.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa17.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada17.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa18.xlsx']))||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa18.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file18.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa18.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada18.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa19.xlsx']))||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa18.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa19.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file19.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa19.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada19.xlsx'].'</center></td></tr>';}
			 if((empty($_SESSION['madaWmostawa20.xlsx']))||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa19.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa18.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa17.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa16.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa15.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa14.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa13.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa12.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa11.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa10.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa9.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa8.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa7.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa6.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa5.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa4.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa3.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa2.xlsx'])||($_SESSION['madaWmostawa20.xlsx']==$_SESSION['madaWmostawa1.xlsx'])){$_SESSION['madaWmostawa7.xlsx']='';}else{echo '<tr><td class="nisbaTD"><center><input class="nisba" type="number" name="'.$_SESSION['Nm_file20.xlsx'].'" max="50" min="1" /></center></td><td class="nisbaTD"><center>'.$_SESSION['mostawa20.xlsx'].'</center></td><td class="nisbaTD"><center>'.$_SESSION['mada20.xlsx'].'</center></td></tr>';}
             
			 ?>
			 <tr><td class="nisbaTD"></td><td class="nisbaTD"></td><td class="nisbaTD"><center><input style="margin-top:20px; width:70%; height:40px;" type="submit" name="submit" value="Submit" /></center></td></tr>
			 
			 
			 </table>
			 
			 </form>

















<div id="WaiteTCm"></div>
<div id="formUpload">
<form>
<table id="Tnokat" style="width:100%; background-color:#617b8c; color:white; padding:20px; ">
  <caption style="display:; color: #444a44; border-bottom: solid brown 3px; font-size:18px; background-color:white; margin-bottom:3px; height:30px; padding-top:12px; border-top-left-radius:10px; border-top-right-radius:10px;"><h1 style="font-size:18px; padding-top:-5px;"><b>أكتب ملاحظاتك في هذا الإطار</b></h1></caption>
  <tbody><tr>
    <th style="height:20px; font-size:25%; text-align:center; font-size:13px;">20-18</th>
    <th style="height:20px; font-size:25%; text-align:center; font-size:13px;">18-16</th>
	<th style="height:20px; font-size:25%; text-align:center; font-size:13px;">16-14</th>
	<th style="height:20px; font-size:25%; text-align:center; font-size:13px;">14-12</th>
  </tr>
<tr>
    <th style="height:35px; font-size:25%;"><input onkeyup="one('1'+this.value)" type="text" value="" name="one" placeholder="عمل ممتاز" style="text-align:center; height:27px; width:98%;"/></th>
    <th style="height:35px; font-size:25%;"><input onkeyup="one('2'+this.value)" type="text" value="" name="two" placeholder="حسن جدا" style="text-align:center; height:27px;width:98%;"></th>
	<th style="height:35px; font-size:25%;"><input onkeyup="one('3'+this.value)" type="text" value="" name="three" placeholder="عمل حــسن" style="text-align:center; height:27px;width:98%;"></th>
	<th style="height:35px; font-size:25%;"><input onkeyup="one('4'+this.value)" type="text" value="" name="foor" placeholder="عمل مستحسن" style="text-align:center; height:27px;width:98%;"></th>
  </tr>	
<tr>
    <th style="height:35px; font-size:25%; text-align:center; font-size:13px;">10-08</th>
    <th style="height:35px; font-size:25%; text-align:center; font-size:13px;">08-06</th>
	<th style="height:35px; font-size:25%; text-align:center; font-size:13px;">06-04</th>
	<th style="height:35px; font-size:25%; text-align:center; font-size:13px;">04-00</th>
  </tr>	
<tr>
    <th style="height:35px; font-size:25%;"><input onkeyup="one('5'+this.value)" type="text" value="" name="five" placeholder="عمل لا بأس به" style="text-align:center; height:27px; width:98%;"></th>
    <th style="height:35px; font-size:25%;"><input onkeyup="one('6'+this.value)" type="text" value="" name="six" placeholder="اجتهد أكيد ستنجح" style="text-align:center; height:27px; width:98%;"></th>
	<th style="height:35px; font-size:25%;"><input onkeyup="one('7'+this.value)" type="text" value="" name="seven" placeholder="اجتهد أكثر ارجو لك التوفيق" style="text-align:center; height:27px; width:98%;"></th>
	<th style="height:35px; font-size:25%;"><input onkeyup="one('8'+this.value)" type="text" value="" name="eight" placeholder="اجتهد أكثر" style="text-align:center; height:27px;width:98%;"></th>
  </tr>
</tbody></table>
<br>
 <!-------- رفع الملفات --------------->
 
     <div id="fileuploader"><div class="ajax-upload-dragdrop" style="vertical-align: top; width: 98.5%;"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;"><input onchange="fileUpload(this.form,'upload.php','upload'); return false;" type="file" name="img[]" multiple accept="*" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></div><span><b></b></span></div><div></div></div>
 </form>
 



<script>
function fileUpload(form, action_url, div_id) {
	

//if(error == 'none'){
    // Create the iframe...
    var iframe = document.createElement("iframe");
    iframe.setAttribute("id", "upload_iframe");
    iframe.setAttribute("name", "upload_iframe");
    iframe.setAttribute("width", "0");
    iframe.setAttribute("height", "0");
    iframe.setAttribute("border", "0");
    iframe.setAttribute("style", "width: 0; height: 0; border: none;");

    // Add to document...
    form.parentNode.appendChild(iframe);
    window.frames['upload_iframe'].name = "upload_iframe";

    iframeId = document.getElementById("upload_iframe");

    // Add event...
    var eventHandler = function () {

            if (iframeId.detachEvent) iframeId.detachEvent("onload", eventHandler);
            else iframeId.removeEventListener("load", eventHandler, false);

            // Message from server...
            if (iframeId.contentDocument) {
                content = iframeId.contentDocument.body.innerHTML;
            } else if (iframeId.contentWindow) {
                content = iframeId.contentWindow.document.body.innerHTML;
            } else if (iframeId.document) {
                content = iframeId.document.body.innerHTML;
            }

            document.getElementById('WaiteTCm').innerHTML = content;
			//document.getElementById("space_form").style.display = "none";
			//document.getElementById("upload").style.display = "block";

            // Del the iframe...
            setTimeout('iframeId.parentNode.removeChild(iframeId)', 250);
        }

    if (iframeId.addEventListener) iframeId.addEventListener("load", eventHandler, true);
    if (iframeId.attachEvent) iframeId.attachEvent("onload", eventHandler);

    // Set properties of form...
    form.setAttribute("target", "upload_iframe");
    form.setAttribute("action", action_url);
    form.setAttribute("method", "post");
    form.setAttribute("enctype", "multipart/form-data");
    form.setAttribute("encoding", "multipart/form-data");

    // Submit the form...
    form.submit();

    document.getElementById('WaiteTCm').style.display = "block";
	//document.getElementById('formUpload').style.display = 'none';
	
/////////// focus input after send data
/*document.getElementById("dataAudio").value='';
document.getElementById("title").value='';
document.getElementById("writer").value='';
document.getElementById("text").value='';*/
//}
}
</script>
</body>
</html>