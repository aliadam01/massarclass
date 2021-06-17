<?php 
//error_reporting(0);

/*$nf = $_SESSION['رقم الملف'];
if(!empty($_SESSION["الأمر بمعالجة الملفات للمرة الثانية"])){$nf = $_SESSION["A9samMonjaza"] + 1; }*/

if(empty($_SESSION["A9samMonjaza"])){$nf = 1;}
if(!empty($_SESSION["A9samMonjaza"])){$nf = $_SESSION["A9samMonjaza"] + 1; }

//echo '<br>رقم الملف <br>'.$nf;
//echo '<br>القسم <br>'.$I{9};
// echo 'r9m milaf '.$nf; exit();
// $_SESSION["أستاذ".$nf.""] = $O{9} ;
// تعريف المتغيرات
$student{18} = $student{19} = $student{20} = $student{21} = $student{22} = $student{23} = $student{24} = $student{25} = $student{26} = $student{27} = $student{28} = $student{29} = $student{30} = $student{31} = $student{32} = $student{33} = $student{34} = $student{35} = $student{36} = $student{37} = $student{38} = $student{39} = $student{40} = $student{41} = $student{42} = $student{43} = $student{44} = $student{45} = $student{46} = $student{47} = $student{48} = $student{49} = $student{50} = $student{51} = $student{52} = $student{53} = $student{54} = $student{55} = $student{56} = $student{57} = $student{58} = $student{59} = $student{60} = $student{61} = $student{62} = $student{63} = $student{64} = $student{65} = $student{66} = $student{67} = $student{68} = $student{69} = $student{70} = $student{71} = $student{72} = $student{73} = $student{74} = $student{75} = $student{76} = $student{77} = $student{78} = $student{79} = $student{80} = $student{81} = $student{82} = $student{83} = $student{84} = $student{85} = $student{86} = $student{87} = $student{88} = $student{89} = $student{90} = $student{91} = $student{92} = $student{93} = $student{94} = $student{95} = $student{96} = $student{97} = $student{98} = $student{99} = $student{100} = $student{101} = $student{102} = $student{103} = $student{104} = $student{105} = $student{106} = $student{107} = $student{108} = $student{109} = $student{110} = $student{111} = $student{112} = $student{113} = $student{114} = $student{115} = $student{116} = $student{117} = $student{118}='';
$max_exist{18} = $max_exist{19} = $max_exist{20} = $max_exist{21} = $max_exist{22} = $max_exist{23} = $max_exist{24} = $max_exist{25} = $max_exist{26} = $max_exist{27} = $max_exist{28} = $max_exist{29} = $max_exist{30} = $max_exist{31} = $max_exist{32} = $max_exist{33} = $max_exist{34} = $max_exist{35} = $max_exist{36} = $max_exist{37} = $max_exist{38} = $max_exist{39} = $max_exist{40} = $max_exist{41} = $max_exist{42} = $max_exist{43} = $max_exist{44} = $max_exist{45} = $max_exist{46} = $max_exist{47} = $max_exist{48} = $max_exist{49} = $max_exist{50} = $max_exist{51} = $max_exist{52} = $max_exist{53} = $max_exist{54} = $max_exist{55} = $max_exist{56} = $max_exist{57} = $max_exist{58} = $max_exist{59} = $max_exist{60} = $max_exist{61} = $max_exist{62} = $max_exist{63} = $max_exist{64} = $max_exist{65} = $max_exist{66} = $max_exist{67} = $max_exist{68} = $max_exist{69} = $max_exist{70} = $max_exist{71} = $max_exist{72} = $max_exist{73} = $max_exist{74} = $max_exist{75} = $max_exist{76} = $max_exist{77} = $max_exist{78} = $max_exist{79} = $max_exist{80} = $max_exist{81} = $max_exist{82} = $max_exist{83} = $max_exist{84} = $max_exist{85} = $max_exist{86} = $max_exist{87} = $max_exist{88} = $max_exist{89} = $max_exist{90} = $max_exist{91} = $max_exist{92} = $max_exist{93} = $max_exist{94} = $max_exist{95} = $max_exist{96} = $max_exist{97} = $max_exist{98} = $max_exist{99} = $max_exist{100} = $max_exist{101} = $max_exist{102} = $max_exist{103} = $max_exist{104} = $max_exist{105} = $max_exist{106} = $max_exist{107} = $max_exist{108} = $max_exist{109} = $max_exist{110} = $max_exist{111} = $max_exist{112} = $max_exist{113} = $max_exist{114} = $max_exist{115} = $max_exist{116} = $max_exist{117} = $max_exist{118} ='0';
$min_exist{18} = $min_exist{19} = $min_exist{20} = $min_exist{21} = $min_exist{22} = $min_exist{23} = $min_exist{24} = $min_exist{25} = $min_exist{26} = $min_exist{27} = $min_exist{28} = $min_exist{29} = $min_exist{30} = $min_exist{31} = $min_exist{32} = $min_exist{33} = $min_exist{34} = $min_exist{35} = $min_exist{36} = $min_exist{37} = $min_exist{38} = $min_exist{39} = $min_exist{40} = $min_exist{41} = $min_exist{42} = $min_exist{43} = $min_exist{44} = $min_exist{45} = $min_exist{46} = $min_exist{47} = $min_exist{48} = $min_exist{49} = $min_exist{50} = $min_exist{51} = $min_exist{52} = $min_exist{53} = $min_exist{54} = $min_exist{55} = $min_exist{56} = $min_exist{57} = $min_exist{58} = $min_exist{59} = $min_exist{60} = $min_exist{61} = $min_exist{62} = $min_exist{63} = $min_exist{64} = $min_exist{65} = $min_exist{66} = $min_exist{67} = $min_exist{68} = $min_exist{69} = $min_exist{70} = $min_exist{71} = $min_exist{72} = $min_exist{73} = $min_exist{74} = $min_exist{75} = $min_exist{76} = $min_exist{77} = $min_exist{78} = $min_exist{79} = $min_exist{80} = $min_exist{81} = $min_exist{82} = $min_exist{83} = $min_exist{84} = $min_exist{85} = $min_exist{86} = $min_exist{87} = $min_exist{88} = $min_exist{89} = $min_exist{90} = $min_exist{91} = $min_exist{92} = $min_exist{93} = $min_exist{94} = $min_exist{95} = $min_exist{96} = $min_exist{97} = $min_exist{98} = $min_exist{99} = $min_exist{100} = $min_exist{101} = $min_exist{102} = $min_exist{103} = $min_exist{104} = $min_exist{105} = $min_exist{106} = $min_exist{107} = $min_exist{108} = $min_exist{109} = $min_exist{110} = $min_exist{111} = $min_exist{112} = $min_exist{113} = $min_exist{114} = $min_exist{115} = $min_exist{116} = $min_exist{117} = $min_exist{118} ='0';



