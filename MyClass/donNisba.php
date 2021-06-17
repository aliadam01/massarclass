<?php 

	
/////////////////////////////// الملاحظة حسب المعدل //////////////////////////////////////////	
$x = 18;
	while ($x <= 1000){	
	if($overal_rate{$x}>=18){$molahada{$x} = $this->momtaz;}
	elseif($overal_rate{$x}>=16){$molahada{$x} = $this->hasanjidan;}
	elseif($overal_rate{$x}>=14){$molahada{$x} = $this->hasan;}
	elseif($overal_rate{$x}>=12){$molahada{$x} = $this->mostahsan;}
	elseif($overal_rate{$x}>=10){$molahada{$x} = $this->labas;}
	elseif($overal_rate{$x}>=7){$molahada{$x} = $this->aktar;}
	elseif($overal_rate{$x}>=4){$molahada{$x} = $this->jtahid;}
	elseif($overal_rate{$x} < 4){$molahada{$x} = $this->daaif;}
$x++; }





if (!is_dir($this->folderSave.$O{9})) {
    mkdir($this->folderSave.$O{9});
}


date_default_timezone_set('Europe/London');
require_once 'Classes/PHPExcel/IOFactory.php';
require_once 'Classes/PHPExcel.php';

$excel2 = PHPExcel_IOFactory::createReader('Excel2007');
$excel2 = $excel2->load(''.$this->urlFile.''); // Empty Sheet

/*   الأمر بطبع الملاحظات*/
$x = 18;
	while ($x <= 1000){	
       if(!empty($C{$x})){$excel2->getActiveSheet()->setCellValue(''.$writing_field.$x.'', ''.$molahada{$x}.'');}
$x++; }
///////////////////////////////////////////////////////////////////////////////////////////////////





	  
	  
$name_of_class = $worksheet->getCell('I9')->getValue();
	  

/*------------------------------------------------------------------------------*/
$objWriter = PHPExcel_IOFactory::createWriter($excel2, 'Excel2007');
//$objWriter->save(''.basename($_FILES["fileToUpload"]["name"]).'');
$milafmasarnihaei=$this->folderSave.$O{9}.'/'.$name_of_class."-".$O{9}.'.xlsx';
if(!file_exists($milafmasarnihaei)){
                                     $objWriter->save($this->folderSave.$O{9}.'/'.$name_of_class."-".$O{9}.'.xlsx');
                                     
								   
								   }unlink($this->urlFile);
//$objWriter->save($_SESSION['molahadatMassar'].$O{9}.'/'.$name_of_class.date("Y-m-d-H-i-s").'.xlsx');

//require_once 'ihssae.php';


//echo $_SESSION['الملف'];

$donnissba ='yes';

//require_once 'ihssae.php';




 

?>