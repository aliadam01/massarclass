

<?php
//error_reporting(0);



class creator{
	
	//public function __construct(){		
/////////////////
 public $urlFile = "";
 public $prof = "";
 public $donNisba="";
 public $momtaz = "";
 public $hasanjidan = "";
 public $hasan="";
 public $mostahsan="";
 public $labas="";
 public $aktar="";
 public $jtahid="";
 public $daaif="";
 public $folderSave="";
 public $another_material ="";
 public $mostawa_and_madda ="";
 public function message() {



require_once "Classes/PHPExcel.php";

$donnissba ='';
$O{9}='';			 

		
		//$tmpfname = "moumen.xlsx";
		$tmpfname =  $this->urlFile;
		
		
		
		
		$filecontent = file_get_contents($tmpfname);
		//$url = "http://spreadsheetpage.com/downloads/xl/worksheet%20functions.xlsx";
		//$filecontent = file_get_contents($url);
		
		$tmpfname = tempnam(sys_get_temp_dir(),"tmpxls");
		file_put_contents($tmpfname,$filecontent);
		
		
		
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		//if(!empty($excelReader)){echo 'emptyyyyyyyyy'; exit();}
		
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();

       
/*
$excellent = $_SESSION['ممتاز'];
$vergoodwork = $_SESSION['حسن جدا'];
$goodwork = $_SESSION['حسن'];
$good = $_SESSION['مستحسن'];
$itsok = $_SESSION['لا بأس به'];
$workhader = $_SESSION['اعمل أكثر'];
$minus = $_SESSION['إجتهد'];
$weak = $_SESSION['عمل ضعيف'];

*/


$x = 1;
	while ($x <= 1000){
		
		/*echo $worksheet->getCell('A'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('B'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('C'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('D'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('E'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('F'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('G'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('H'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('I'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('J'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('K'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('O'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('P'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('Q'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('R'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('S'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('T'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('U'.$x.'')->getValue().'<br>';
		echo $worksheet->getCell('V'.$x.'')->getValue().'<br>';*/
		
		
    $A{$x} =$worksheet->getCell('A'.$x.'')->getValue();
	    $B{$x} =$worksheet->getCell('B'.$x.'')->getValue();
		    $C{$x} =$worksheet->getCell('C'.$x.'')->getValue();
			    $D{$x} =$worksheet->getCell('D'.$x.'')->getValue();
				    $E{$x} =$worksheet->getCell('E'.$x.'')->getValue();
					    $F{$x} =$worksheet->getCell('F'.$x.'')->getValue();
						    $G{$x} =$worksheet->getCell('G'.$x.'')->getValue();
							    $H{$x} =$worksheet->getCell('H'.$x.'')->getValue();
								    $I{$x} =$worksheet->getCell('I'.$x.'')->getValue();
									    $J{$x} =$worksheet->getCell('J'.$x.'')->getValue();
										    $K{$x} =$worksheet->getCell('K'.$x.'')->getValue();
											    $L{$x} =$worksheet->getCell('L'.$x.'')->getValue();
												    $M{$x} =$worksheet->getCell('M'.$x.'')->getValue();
													    $N{$x} =$worksheet->getCell('N'.$x.'')->getValue();
														    $O{$x} =$worksheet->getCell('O'.$x.'')->getValue();
															    $P{$x} =$worksheet->getCell('P'.$x.'')->getValue();
																    $Q{$x} =$worksheet->getCell('Q'.$x.'')->getValue();
																	    $R{$x} =$worksheet->getCell('R'.$x.'')->getValue();
																		    $S{$x} =$worksheet->getCell('S'.$x.'')->getValue();
																			    $T{$x} =$worksheet->getCell('T'.$x.'')->getValue();
																				    $U{$x} =$worksheet->getCell('U'.$x.'')->getValue();
																					    $V{$x} =$worksheet->getCell('V'.$x.'')->getValue();

	$x++; }	
//exit();

$this->prof = $O{9};
//echo $O{9};



if(empty($O{9})){   // حدف الملفات التي لا علاقة لها بمسار
       //echo 'emptyyyyyyyyy';
      // unlink($this->urlFile);
	   exit();
}

//// رقم الملف
//if(empty($_SESSION['رقم الملف'])){$_SESSION['رقم الملف'] = 1;}else{$_SESSION['رقم الملف'] = $_SESSION['رقم الملف'] + 1;}



///////////////////
$name_of_class = $worksheet->getCell('I9')->getValue(); //إسم القسم
$material = $worksheet->getCell('O11')->getValue();// المادة
$this->material = $material;

$mostawa = $worksheet->getCell('D9')->getValue();// المستوى
$this->mostawa = $mostawa;
$this->mostawa_and_madda = $mostawa.'_'.$material;


$mada_and_mstwa = $material."_".$mostawa;
$this->mada_and_mstwa = $mada_and_mstwa;

require_once 'encrypt.php';
$file1 = "material/".$encryptIN.".php"; // الملف الذي يحتوي على السب المئوية لباقي المواد الأخرى
$percentage = '';


// التحقق من عدد الفروض الكتابية في حالة عدم وجود الأنشطة المندمجة
$I16 = $worksheet->getCell('I16')->getValue();
$K16 = $worksheet->getCell('K16')->getValue();
$M16 = $worksheet->getCell('M16')->getValue();
$O16 = $worksheet->getCell('O16')->getValue();
$Q16 = $worksheet->getCell('Q16')->getValue();
$S16 = $worksheet->getCell('S16')->getValue();
$U16 = $worksheet->getCell('U16')->getValue();
$W16 = $worksheet->getCell('W16')->getValue();
$Y16 = $worksheet->getCell('Y16')->getValue();
$AA16 = $worksheet->getCell('AA16')->getValue();
$AC16 = $worksheet->getCell('AC16')->getValue();

/*
$_SESSION['for waite kissm'] = $I{9};
$_SESSION['for waite mostawa'] = $D{9};
$_SESSION['for waite ostad'] = $O{9};

*/
//////////////////////////////////   حساب المعدل العام /////////////////////////////////////////
$x = 18;
/////////////////////

$writing_field='';

if(($I16 != 'الأنشطة المندمجة')&&($K16 == 'ملاحظات الأستاذ')){/////////////////////////////////////////////////////////// الرياضيات والرياضة والمواد التي لا أنشطة مندمجة لها
// فرض واحد
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} ) / 2; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'K'; //حقل كتابة الملاحظات

}else if(($K16 != 'الأنشطة المندمجة')&&($M16 == 'ملاحظات الأستاذ')){ // ثلاث فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x}) / 3; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'M'; //حقل كتابة الملاحظات

}else if(($M16 != 'الأنشطة المندمجة')&&($O16 == 'ملاحظات الأستاذ')){ // أربعة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x}) / 4; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'O'; //حقل كتابة الملاحظات

}else if(($O16 != 'الأنشطة المندمجة')&&($Q16 == 'ملاحظات الأستاذ')){ // خمسة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x}) / 5; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'Q'; //حقل كتابة الملاحظات

}else if(($Q16 != 'الأنشطة المندمجة')&&($S16 == 'ملاحظات الأستاذ')){ //ستتة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x}) / 6; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'S'; //حقل كتابة الملاحظات

}else if(($S16 != 'الأنشطة المندمجة')&&($U16 == 'ملاحظات الأستاذ')){ //سبعة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x} + $S{$x}) / 7; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'U'; //حقل كتابة الملاحظات

}else if(($U16 != 'الأنشطة المندمجة')&&($W16 == 'ملاحظات الأستاذ')){ //ثمانية فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x} + $S{$x} + $U{$x}) / 8; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'W'; //حقل كتابة الملاحظات

}else if(($W16 != 'الأنشطة المندمجة')&&($Y16 == 'ملاحظات الأستاذ')){ //تسعة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x} + $S{$x} + $U{$x} + $W{$x}) / 9; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'Y'; //حقل كتابة الملاحظات

}else if(($Y16 != 'الأنشطة المندمجة')&&($AA16 == 'ملاحظات الأستاذ')){ //عشرة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x} + $S{$x} + $U{$x} + $W{$x} + $Y{$x}) / 10; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'AA'; //حقل كتابة الملاحظات

}else if(($AA16 != 'الأنشطة المندمجة')&&($AC16 == 'ملاحظات الأستاذ')){ //عشرة فروض
	while ($x <= 1000){
		
	     $overal_rate{$x} = ( $G{$x} + $I{$x} + $K{$x} + $M{$x} + $O{$x} + $Q{$x} + $S{$x} + $U{$x} + $W{$x} + $Y{$x} + $AA{$x}) / 11; //حساب المعدل العام للتلميذ 
	$x++; }

$writing_field = 'AC'; //حقل كتابة الملاحظات

}