$x = 18;
	while ($x <= 1000){
		 if(!empty($C{$x})){
			 
			 $student{$x}='1'; // حساب عدد التلاميذ
			 $overal_min{$x} = $overal_rate{$x}; //عدد التلاميذ الحاصلون على أدنى معدل
			 
			 if($overal_rate{$x} >= 10 ){$max_exist{$x} = '1';}else{$max_exist{$x} = '0';}
			 if($overal_rate{$x} < 10 ){$min_exist{$x} = '1';}else{$min_exist{$x} = '0';}
			 
			 }else{ 
			 $student{$x}='0';
			 $overal_min{$x} = '40';
			 } 
	$x++; }













/////////////////////////////////////////////////////////////////////////////////////////////
//مجموع التلاميذ
$sum_students =$student{18} + $student{19} + $student{20} + $student{21} + $student{22} + $student{23} + $student{24} + $student{25} + $student{26} + $student{27} + $student{28} + $student{29} + $student{30} + $student{31} + $student{32} + $student{33} + $student{34} + $student{35} + $student{36} + $student{37} + $student{38} + $student{39} + $student{40} + $student{41} + $student{42} + $student{43} + $student{44} + $student{45} + $student{46} + $student{47} + $student{48} + $student{49} + $student{50} + $student{51} + $student{52} + $student{53} + $student{54} + $student{55} + $student{56} + $student{57} + $student{58} + $student{59} + $student{60} + $student{61} + $student{62} + $student{63} + $student{64} + $student{65} + $student{66} + $student{67} + $student{68} + $student{69} + $student{70} + $student{71} + $student{72} + $student{73} + $student{74} + $student{75} + $student{76} + $student{77} + $student{78} + $student{79} + $student{80} + $student{81} + $student{82} + $student{83} + $student{84} + $student{85} + $student{86} + $student{87} + $student{88} + $student{89} + $student{90} + $student{91} + $student{92} + $student{93} + $student{94} + $student{95} + $student{96} + $student{97} + $student{98} + $student{99} + $student{100} + $student{101} + $student{102} + $student{103} + $student{104} + $student{105} + $student{106} + $student{107} + $student{108} + $student{109} + $student{110} + $student{111} + $student{112} + $student{113} + $student{114} + $student{115} + $student{116} + $student{117} + $student{118} ;

$_SESSION["م التلاميذ".$nf.""] = $sum_students;
//echo 'مجموع التلاميذ '.$sum_students;

//المعدل العام للقسم
$mo3adal_l3am= ($overal_rate{18} + $overal_rate{19} + $overal_rate{20} + $overal_rate{21} + $overal_rate{22} + $overal_rate{23} + $overal_rate{24} + $overal_rate{25} + $overal_rate{26} + $overal_rate{27} + $overal_rate{28} + $overal_rate{29} + $overal_rate{30} + $overal_rate{31} + $overal_rate{32} + $overal_rate{33} + $overal_rate{34} + $overal_rate{35} + $overal_rate{36} + $overal_rate{37} + $overal_rate{38} + $overal_rate{39} + $overal_rate{40} + $overal_rate{41} + $overal_rate{42} + $overal_rate{43} + $overal_rate{44} + $overal_rate{45} + $overal_rate{46} + $overal_rate{47} + $overal_rate{48} + $overal_rate{49} + $overal_rate{50} + $overal_rate{51} + $overal_rate{52} + $overal_rate{53} + $overal_rate{54} + $overal_rate{55} + $overal_rate{56} + $overal_rate{57} + $overal_rate{58} + $overal_rate{59} + $overal_rate{60} + $overal_rate{61} + $overal_rate{62} + $overal_rate{63} + $overal_rate{64} + $overal_rate{65} + $overal_rate{66} + $overal_rate{67} + $overal_rate{68} + $overal_rate{69} + $overal_rate{70} + $overal_rate{71} + $overal_rate{72} + $overal_rate{73} + $overal_rate{74} + $overal_rate{75} + $overal_rate{76} + $overal_rate{77} + $overal_rate{78} + $overal_rate{79} + $overal_rate{80} + $overal_rate{81} + $overal_rate{82} + $overal_rate{83} + $overal_rate{84} + $overal_rate{85} + $overal_rate{86} + $overal_rate{87} + $overal_rate{88} + $overal_rate{89} + $overal_rate{90} + $overal_rate{91} + $overal_rate{92} + $overal_rate{93} + $overal_rate{94} + $overal_rate{95} + $overal_rate{96} + $overal_rate{97} + $overal_rate{98} + $overal_rate{99} + $overal_rate{100} + $overal_rate{101} + $overal_rate{102} + $overal_rate{103} + $overal_rate{104} + $overal_rate{105} + $overal_rate{106} + $overal_rate{107} + $overal_rate{108} + $overal_rate{109} + $overal_rate{110} + $overal_rate{111} + $overal_rate{112} + $overal_rate{113} + $overal_rate{114} + $overal_rate{115} + $overal_rate{116} + $overal_rate{117} + $overal_rate{118})/$sum_students;

//أعلى معدل
$max = max ($overal_rate{18} , $overal_rate{19} , $overal_rate{20} , $overal_rate{21} , $overal_rate{22} , $overal_rate{23} , $overal_rate{24} , $overal_rate{25} , $overal_rate{26} , $overal_rate{27} , $overal_rate{28} , $overal_rate{29} , $overal_rate{30} , $overal_rate{31} , $overal_rate{32} , $overal_rate{33} , $overal_rate{34} , $overal_rate{35} , $overal_rate{36} , $overal_rate{37} , $overal_rate{38} , $overal_rate{39} , $overal_rate{40} , $overal_rate{41} , $overal_rate{42} , $overal_rate{43} , $overal_rate{44} , $overal_rate{45} , $overal_rate{46} , $overal_rate{47} , $overal_rate{48} , $overal_rate{49} , $overal_rate{50} , $overal_rate{51} , $overal_rate{52} , $overal_rate{53} , $overal_rate{54} , $overal_rate{55} , $overal_rate{56} , $overal_rate{57} , $overal_rate{58} , $overal_rate{59} , $overal_rate{60} , $overal_rate{61} , $overal_rate{62} , $overal_rate{63} , $overal_rate{64} , $overal_rate{65} , $overal_rate{66} , $overal_rate{67} , $overal_rate{68} , $overal_rate{69} , $overal_rate{70} , $overal_rate{71} , $overal_rate{72} , $overal_rate{73} , $overal_rate{74} , $overal_rate{75} , $overal_rate{76} , $overal_rate{77} , $overal_rate{78} , $overal_rate{79} , $overal_rate{80} , $overal_rate{81} , $overal_rate{82} , $overal_rate{83} , $overal_rate{84} , $overal_rate{85} , $overal_rate{86} , $overal_rate{87} , $overal_rate{88} , $overal_rate{89} , $overal_rate{90} , $overal_rate{91} , $overal_rate{92} , $overal_rate{93} , $overal_rate{94} , $overal_rate{95} , $overal_rate{96} , $overal_rate{97} , $overal_rate{98} , $overal_rate{99} , $overal_rate{100} , $overal_rate{101} , $overal_rate{102} , $overal_rate{103} , $overal_rate{104} , $overal_rate{105} , $overal_rate{106} , $overal_rate{107} , $overal_rate{108} , $overal_rate{109} , $overal_rate{110} , $overal_rate{111} , $overal_rate{112} , $overal_rate{113} , $overal_rate{114} , $overal_rate{115} , $overal_rate{116} , $overal_rate{117} , $overal_rate{118});

