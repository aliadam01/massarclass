<?php
session_start();


//echo $_POST["one"]; exit();



//include "make folders.php";

$output_dir = 'upload/temp/ostad/temp/';


$img = $_FILES['img'];


if(!empty($img))
{
    $img_desc = reArrayFiles($img);
    //print_r($img_desc);
	
	
    
    foreach($img_desc as $val)
    {   if(empty($number)){$number =1;}else{$number = $number +1;}
        $newname = $number.'.xlsx';
		//$newname = date('YmdHis',time()).mt_rand().'.xlsx';
        move_uploaded_file($val['tmp_name'],$output_dir.$newname);
		//echo $val['tmp_name'];
    }
}

function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    if($file_count > 20){//echo 'more';
	?>
		    <center> <a href="index.php"><button>ok</button></a> <b style="margin-top:60px; color:red; font-size:16px;">يسمح برفع 10 ملفات فقط</b></center>
			<script>
			        setTimeout(function () {    
                         window.location.href = 'index.php'; 
                    },300); // 5 seconds
			</script>
	<?php
	exit();
	}else{
		//$_SESSION['NuFiles']=$file_count;
		
		}
	
	
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}



////////////////////////////////////////////////////////////////// session molahadat
/*
if(!empty($_POST["one"])){$_SESSION['ممتاز']= $_POST["one"];}
if(!empty($_POST["two"])){$_SESSION['حسن جدا']= $_POST["two"];}
if(!empty($_POST["three"])){$_SESSION['حسن']= $_POST["three"];}
if(!empty($_POST["foor"])){$_SESSION['مستحسن']= $_POST["foor"];}
if(!empty($_POST["five"])){$_SESSION['لا بأس به']= $_POST["five"];}
if(!empty($_POST["six"])){$_SESSION['اعمل أكثر']=$_POST["six"];}
if(!empty($_POST["seven"])){$_SESSION['إجتهد']=$_POST["seven"];}
if(!empty($_POST["eight"])){$_SESSION['عمل ضعيف']=$_POST["eight"];}

*/









///////////////////////////////////////////////////////////////////////////



 ?>
 
	
	<center><b>...يتم رفع الملفات المرجو الانتظار</b></center><br><center><img src="icon/waiting.gif" style=" width:60px; height:60px;" ></center>