if(!empty($writing_field)){
	
	
	$this->donNisba=$this->urlFile;
	
	require_once 'donNisba.php';

//echo 'mkyn hta nisba';

}














else if(file_exists($file1)){///////////////////////////////////////////////////////////////////////////////////////////////////////////////////  باقي المواد الأخرى

		//echo 'another matareal';
		$this->another_material = "another matareal existe";
		
		//echo 'lllllllllllllllllllllllllllllllllll';
		
		
}



else{$this->another_material = "another matareal not existe";}
/*
if((!file_exists($file1))&&(empty($donnissba))){
      include 'save the files that need treatment.php'; 
	  exit();
}
*/

/*

else if(file_exists($file1)){///////////////////////////////////////////////////////////////////////////////////////////////////////////////////  باقي المواد الأخرى

		require_once 'another_material.php';
		
		//echo 'lllllllllllllllllllllllllllllllllll';
		
		
}
else if (!is_dir($_SESSION['nisba mam3rofach'])) { // النسبة المئوية غير معروفة نهائيا
    mkdir($_SESSION['nisba mam3rofach']);
}

if((!file_exists($file1))&&(empty($donnissba))){
      include 'save the files that need treatment.php'; 
	  exit();
}

	

*/

/////////////////////////////////



	}
	
}
	
//}
?>