//echo $max;










///////////////////////////////////////////////////////////////  توزيع التلاميذ حسب النقط ////////////////////////////////////////////////////
$x =1;
while($x <= 20){
	$_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""] = '';
$x++; }
$number_da3m = '0';

//echo '<table></tr>';
// 0 - 2
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} >= '0')&&($overal_rate{$x} <= '2')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	if($less_than_2_{$x} == '1'){$number_da3m = $number_da3m + 1; $d3m{$x} = '<td style="width:auto;">'.$D{$x}.'</td>';}else{ $d3m{$x} = '';}
	if(($number_da3m == 4)||($number_da3m == 8)||($number_da3m == 12)||($number_da3m == 16)||($number_da3m == 20)||($number_da3m == 24)||($number_da3m == 28)||($number_da3m == 32)||($number_da3m == 36)||($number_da3m == 40)||($number_da3m == 44)||($number_da3m == 48)||($number_da3m == 52)||($number_da3m == 56)||($number_da3m == 60))
	{$d3m_ends{$x} = '</tr><tr>';}else{$d3m_ends{$x} = '';}
    $_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ".$x.""] = $d3m{$x}.$d3m_ends{$x};
   // echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 2".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 2".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 2".$nf.""] * 100 ) / $sum_students;
/// أسماء التلاميذ








/////// 2-4 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '2')&&($overal_rate{$x} <= '4')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	if($less_than_2_{$x} == '1'){$number_da3m = $number_da3m + 1; $d3m{$x} = '<td style="width:auto;">'.$D{$x}.'</td>';}else{ $d3m{$x} = '';}
	if(($number_da3m == 4)||($number_da3m == 8)||($number_da3m == 12)||($number_da3m == 16)||($number_da3m == 20)||($number_da3m == 24)||($number_da3m == 28)||($number_da3m == 32)||($number_da3m == 36)||($number_da3m == 40)||($number_da3m == 44)||($number_da3m == 48)||($number_da3m == 52)||($number_da3m == 56)||($number_da3m == 60))
	{$d3m_ends{$x} = '</tr><tr>';}else{$d3m_ends{$x} = '';}
    $_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ".$x.""] = $d3m{$x}.$d3m_ends{$x};   
   //echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 4".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 4".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 4".$nf.""] * 100 ) / $sum_students;
/////// 4-6 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '4')&&($overal_rate{$x} <= '6')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	if($less_than_2_{$x} == '1'){$number_da3m = $number_da3m + 1; $d3m{$x} = '<td style="width:auto;">'.$D{$x}.'</td>';}else{ $d3m{$x} = '';}
	if(($number_da3m == 4)||($number_da3m == 8)||($number_da3m == 12)||($number_da3m == 16)||($number_da3m == 20)||($number_da3m == 24)||($number_da3m == 28)||($number_da3m == 32)||($number_da3m == 36)||($number_da3m == 40)||($number_da3m == 44)||($number_da3m == 48)||($number_da3m == 52)||($number_da3m == 56)||($number_da3m == 60))
	{$d3m_ends{$x} = '</tr><tr>';}else{$d3m_ends{$x} = '';}
    $_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ".$x.""] = $d3m{$x}.$d3m_ends{$x};
	//echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 6".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 6".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 6".$nf.""] * 100 ) / $sum_students;
/////// 6-8 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '6')&&($overal_rate{$x} <= '8')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	if($less_than_2_{$x} == '1'){$number_da3m = $number_da3m + 1; $d3m{$x} = '<td style="width:auto;">'.$D{$x}.'</td>';}else{ $d3m{$x} = '';}
	if(($number_da3m == 4)||($number_da3m == 8)||($number_da3m == 12)||($number_da3m == 16)||($number_da3m == 20)||($number_da3m == 24)||($number_da3m == 28)||($number_da3m == 32)||($number_da3m == 36)||($number_da3m == 40)||($number_da3m == 44)||($number_da3m == 48)||($number_da3m == 52)||($number_da3m == 56)||($number_da3m == 60))
	{$d3m_ends{$x} = '</tr><tr>';}else{$d3m_ends{$x} = '';}
    $_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ".$x.""] = $d3m{$x}.$d3m_ends{$x};
	//echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 8".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 8".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 8".$nf.""] * 100 ) / $sum_students;
/////// 8-10 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '8')&&($overal_rate{$x} <= '10')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '8')&&($overal_rate{$x} < '10')){$less_than_10_{$x} = '1';}else{$less_than_10_{$x} = '0';}
	if($less_than_10_{$x} == '1'){$number_da3m = $number_da3m + 1; $d3m{$x} = '<td style="width:auto;">'.$D{$x}.'</td>';}else{ $d3m{$x} = '';}
	if(($number_da3m == 4)||($number_da3m == 8)||($number_da3m == 12)||($number_da3m == 16)||($number_da3m == 20)||($number_da3m == 24)||($number_da3m == 28)||($number_da3m == 32)||($number_da3m == 36)||($number_da3m == 40)||($number_da3m == 44)||($number_da3m == 48)||($number_da3m == 52)||($number_da3m == 56)||($number_da3m == 60))
	{$d3m_ends{$x} = '</tr><tr>';}else{$d3m_ends{$x} = '';}
    $_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ".$x.""] = $d3m{$x}.$d3m_ends{$x};
	//echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 10".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 10".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 10".$nf.""] * 100 ) / $sum_students;

/*
$x =18;
while($x <= 118){
	
	echo '$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ'.$x.'"].';
$x++; }
*/
$_SESSION["التلاميذ الذين هم في حاجة إلى الدعم".$nf.""] =  $_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ18"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ19"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ20"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ21"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ22"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ23"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ24"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ25"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ26"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ27"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ28"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ29"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ30"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ31"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ32"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ33"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ34"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ35"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ36"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ37"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ38"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ39"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ40"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ41"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ42"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ43"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ44"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ45"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ46"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ47"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ48"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ49"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ50"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ51"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ52"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ53"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ54"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ55"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ56"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ57"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ58"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ59"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ60"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ61"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ62"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ63"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ64"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ65"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ66"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ67"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ68"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ69"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ70"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ71"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ72"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ73"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ74"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ75"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ76"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ77"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ78"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ79"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ80"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ81"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ82"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ83"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ84"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ85"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ86"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ87"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ88"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ89"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ90"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ91"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ92"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ93"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ94"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ95"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ96"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ97"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ98"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ99"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ100"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ101"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ102"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ103"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ104"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ105"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ106"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ107"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ108"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ109"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ110"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ111"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ112"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ113"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ114"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ115"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ116"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ117"].$_SESSION["لائحة الدعم2أقل".$nf."للتلاميذ118"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ18"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ19"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ20"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ21"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ22"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ23"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ24"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ25"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ26"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ27"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ28"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ29"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ30"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ31"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ32"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ33"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ34"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ35"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ36"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ37"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ38"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ39"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ40"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ41"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ42"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ43"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ44"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ45"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ46"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ47"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ48"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ49"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ50"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ51"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ52"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ53"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ54"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ55"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ56"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ57"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ58"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ59"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ60"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ61"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ62"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ63"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ64"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ65"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ66"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ67"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ68"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ69"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ70"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ71"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ72"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ73"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ74"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ75"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ76"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ77"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ78"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ79"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ80"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ81"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ82"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ83"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ84"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ85"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ86"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ87"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ88"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ89"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ90"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ91"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ92"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ93"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ94"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ95"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ96"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ97"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ98"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ99"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ100"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ101"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ102"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ103"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ104"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ105"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ106"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ107"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ108"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ109"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ110"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ111"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ112"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ113"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ114"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ115"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ116"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ117"].$_SESSION["لائحة الدعم4أقل".$nf."للتلاميذ118"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ18"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ19"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ20"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ21"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ22"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ23"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ24"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ25"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ26"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ27"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ28"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ29"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ30"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ31"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ32"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ33"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ34"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ35"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ36"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ37"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ38"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ39"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ40"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ41"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ42"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ43"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ44"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ45"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ46"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ47"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ48"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ49"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ50"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ51"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ52"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ53"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ54"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ55"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ56"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ57"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ58"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ59"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ60"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ61"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ62"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ63"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ64"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ65"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ66"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ67"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ68"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ69"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ70"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ71"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ72"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ73"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ74"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ75"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ76"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ77"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ78"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ79"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ80"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ81"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ82"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ83"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ84"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ85"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ86"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ87"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ88"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ89"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ90"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ91"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ92"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ93"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ94"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ95"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ96"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ97"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ98"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ99"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ100"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ101"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ102"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ103"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ104"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ105"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ106"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ107"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ108"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ109"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ110"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ111"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ112"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ113"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ114"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ115"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ116"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ117"].$_SESSION["لائحة الدعم6أقل".$nf."للتلاميذ118"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ18"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ19"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ20"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ21"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ22"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ23"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ24"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ25"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ26"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ27"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ28"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ29"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ30"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ31"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ32"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ33"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ34"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ35"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ36"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ37"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ38"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ39"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ40"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ41"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ42"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ43"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ44"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ45"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ46"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ47"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ48"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ49"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ50"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ51"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ52"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ53"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ54"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ55"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ56"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ57"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ58"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ59"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ60"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ61"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ62"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ63"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ64"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ65"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ66"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ67"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ68"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ69"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ70"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ71"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ72"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ73"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ74"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ75"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ76"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ77"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ78"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ79"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ80"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ81"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ82"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ83"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ84"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ85"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ86"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ87"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ88"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ89"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ90"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ91"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ92"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ93"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ94"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ95"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ96"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ97"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ98"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ99"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ100"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ101"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ102"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ103"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ104"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ105"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ106"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ107"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ108"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ109"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ110"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ111"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ112"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ113"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ114"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ115"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ116"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ117"].$_SESSION["لائحة الدعم8أقل".$nf."للتلاميذ118"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ18"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ19"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ20"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ21"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ22"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ23"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ24"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ25"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ26"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ27"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ28"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ29"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ30"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ31"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ32"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ33"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ34"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ35"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ36"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ37"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ38"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ39"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ40"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ41"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ42"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ43"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ44"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ45"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ46"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ47"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ48"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ49"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ50"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ51"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ52"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ53"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ54"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ55"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ56"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ57"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ58"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ59"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ60"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ61"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ62"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ63"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ64"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ65"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ66"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ67"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ68"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ69"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ70"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ71"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ72"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ73"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ74"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ75"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ76"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ77"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ78"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ79"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ80"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ81"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ82"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ83"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ84"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ85"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ86"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ87"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ88"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ89"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ90"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ91"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ92"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ93"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ94"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ95"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ96"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ97"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ98"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ99"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ100"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ101"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ102"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ103"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ104"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ105"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ106"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ107"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ108"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ109"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ110"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ111"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ112"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ113"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ114"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ115"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ116"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ117"].$_SESSION["لائحة الدعم10أقل".$nf."للتلاميذ118"];


/////// 10-12 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '10')&&($overal_rate{$x} <= '12')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}  
   //echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 12".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 12".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 12".$nf.""] * 100 ) / $sum_students;
/////// 12-14 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '12')&&($overal_rate{$x} <= '14')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	//echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 14".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 14".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 14".$nf.""] * 100 ) / $sum_students;
/////// 14-16 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '14')&&($overal_rate{$x} <= '16')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
	//echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 16".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 16".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 16".$nf.""] * 100 ) / $sum_students;


/////// 16-18 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '16')&&($overal_rate{$x} <= '18')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
    //echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 18".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 18".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 18".$nf.""] * 100 ) / $sum_students;
/////// 18-20 
$x =18;
while($x <= 118){
	
	if((!empty($D{$x}))&&($overal_rate{$x} > '18')&&($overal_rate{$x} <= '20')){$less_than_2_{$x} = '1';}else{$less_than_2_{$x} = '0';}
    //echo '$less_than_2_{'.$x.'}+';

$x++; }
$less_than_2_{$nf} =$less_than_2_{18}+$less_than_2_{19}+$less_than_2_{20}+$less_than_2_{21}+$less_than_2_{22}+$less_than_2_{23}+$less_than_2_{24}+$less_than_2_{25}+$less_than_2_{26}+$less_than_2_{27}+$less_than_2_{28}+$less_than_2_{29}+$less_than_2_{30}+$less_than_2_{31}+$less_than_2_{32}+$less_than_2_{33}+$less_than_2_{34}+$less_than_2_{35}+$less_than_2_{36}+$less_than_2_{37}+$less_than_2_{38}+$less_than_2_{39}+$less_than_2_{40}+$less_than_2_{41}+$less_than_2_{42}+$less_than_2_{43}+$less_than_2_{44}+$less_than_2_{45}+$less_than_2_{46}+$less_than_2_{47}+$less_than_2_{48}+$less_than_2_{49}+$less_than_2_{50}+$less_than_2_{51}+$less_than_2_{52}+$less_than_2_{53}+$less_than_2_{54}+$less_than_2_{55}+$less_than_2_{56}+$less_than_2_{57}+$less_than_2_{58}+$less_than_2_{59}+$less_than_2_{60}+$less_than_2_{61}+$less_than_2_{62}+$less_than_2_{63}+$less_than_2_{64}+$less_than_2_{65}+$less_than_2_{66}+$less_than_2_{67}+$less_than_2_{68}+$less_than_2_{69}+$less_than_2_{70}+$less_than_2_{71}+$less_than_2_{72}+$less_than_2_{73}+$less_than_2_{74}+$less_than_2_{75}+$less_than_2_{76}+$less_than_2_{77}+$less_than_2_{78}+$less_than_2_{79}+$less_than_2_{80}+$less_than_2_{81}+$less_than_2_{82}+$less_than_2_{83}+$less_than_2_{84}+$less_than_2_{85}+$less_than_2_{86}+$less_than_2_{87}+$less_than_2_{88}+$less_than_2_{89}+$less_than_2_{90}+$less_than_2_{91}+$less_than_2_{92}+$less_than_2_{93}+$less_than_2_{94}+$less_than_2_{95}+$less_than_2_{96}+$less_than_2_{97}+$less_than_2_{98}+$less_than_2_{99}+$less_than_2_{100}+$less_than_2_{101}+$less_than_2_{102}+$less_than_2_{103}+$less_than_2_{104}+$less_than_2_{105}+$less_than_2_{106}+$less_than_2_{107}+$less_than_2_{108}+$less_than_2_{109}+$less_than_2_{110}+$less_than_2_{111}+$less_than_2_{112}+$less_than_2_{113}+$less_than_2_{114}+$less_than_2_{115}+$less_than_2_{116}+$less_than_2_{117}+$less_than_2_{118};
$_SESSION["عدد الحاصلون على معدل أقل من 20".$nf.""]=$less_than_2_{$nf};
$_SESSION["نسبة الحاصلين على معدل أقل من 20".$nf.""] = ($_SESSION["عدد الحاصلون على معدل أقل من 20".$nf.""] * 100 ) / $sum_students;

////////////////////////////////////////////////////////////// نهاية توزيع التلاميذ حسب النقط ///////////////////////////////////////////////


$x =1;
while($x <= 20){
	
if($_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""] >= 10){$_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""] = substr($_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""],0,5);}else{$_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""] = substr($_SESSION["نسبة الحاصلين على معدل أقل من ".$x."".$nf.""],0,4);}
	
	
$x++; }


// تحديد المعدل الذي حصل عليه أكبر عدد من التلاميذ

 $kbar_nisba = max ( $_SESSION["عدد الحاصلون على معدل أقل من 2".$nf.""],$_SESSION["عدد الحاصلون على معدل أقل من 2".$nf.""] ,$_SESSION["عدد الحاصلون على معدل أقل من 4".$nf.""],$_SESSION["عدد الحاصلون على معدل أقل من 8".$nf.""],$_SESSION["عدد الحاصلون على معدل أقل من 10".$nf.""], $_SESSION["عدد الحاصلون على معدل أقل من 12".$nf.""], $_SESSION["عدد الحاصلون على معدل أقل من 14".$nf.""], $_SESSION["عدد الحاصلون على معدل أقل من 16".$nf.""],$_SESSION["عدد الحاصلون على معدل أقل من 18".$nf.""],$_SESSION["عدد الحاصلون على معدل أقل من 20".$nf.""]);       
		
 $_SESSION["أكبر عدد".$nf.""] = $kbar_nisba;
// العدد والمعدود حول كلمة تلميذ
if($kbar_nisba == 1){$_SESSION["تلميذ".$nf.""] = 'تلميذ واحد';}else
if($kbar_nisba == 2){$_SESSION["تلميذ".$nf.""] = 'تلميذان';}else
if(($kbar_nisba > 2)&&($kbar_nisba < 11)){$_SESSION["تلميذ".$nf.""] = 'تلاميذ';}else
if($kbar_nisba >= 11){$_SESSION["تلميذ".$nf.""] = 'تلميذا';}

// تحديد أكبر نسبة للتلاميذ الذين حصلو على معدل ما

$nisbat_akbar_3adad = ($kbar_nisba * 100 ) / $sum_students;
if($nisbat_akbar_3adad < 10){$_SESSION["نسبة أكبر عدد من التلاميذ".$nf.""] = substr($nisbat_akbar_3adad,0,4);}else{$_SESSION["نسبة أكبر عدد من التلاميذ".$nf.""] = substr($nisbat_akbar_3adad,0,5);}

//// تحديد النقطة التي حصل عليها أكبر عدد من التلاميذ
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 2".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '0 و 2';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 4".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '2 و 4';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 6".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '4 و 6';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 8".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '6 و 8';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 10".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '8 و 10';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 12".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '10 و 12';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 14".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '12 و 14';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 16".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '14 و 16';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 18".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '16 و 18';}else 
 if($kbar_nisba == $_SESSION["عدد الحاصلون على معدل أقل من 20".$nf.""]){$_SESSION["أكبر نسبة".$nf.""] = '18 و 20';}else  
          
          
          
         
         
          
		  








///////////////////////////////////////////////////////////////////// معرفة المعدلات الثلاث وأصحابها ///////////////////////////////////
	$_SESSION["أول معدل".$nf.""] = $_SESSION["ثاني معدل".$nf.""]= $_SESSION["ثالث معدل".$nf.""]='';
//صاحب أعلى معدل
$x = 18;
	while ($x <= 1000){ 
     if($max == $overal_rate{$x}){$sahib_a3la_mo3adal{$x} = $D{$x};   $_SESSION["أول معدل".$nf.""]=$overal_rate{$x}; $number_max1 = $x;}
     if(($max == $overal_rate{$x})&&($_SESSION["أول معدل".$nf.""] >= 10)){$_SESSION["أول معدل".$nf.""] = substr($_SESSION["أول معدل".$nf.""],0,5);}else{$_SESSION["أول معدل".$nf.""] = substr($_SESSION["أول معدل".$nf.""],0,4);}     
	 if(!empty($sahib_a3la_mo3adal{$x})){
     
	 $_SESSION["صاحب أول معدل".$nf.""] = $sahib_a3la_mo3adal{$x};
	 }
    $x++; }


/////////// صاحب ثاني معدل
$x = 18;
	while ($x <= 1000){ 
     if($number_max1 == $x){$overal_rate{$x} = 0;}
$x++; }
$max2 = max ($overal_rate{18} , $overal_rate{19} , $overal_rate{20} , $overal_rate{21} , $overal_rate{22} , $overal_rate{23} , $overal_rate{24} , $overal_rate{25} , $overal_rate{26} , $overal_rate{27} , $overal_rate{28} , $overal_rate{29} , $overal_rate{30} , $overal_rate{31} , $overal_rate{32} , $overal_rate{33} , $overal_rate{34} , $overal_rate{35} , $overal_rate{36} , $overal_rate{37} , $overal_rate{38} , $overal_rate{39} , $overal_rate{40} , $overal_rate{41} , $overal_rate{42} , $overal_rate{43} , $overal_rate{44} , $overal_rate{45} , $overal_rate{46} , $overal_rate{47} , $overal_rate{48} , $overal_rate{49} , $overal_rate{50} , $overal_rate{51} , $overal_rate{52} , $overal_rate{53} , $overal_rate{54} , $overal_rate{55} , $overal_rate{56} , $overal_rate{57} , $overal_rate{58} , $overal_rate{59} , $overal_rate{60} , $overal_rate{61} , $overal_rate{62} , $overal_rate{63} , $overal_rate{64} , $overal_rate{65} , $overal_rate{66} , $overal_rate{67} , $overal_rate{68} , $overal_rate{69} , $overal_rate{70} , $overal_rate{71} , $overal_rate{72} , $overal_rate{73} , $overal_rate{74} , $overal_rate{75} , $overal_rate{76} , $overal_rate{77} , $overal_rate{78} , $overal_rate{79} , $overal_rate{80} , $overal_rate{81} , $overal_rate{82} , $overal_rate{83} , $overal_rate{84} , $overal_rate{85} , $overal_rate{86} , $overal_rate{87} , $overal_rate{88} , $overal_rate{89} , $overal_rate{90} , $overal_rate{91} , $overal_rate{92} , $overal_rate{93} , $overal_rate{94} , $overal_rate{95} , $overal_rate{96} , $overal_rate{97} , $overal_rate{98} , $overal_rate{99} , $overal_rate{100} , $overal_rate{101} , $overal_rate{102} , $overal_rate{103} , $overal_rate{104} , $overal_rate{105} , $overal_rate{106} , $overal_rate{107} , $overal_rate{108} , $overal_rate{109} , $overal_rate{110} , $overal_rate{111} , $overal_rate{112} , $overal_rate{113} , $overal_rate{114} , $overal_rate{115} , $overal_rate{116} , $overal_rate{117} , $overal_rate{118});
$x = 18;
	while ($x <= 1000){ 
     if($max2 == $overal_rate{$x}){$sahib_tani_mo3adal{$x} = $D{$x};   $_SESSION["ثاني معدل".$nf.""]=$overal_rate{$x}; $number_max2 = $x; }
     if($_SESSION["ثاني معدل".$nf.""] >= 10){$_SESSION["ثاني معدل".$nf.""] = substr($_SESSION["ثاني معدل".$nf.""],0,5);}else{$_SESSION["ثاني معدل".$nf.""] = substr($_SESSION["ثاني معدل".$nf.""],0,4);}  
	 if(!empty($sahib_tani_mo3adal{$x})){
     
	 $_SESSION["صاحب ثاني معدل".$nf.""] = $sahib_tani_mo3adal{$x};
	 }
$x++; }
//echo $_SESSION["صاحب ثاني معدل".$nf.""];

////////////// ثالث معدل
$x = 18;
	while ($x <= 1000){ 
     if($number_max2 == $x){$overal_rate{$x} = 0;}
$x++; }
$max3 = max ($overal_rate{18} , $overal_rate{19} , $overal_rate{20} , $overal_rate{21} , $overal_rate{22} , $overal_rate{23} , $overal_rate{24} , $overal_rate{25} , $overal_rate{26} , $overal_rate{27} , $overal_rate{28} , $overal_rate{29} , $overal_rate{30} , $overal_rate{31} , $overal_rate{32} , $overal_rate{33} , $overal_rate{34} , $overal_rate{35} , $overal_rate{36} , $overal_rate{37} , $overal_rate{38} , $overal_rate{39} , $overal_rate{40} , $overal_rate{41} , $overal_rate{42} , $overal_rate{43} , $overal_rate{44} , $overal_rate{45} , $overal_rate{46} , $overal_rate{47} , $overal_rate{48} , $overal_rate{49} , $overal_rate{50} , $overal_rate{51} , $overal_rate{52} , $overal_rate{53} , $overal_rate{54} , $overal_rate{55} , $overal_rate{56} , $overal_rate{57} , $overal_rate{58} , $overal_rate{59} , $overal_rate{60} , $overal_rate{61} , $overal_rate{62} , $overal_rate{63} , $overal_rate{64} , $overal_rate{65} , $overal_rate{66} , $overal_rate{67} , $overal_rate{68} , $overal_rate{69} , $overal_rate{70} , $overal_rate{71} , $overal_rate{72} , $overal_rate{73} , $overal_rate{74} , $overal_rate{75} , $overal_rate{76} , $overal_rate{77} , $overal_rate{78} , $overal_rate{79} , $overal_rate{80} , $overal_rate{81} , $overal_rate{82} , $overal_rate{83} , $overal_rate{84} , $overal_rate{85} , $overal_rate{86} , $overal_rate{87} , $overal_rate{88} , $overal_rate{89} , $overal_rate{90} , $overal_rate{91} , $overal_rate{92} , $overal_rate{93} , $overal_rate{94} , $overal_rate{95} , $overal_rate{96} , $overal_rate{97} , $overal_rate{98} , $overal_rate{99} , $overal_rate{100} , $overal_rate{101} , $overal_rate{102} , $overal_rate{103} , $overal_rate{104} , $overal_rate{105} , $overal_rate{106} , $overal_rate{107} , $overal_rate{108} , $overal_rate{109} , $overal_rate{110} , $overal_rate{111} , $overal_rate{112} , $overal_rate{113} , $overal_rate{114} , $overal_rate{115} , $overal_rate{116} , $overal_rate{117} , $overal_rate{118});
$x = 18;
	while ($x <= 1000){ 
     if($max3 == $overal_rate{$x}){$sahib_talit_mo3adal{$x} = $D{$x};  $_SESSION["ثالث معدل".$nf.""]=$overal_rate{$x};}
     if($_SESSION["ثالث معدل".$nf.""] >= 10){$_SESSION["ثالث معدل".$nf.""] = substr($_SESSION["ثالث معدل".$nf.""],0,5);}else{$_SESSION["ثالث معدل".$nf.""] = substr($_SESSION["ثالث معدل".$nf.""],0,4);}
	 if(!empty($sahib_talit_mo3adal{$x})){
     
	 $_SESSION["صاحب ثالث معدل".$nf.""] = $sahib_talit_mo3adal{$x};
	 }
$x++; }
//////////////////////////// الرتبة

if($_SESSION["أول معدل".$nf.""] == $_SESSION["ثاني معدل".$nf.""]){$_SESSION["الرتبة الثانية".$nf.""] = '1';}else{$_SESSION["الرتبة الثانية".$nf.""] = '2';}
if($_SESSION["أول معدل".$nf.""] == $_SESSION["ثالث معدل".$nf.""]){$_SESSION["الرتبة الثالثة".$nf.""] = '1';}
else if(($_SESSION["ثاني معدل".$nf.""] == $_SESSION["ثالث معدل".$nf.""])||(($_SESSION["أول معدل".$nf.""] == $_SESSION["ثاني معدل".$nf.""])&&($_SESSION["ثاني معدل".$nf.""] != $_SESSION["ثالث معدل".$nf.""]))){$_SESSION["الرتبة الثالثة".$nf.""] = '2';}else{$_SESSION["الرتبة الثالثة".$nf.""] = '3';}

///////////////////////////////////////////////////////////////////////////////////////////// نهاية معرفة المعدلات الثلاث ////////////////////////
























//أدنى معدل
$min = min ($overal_min{18} , $overal_min{19} , $overal_min{20} , $overal_min{21} , $overal_min{22} , $overal_min{23} , $overal_min{24} , $overal_min{25} , $overal_min{26} , $overal_min{27} , $overal_min{28} , $overal_min{29} , $overal_min{30} , $overal_min{31} , $overal_min{32} , $overal_min{33} , $overal_min{34} , $overal_min{35} , $overal_min{36} , $overal_min{37} , $overal_min{38} , $overal_min{39} , $overal_min{40} , $overal_min{41} , $overal_min{42} , $overal_min{43} , $overal_min{44} , $overal_min{45} , $overal_min{46} , $overal_min{47} , $overal_min{48} , $overal_min{49} , $overal_min{50} , $overal_min{51} , $overal_min{52} , $overal_min{53} , $overal_min{54} , $overal_min{55} , $overal_min{56} , $overal_min{57} , $overal_min{58} , $overal_min{59} , $overal_min{60} , $overal_min{61} , $overal_min{62} , $overal_min{63} , $overal_min{64} , $overal_min{65} , $overal_min{66} , $overal_min{67} , $overal_min{68} , $overal_min{69} , $overal_min{70} , $overal_min{71} , $overal_min{72} , $overal_min{73} , $overal_min{74} , $overal_min{75} , $overal_min{76} , $overal_min{77} , $overal_min{78} , $overal_min{79} , $overal_min{80} , $overal_min{81} , $overal_min{82} , $overal_min{83} , $overal_min{84} , $overal_min{85} , $overal_min{86} , $overal_min{87} , $overal_min{88} , $overal_min{89} , $overal_min{90} , $overal_min{91} , $overal_min{92} , $overal_min{93} , $overal_min{94} , $overal_min{95} , $overal_min{96} , $overal_min{97} , $overal_min{98} , $overal_min{99} , $overal_min{100} , $overal_min{101} , $overal_min{102} , $overal_min{103} , $overal_min{104} , $overal_min{105} , $overal_min{106} , $overal_min{107} , $overal_min{108} , $overal_min{109} , $overal_min{110} , $overal_min{111} , $overal_min{112} , $overal_min{113} , $overal_min{114} , $overal_min{115} , $overal_min{116} , $overal_min{117} , $overal_min{118});

//صاحب أدنى معدل
$x = 18;
	while ($x <= 1000){ 
     if($min == $overal_min{$x}){$sahib_adna_mo3adal{$x} = $D{$x};}
     
	 if(!empty($sahib_adna_mo3adal{$x})){
     $_SESSION["sahibadna".$nf."moadal".$x.""] = $sahib_adna_mo3adal{$x};
	 }
$x++; }

/////////////////////////عدد الحاصلون على المعدل 

$mo3adal_exist =($max_exist{18} + $max_exist{19} + $max_exist{20} + $max_exist{21} + $max_exist{22} + $max_exist{23} + $max_exist{24} + $max_exist{25} + $max_exist{26} + $max_exist{27} + $max_exist{28} + $max_exist{29} + $max_exist{30} + $max_exist{31} + $max_exist{32} + $max_exist{33} + $max_exist{34} + $max_exist{35} + $max_exist{36} + $max_exist{37} + $max_exist{38} + $max_exist{39} + $max_exist{40} + $max_exist{41} + $max_exist{42} + $max_exist{43} + $max_exist{44} + $max_exist{45} + $max_exist{46} + $max_exist{47} + $max_exist{48} + $max_exist{49} + $max_exist{50} + $max_exist{51} + $max_exist{52} + $max_exist{53} + $max_exist{54} + $max_exist{55} + $max_exist{56} + $max_exist{57} + $max_exist{58} + $max_exist{59} + $max_exist{60} + $max_exist{61} + $max_exist{62} + $max_exist{63} + $max_exist{64} + $max_exist{65} + $max_exist{66} + $max_exist{67} + $max_exist{68} + $max_exist{69} + $max_exist{70} + $max_exist{71} + $max_exist{72} + $max_exist{73} + $max_exist{74} + $max_exist{75} + $max_exist{76} + $max_exist{77} + $max_exist{78} + $max_exist{79} + $max_exist{80} + $max_exist{81} + $max_exist{82} + $max_exist{83} + $max_exist{84} + $max_exist{85} + $max_exist{86} + $max_exist{87} + $max_exist{88} + $max_exist{89} + $max_exist{90} + $max_exist{91} + $max_exist{92} + $max_exist{93} + $max_exist{94} + $max_exist{95} + $max_exist{96} + $max_exist{97} + $max_exist{98} + $max_exist{99} + $max_exist{100} + $max_exist{101} + $max_exist{102} + $max_exist{103} + $max_exist{104} + $max_exist{105} + $max_exist{106} + $max_exist{107} + $max_exist{108} + $max_exist{109} + $max_exist{110} + $max_exist{111} + $max_exist{112} + $max_exist{113} + $max_exist{114} + $max_exist{115} + $max_exist{116} + $max_exist{117} + $max_exist{118});
$_SESSION["الحاصلون على المعدل".$nf.""] = $mo3adal_exist;
 
 
//////////////////////// عدد غير الحاصلين على المعدل 


$mo3adal_does_not_exist = $min_exist{18} + $min_exist{19} + $min_exist{20} + $min_exist{21} + $min_exist{22} + $min_exist{23} + $min_exist{24} + $min_exist{25} + $min_exist{26} + $min_exist{27} + $min_exist{28} + $min_exist{29} + $min_exist{30} + $min_exist{31} + $min_exist{32} + $min_exist{33} + $min_exist{34} + $min_exist{35} + $min_exist{36} + $min_exist{37} + $min_exist{38} + $min_exist{39} + $min_exist{40} + $min_exist{41} + $min_exist{42} + $min_exist{43} + $min_exist{44} + $min_exist{45} + $min_exist{46} + $min_exist{47} + $min_exist{48} + $min_exist{49} + $min_exist{50} + $min_exist{51} + $min_exist{52} + $min_exist{53} + $min_exist{54} + $min_exist{55} + $min_exist{56} + $min_exist{57} + $min_exist{58} + $min_exist{59} + $min_exist{60} + $min_exist{61} + $min_exist{62} + $min_exist{63} + $min_exist{64} + $min_exist{65} + $min_exist{66} + $min_exist{67} + $min_exist{68} + $min_exist{69} + $min_exist{70} + $min_exist{71} + $min_exist{72} + $min_exist{73} + $min_exist{74} + $min_exist{75} + $min_exist{76} + $min_exist{77} + $min_exist{78} + $min_exist{79} + $min_exist{80} + $min_exist{81} + $min_exist{82} + $min_exist{83} + $min_exist{84} + $min_exist{85} + $min_exist{86} + $min_exist{87} + $min_exist{88} + $min_exist{89} + $min_exist{90} + $min_exist{91} + $min_exist{92} + $min_exist{93} + $min_exist{94} + $min_exist{95} + $min_exist{96} + $min_exist{97} + $min_exist{98} + $min_exist{99} + $min_exist{100} + $min_exist{101} + $min_exist{102} + $min_exist{103} + $min_exist{104} + $min_exist{105} + $min_exist{106} + $min_exist{107} + $min_exist{108} + $min_exist{109} + $min_exist{110} + $min_exist{111} + $min_exist{112} + $min_exist{113} + $min_exist{114} + $min_exist{115} + $min_exist{116} + $min_exist{117} + $min_exist{118};
$_SESSION["غير ح على المعدل".$nf.""] = $mo3adal_does_not_exist;
 
////////////////////// نسبة النجاح 

$nisbat_najah = ($mo3adal_exist * 100 ) / $sum_students;



///////////////////// نسبة عدم النجاح 
 $nisbat_3adam_najah = ($mo3adal_does_not_exist * 100 ) / $sum_students;

 
 
///////////////////////////// حصر أعلى وأدنى معدل للتلاميذ في رقمين بعد الفاصلة
if($mo3adal_l3am > 10){$mo3adal_l3am=substr($mo3adal_l3am,0,5);}else{$mo3adal_l3am=substr($mo3adal_l3am,0,4);}// المعدل العام
$_SESSION["المعدل العام للقسم".$nf.""] = $mo3adal_l3am;

if($max > 10){$max=substr($max,0,5);}else{$max=substr($max,0,4);}// أعلى معدل
$_SESSION["أعلى معدل".$nf.""] = $max;

if($min > 10){$min=substr($min,0,5);}else{$min=substr($min,0,4);}//أدنى معدل
$_SESSION["أدنى معدل".$nf.""] = $min;


$yu=substr($nisbat_najah,5,1);
if($yu > 5){$nisbat_najah = $nisbat_najah + 0.01;}
if($nisbat_najah > 10){$nisbat_najah=substr($nisbat_najah,0,5);}else{$nisbat_najah=substr($nisbat_najah,0,4);}//نسبة النجاح 
$_SESSION["نسبة النجاح".$nf.""]= $nisbat_najah.' %';

$yu=substr($nisbat_3adam_najah,5,1);
if($yu > 5){$nisbat_3adam_najah = $nisbat_3adam_najah + 0.01;}
if($nisbat_3adam_najah > 10){$nisbat_3adam_najah=substr($nisbat_3adam_najah,0,5);}else{$nisbat_3adam_najah=substr($nisbat_3adam_najah,0,4);}//نسبة عدم النجاح
 $_SESSION["نسبة عدم النجاح".$nf.""]= $nisbat_3adam_najah.' %';


$_SESSION["المادة".$nf.""] = $O{11} ;  ////////////// المادة
$_SESSION["الدورة".$nf.""] = $D{11} ;
$_SESSION["الأستاذ الكريم".$nf.""] = $O{9} ;
$_SESSION["الموسم الدراسي".$nf.""] = $D{13} ;




$STD{1}=$STD{2}=$STD{3}=$STD{4}=$STD{5}=$STD{6}=$STD{7}=$STD{8}=$STD{9}=$STD{10}=$STD{11}=$STD{12}=$STD{13}=$STD{14}=$STD{15}=$STD{16}=$STD{17}=$STD{18}=$STD{19}=$STD{20}=$STD{21}=$STD{22}=$STD{23}=$STD{24}=$STD{25}=$STD{26}=$STD{27}=$STD{28}=$STD{29}=$STD{30}=$STD{31}=$STD{32}=$STD{33}=$STD{34}=$STD{35}=$STD{36}=$STD{37}=$STD{38}=$STD{39}=$STD{34}=$STD{41}=$STD{42}=$STD{43}=$STD{44}=$STD{45}=$STD{46}=$STD{47}=$STD{48}=$STD{49}=$STD{50}=$STD{51}=$STD{52}=$STD{53}=$STD{54}=$STD{55}=$STD{56}=$STD{57}=$STD{58}=$STD{59}=$STD{60}=0;
$_SESSION["أستاذ".$nf."قسم"] = $O{9};
$x = ($nf - 1);
while($x >= 0){ 
       if((!empty($_SESSION["أستاذ".$x."قسم"]))&&($_SESSION["أستاذ".$x."قسم"] == $O{9} )){ $STD{$x} = 1; }else{$STD{$x} = 0;}
      
$x--; }
$OSTD{$nf} = $STD{1}+$STD{2}+$STD{3}+$STD{4}+$STD{5}+$STD{6}+$STD{7}+$STD{8}+$STD{9}+$STD{10}+$STD{11}+$STD{12}+$STD{13}+$STD{14}+$STD{15}+$STD{16}+$STD{17}+$STD{18}+$STD{19}+$STD{20}+$STD{21}+$STD{22}+$STD{23}+$STD{24}+$STD{25}+$STD{26}+$STD{27}+$STD{28}+$STD{29}+$STD{30}+$STD{31}+$STD{32}+$STD{33}+$STD{34}+$STD{35}+$STD{36}+$STD{37}+$STD{38}+$STD{39}+$STD{34}+$STD{41}+$STD{42}+$STD{43}+$STD{44}+$STD{45}+$STD{46}+$STD{47}+$STD{48}+$STD{49}+$STD{50}+$STD{51}+$STD{52}+$STD{53}+$STD{54}+$STD{55}+$STD{56}+$STD{57}+$STD{58}+$STD{59}+$STD{60};
if($OSTD{$nf} == 0){$_SESSION["أستاذ".$nf.""] = $O{9};}




////////////////////////////////////////////////////////  لمعرفة رقم القسم ///////////////////////////////////////////////////////
$N_classroom{1}=$N_classroom{2}=$N_classroom{3}=$N_classroom{4}=$N_classroom{5}=$N_classroom{6}=$N_classroom{7}=$N_classroom{8}=$N_classroom{9}=$N_classroom{10}=$N_classroom{11}=$N_classroom{12}=$N_classroom{13}=$N_classroom{14}=$N_classroom{15}=$N_classroom{16}=$N_classroom{17}=$N_classroom{18}=$N_classroom{19}=$N_classroom{20}='';
$number = 1;
while($number <= 20){
	
   if(substr($I{9},$number,1) == '-'){ $after_this_is_number = $number;}	
	
$number++; }
$number = 1;
while($number <= 20){
	
   if(!empty(substr($I{9},($number + $after_this_is_number),1))){$N_classroom{$number} = substr($I{9},($number + $after_this_is_number),1);}	
	
$number++; }
$Number_classroom =$N_classroom{1}.$N_classroom{2}.$N_classroom{3}.$N_classroom{4}.$N_classroom{5}.$N_classroom{6}.$N_classroom{7}.$N_classroom{8}.$N_classroom{9}.$N_classroom{10}.$N_classroom{11}.$N_classroom{12}.$N_classroom{13}.$N_classroom{14}.$N_classroom{15}.$N_classroom{16}.$N_classroom{17}.$N_classroom{18}.$N_classroom{19}.$N_classroom{20};
//echo $Number_classroom;
$_SESSION["القسم-الإسم الكامل".$nf.""] = $D{9}.' '.$Number_classroom;
//echo $_SESSION["القسم-الإسم الكامل".$nf.""];
///////////////////////////////////////////////////// نهاية معرفة رقم القسم ///////////////////////////////////////////////////////
//echo substr($I{9},3,1);







if(empty($_SESSION["r9mKism"])){ $_SESSION["r9mKism"] = 1;}else{$_SESSION["r9mKism"] = $_SESSION["r9mKism"] + 1;}

//$_SESSION["r9m".$nf."kism"] = $nf;
//exit();


//////////////////////////////////////////////////////////////////////// عدد الأقسام المنجزة
if(empty($_SESSION["A9samMonjaza"])){$_SESSION["A9samMonjaza"] = 1;}
elseif(!empty($_SESSION["A9samMonjaza"])){$_SESSION["A9samMonjaza"] =$_SESSION["A9samMonjaza"] + 1;}

 ?>