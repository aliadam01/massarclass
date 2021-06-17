<?php 

/////////////////////////////////// تعريف المتغيرات
$x = 0; 
while($x <= 500){
//echo substr($Encrypt,$x,1)."<br>";
$l{$x} ='';
$x++; }

///////////////// النص
//$Encrypt ='مومن عبد العالي ماما العزيزة ديالي الله يخليها ليا يا ربي ءءء';
$Encrypt = $mada_and_mstwa;

//////////////// عدد أحرف النص
$NEncrypt = strlen($Encrypt);


//////////////////////// التشفير من الفرنسية للعربية
$x = 0;
while($x <= $NEncrypt){
//echo substr($Encrypt,$x,1)."<br>";
/*if((substr($Encrypt,$x,1)) == 'ا'){$l{$x} = 'a'; }else
if((substr($Encrypt,$x,1)) == 'أ'){$l{$x} = 'z'; }else
if((substr($Encrypt,$x,1)) == 'ب'){$l{$x} = 'e'; }else
if((substr($Encrypt,$x,1)) == 'ي'){$l{$x} = 'r'; }else
if((substr($Encrypt,$x,1)) == 'س'){$l{$x} = 't'; }else
if((substr($Encrypt,$x,1)) == 'ش'){$l{$x} = 'y'; }else
if((substr($Encrypt,$x,1)) == 'ض'){$l{$x} = 'u'; }else
if((substr($Encrypt,$x,1)) == 'ص'){$l{$x} = 'i'; }else
if((substr($Encrypt,$x,1)) == 'ث'){$l{$x} = 'o'; }else
if((substr($Encrypt,$x,1)) == 'ق'){$l{$x} = 'p'; }else
if((substr($Encrypt,$x,1)) == 'ف'){$l{$x} = 'm'; }else
if((substr($Encrypt,$x,1)) == 'غ'){$l{$x} = 'l'; }else
if((substr($Encrypt,$x,1)) == 'ع'){$l{$x} = 'k'; }else
if((substr($Encrypt,$x,1)) == 'ه'){$l{$x} = 'j'; }else
if((substr($Encrypt,$x,1)) == 'خ'){$l{$x} = 'h'; }else
if((substr($Encrypt,$x,1)) == 'ح'){$l{$x} = 'g'; }else
if((substr($Encrypt,$x,1)) == 'ج'){$l{$x} = 'f'; }else
if((substr($Encrypt,$x,1)) == 'د'){$l{$x} = 'd'; }else
if((substr($Encrypt,$x,1)) == 'ذ'){$l{$x} = 's'; }else
if((substr($Encrypt,$x,1)) == 'ك'){$l{$x} = 'q'; }else
if((substr($Encrypt,$x,1)) == 'م'){$l{$x} = 'w'; }else
if((substr($Encrypt,$x,1)) == 'ن'){$l{$x} = 'x'; }else
if((substr($Encrypt,$x,1)) == 'ت'){$l{$x} = 'c'; }else
if((substr($Encrypt,$x,1)) == 'ظ'){$l{$x} = 'v'; }else
if((substr($Encrypt,$x,1)) == 'ز'){$l{$x} = 'b'; }else
if((substr($Encrypt,$x,1)) == 'و'){$l{$x} = 'n'; }else
if((substr($Encrypt,$x,1)) == 'ة'){$l{$x} = 'A'; }else
if((substr($Encrypt,$x,1)) == 'ى'){$l{$x} = 'Z'; }else
if((substr($Encrypt,$x,1)) == 'ل'){$l{$x} = 'E'; }else
if((substr($Encrypt,$x,1)) == 'ر'){$l{$x} = 'R'; }else
if((substr($Encrypt,$x,1)) == 'ؤ'){$l{$x} = 'T'; }else
if((substr($Encrypt,$x,1)) == 'ء'){$l{$x} = 'Y'; }else
if((substr($Encrypt,$x,1)) == 'ئ'){$l{$x} = 'U'; }else
if((substr($Encrypt,$x,1)) == 'إ'){$l{$x} = 'I'; }else
if((substr($Encrypt,$x,1)) == 'ـ'){$l{$x} = 'O'; }else
if((substr($Encrypt,$x,1)) == 'ٌّ'){$l{$x} = 'P'; }else
if((substr($Encrypt,$x,1)) == 'ُّ'){$l{$x} = 'M'; }else
if((substr($Encrypt,$x,1)) == 'ًّ'){$l{$x} = 'L'; }else
if((substr($Encrypt,$x,1)) == 'َّ'){$l{$x} = 'K'; }else
if((substr($Encrypt,$x,1)) == 'ِّ'){$l{$x} = 'J'; }else*/

if((substr($Encrypt,$x,2)) == 'ا'){$l{$x} = 'a'; }else
if((substr($Encrypt,$x,2)) == 'أ'){$l{$x} = 'z'; }else
if((substr($Encrypt,$x,2)) == 'ب'){$l{$x} = 'e'; }else
if((substr($Encrypt,$x,2)) == 'ي'){$l{$x} = 'r'; }else
if((substr($Encrypt,$x,2)) == 'س'){$l{$x} = 't'; }else
if((substr($Encrypt,$x,2)) == 'ش'){$l{$x} = 'y'; }else
if((substr($Encrypt,$x,2)) == 'ض'){$l{$x} = 'u'; }else
if((substr($Encrypt,$x,2)) == 'ص'){$l{$x} = 'i'; }else
if((substr($Encrypt,$x,2)) == 'ث'){$l{$x} = 'o'; }else
if((substr($Encrypt,$x,2)) == 'ق'){$l{$x} = 'p'; }else
if((substr($Encrypt,$x,2)) == 'ف'){$l{$x} = 'm'; }else
if((substr($Encrypt,$x,2)) == 'غ'){$l{$x} = 'l'; }else
if((substr($Encrypt,$x,2)) == 'ع'){$l{$x} = 'k'; }else
if((substr($Encrypt,$x,2)) == 'ه'){$l{$x} = 'j'; }else
if((substr($Encrypt,$x,2)) == 'خ'){$l{$x} = 'h'; }else
if((substr($Encrypt,$x,2)) == 'ح'){$l{$x} = 'g'; }else
if((substr($Encrypt,$x,2)) == 'ج'){$l{$x} = 'f'; }else
if((substr($Encrypt,$x,2)) == 'د'){$l{$x} = 'd'; }else
if((substr($Encrypt,$x,2)) == 'ذ'){$l{$x} = 's'; }else
if((substr($Encrypt,$x,2)) == 'ك'){$l{$x} = 'q'; }else
if((substr($Encrypt,$x,2)) == 'م'){$l{$x} = 'w'; }else
if((substr($Encrypt,$x,2)) == 'ن'){$l{$x} = 'x'; }else
if((substr($Encrypt,$x,2)) == 'ت'){$l{$x} = 'c'; }else
if((substr($Encrypt,$x,2)) == 'ظ'){$l{$x} = 'v'; }else
if((substr($Encrypt,$x,2)) == 'ز'){$l{$x} = 'b'; }else
if((substr($Encrypt,$x,2)) == 'و'){$l{$x} = 'n'; }else
if((substr($Encrypt,$x,2)) == 'ة'){$l{$x} = 'A'; }else
if((substr($Encrypt,$x,2)) == 'ى'){$l{$x} = 'Z'; }else
if((substr($Encrypt,$x,2)) == 'ل'){$l{$x} = 'E'; }else
if((substr($Encrypt,$x,2)) == 'ر'){$l{$x} = 'R'; }else
if((substr($Encrypt,$x,2)) == 'ؤ'){$l{$x} = 'T'; }else
if((substr($Encrypt,$x,2)) == 'ء'){$l{$x} = 'Y'; }else
if((substr($Encrypt,$x,2)) == 'ئ'){$l{$x} = 'U'; }else
if((substr($Encrypt,$x,2)) == 'إ'){$l{$x} = 'I'; }else
if((substr($Encrypt,$x,2)) == 'ـ'){$l{$x} = 'O'; }else
if((substr($Encrypt,$x,2)) == 'ٌّ'){$l{$x} = 'P'; }else
if((substr($Encrypt,$x,2)) == 'ُّ'){$l{$x} = 'M'; }else
if((substr($Encrypt,$x,2)) == 'ًّ'){$l{$x} = 'L'; }else
if((substr($Encrypt,$x,2)) == 'َّ'){$l{$x} = 'K'; }else
if((substr($Encrypt,$x,2)) == 'ِّ'){$l{$x} = 'J'; }else

/*if((substr($Encrypt,$x,3)) == 'ا'){$l{$x} = 'a'; }else
if((substr($Encrypt,$x,3)) == 'أ'){$l{$x} = 'z'; }else
if((substr($Encrypt,$x,3)) == 'ب'){$l{$x} = 'e'; }else
if((substr($Encrypt,$x,3)) == 'ي'){$l{$x} = 'r'; }else
if((substr($Encrypt,$x,3)) == 'س'){$l{$x} = 't'; }else
if((substr($Encrypt,$x,3)) == 'ش'){$l{$x} = 'y'; }else
if((substr($Encrypt,$x,3)) == 'ض'){$l{$x} = 'u'; }else
if((substr($Encrypt,$x,3)) == 'ص'){$l{$x} = 'i'; }else
if((substr($Encrypt,$x,3)) == 'ث'){$l{$x} = 'o'; }else
if((substr($Encrypt,$x,3)) == 'ق'){$l{$x} = 'p'; }else
if((substr($Encrypt,$x,3)) == 'ف'){$l{$x} = 'm'; }else
if((substr($Encrypt,$x,3)) == 'غ'){$l{$x} = 'l'; }else
if((substr($Encrypt,$x,3)) == 'ع'){$l{$x} = 'k'; }else
if((substr($Encrypt,$x,3)) == 'ه'){$l{$x} = 'j'; }else
if((substr($Encrypt,$x,3)) == 'خ'){$l{$x} = 'h'; }else
if((substr($Encrypt,$x,3)) == 'ح'){$l{$x} = 'g'; }else
if((substr($Encrypt,$x,3)) == 'ج'){$l{$x} = 'f'; }else
if((substr($Encrypt,$x,3)) == 'د'){$l{$x} = 'd'; }else
if((substr($Encrypt,$x,3)) == 'ذ'){$l{$x} = 's'; }else
if((substr($Encrypt,$x,3)) == 'ك'){$l{$x} = 'q'; }else
if((substr($Encrypt,$x,3)) == 'م'){$l{$x} = 'w'; }else
if((substr($Encrypt,$x,3)) == 'ن'){$l{$x} = 'x'; }else
if((substr($Encrypt,$x,3)) == 'ت'){$l{$x} = 'c'; }else
if((substr($Encrypt,$x,3)) == 'ظ'){$l{$x} = 'v'; }else
if((substr($Encrypt,$x,3)) == 'ز'){$l{$x} = 'b'; }else
if((substr($Encrypt,$x,3)) == 'و'){$l{$x} = 'n'; }else
if((substr($Encrypt,$x,3)) == 'ة'){$l{$x} = 'A'; }else
if((substr($Encrypt,$x,3)) == 'ى'){$l{$x} = 'Z'; }else
if((substr($Encrypt,$x,3)) == 'ل'){$l{$x} = 'E'; }else
if((substr($Encrypt,$x,3)) == 'ر'){$l{$x} = 'R'; }else
if((substr($Encrypt,$x,3)) == 'ؤ'){$l{$x} = 'T'; }else
if((substr($Encrypt,$x,3)) == 'ء'){$l{$x} = 'Y'; }else
if((substr($Encrypt,$x,3)) == 'ئ'){$l{$x} = 'U'; }else
if((substr($Encrypt,$x,3)) == 'إ'){$l{$x} = 'I'; }else
if((substr($Encrypt,$x,3)) == 'ـ'){$l{$x} = 'O'; }else
if((substr($Encrypt,$x,3)) == 'ٌّ'){$l{$x} = 'P'; }else
if((substr($Encrypt,$x,3)) == 'ُّ'){$l{$x} = 'M'; }else
if((substr($Encrypt,$x,3)) == 'ًّ'){$l{$x} = 'L'; }else
if((substr($Encrypt,$x,3)) == 'َّ'){$l{$x} = 'K'; }else
if((substr($Encrypt,$x,3)) == 'ِّ'){$l{$x} = 'J'; }else*/
if(
(substr($Encrypt,$x,1) == '0') ||
(substr($Encrypt,$x,1) == '1') ||
(substr($Encrypt,$x,1) == '2') ||
(substr($Encrypt,$x,1) == '3') ||
(substr($Encrypt,$x,1) == '4') ||
(substr($Encrypt,$x,1) == '5') ||
(substr($Encrypt,$x,1) == '6') ||
(substr($Encrypt,$x,1) == '7') ||
(substr($Encrypt,$x,1) == '8') ||
(substr($Encrypt,$x,1) == '9') ||
(substr($Encrypt,$x,1) == '-') ||
(substr($Encrypt,$x,1) == '_') ||
(substr($Encrypt,$x,1) == ' ')

) {$l{$x} = substr($Encrypt,$x,1); }

else{$l{$x} = ''; }

$x++; }
////////////////////////////////////////////////////


$Encrypt = $l{0}.$l{1}.$l{2}.$l{3}.$l{4}.$l{5}.$l{6}.$l{7}.$l{8}.$l{9}.$l{10}.$l{11}.$l{12}.$l{13}.$l{14}.$l{15}.$l{16}.$l{17}.$l{18}.$l{19}.$l{20}.$l{21}.$l{22}.$l{23}.$l{24}.$l{25}.$l{26}.$l{27}.$l{28}.$l{29}.$l{30}.$l{31}.$l{32}.$l{33}.$l{34}.$l{35}.$l{36}.$l{37}.$l{38}.$l{39}.$l{40}.$l{41}.$l{42}.$l{43}.$l{44}.$l{45}.$l{46}.$l{47}.$l{48}.$l{49}.$l{50}.$l{51}.$l{52}.$l{53}.$l{54}.$l{55}.$l{56}.$l{57}.$l{58}.$l{59}.$l{60}.$l{61}.$l{62}.$l{63}.$l{64}.$l{65}.$l{66}.$l{67}.$l{68}.$l{69}.$l{70}.$l{71}.$l{72}.$l{73}.$l{74}.$l{75}.$l{76}.$l{77}.$l{78}.$l{79}.$l{80}.$l{81}.$l{82}.$l{83}.$l{84}.$l{85}.$l{86}.$l{87}.$l{88}.$l{89}.$l{90}.$l{91}.$l{92}.$l{93}.$l{94}.$l{95}.$l{96}.$l{97}.$l{98}.$l{99}.$l{100}.$l{101}.$l{102}.$l{103}.$l{104}.$l{105}.$l{106}.$l{107}.$l{108}.$l{109}.$l{110}.$l{111}.$l{112}.$l{113}.$l{114}.$l{115}.$l{116}.$l{117}.$l{118}.$l{119}.$l{120}.$l{121}.$l{122}.$l{123}.$l{124}.$l{125}.$l{126}.$l{127}.$l{128}.$l{129}.$l{130}.$l{131}.$l{132}.$l{133}.$l{134}.$l{135}.$l{136}.$l{137}.$l{138}.$l{139}.$l{140}.$l{141}.$l{142}.$l{143}.$l{144}.$l{145}.$l{146}.$l{147}.$l{148}.$l{149}.$l{150}.$l{151}.$l{152}.$l{153}.$l{154}.$l{155}.$l{156}.$l{157}.$l{158}.$l{159}.$l{160}.$l{161}.$l{162}.$l{163}.$l{164}.$l{165}.$l{166}.$l{167}.$l{168}.$l{169}.$l{170}.$l{171}.$l{172}.$l{173}.$l{174}.$l{175}.$l{176}.$l{177}.$l{178}.$l{179}.$l{180}.$l{181}.$l{182}.$l{183}.$l{184}.$l{185}.$l{186}.$l{187}.$l{188}.$l{189}.$l{190}.$l{191}.$l{192}.$l{193}.$l{194}.$l{195}.$l{196}.$l{197}.$l{198}.$l{199}.$l{200}.$l{201}.$l{202}.$l{203}.$l{204}.$l{205}.$l{206}.$l{207}.$l{208}.$l{209}.$l{210}.$l{211}.$l{212}.$l{213}.$l{214}.$l{215}.$l{216}.$l{217}.$l{218}.$l{219}.$l{220}.$l{221}.$l{222}.$l{223}.$l{224}.$l{225}.$l{226}.$l{227}.$l{228}.$l{229}.$l{230}.$l{231}.$l{232}.$l{233}.$l{234}.$l{235}.$l{236}.$l{237}.$l{238}.$l{239}.$l{240}.$l{241}.$l{242}.$l{243}.$l{244}.$l{245}.$l{246}.$l{247}.$l{248}.$l{249}.$l{250}.$l{251}.$l{252}.$l{253}.$l{254}.$l{255}.$l{256}.$l{257}.$l{258}.$l{259}.$l{260}.$l{261}.$l{262}.$l{263}.$l{264}.$l{265}.$l{266}.$l{267}.$l{268}.$l{269}.$l{270}.$l{271}.$l{272}.$l{273}.$l{274}.$l{275}.$l{276}.$l{277}.$l{278}.$l{279}.$l{280}.$l{281}.$l{282}.$l{283}.$l{284}.$l{285}.$l{286}.$l{287}.$l{288}.$l{289}.$l{290}.$l{291}.$l{292}.$l{293}.$l{294}.$l{295}.$l{296}.$l{297}.$l{298}.$l{299}.$l{300}.$l{301}.$l{302}.$l{303}.$l{304}.$l{305}.$l{306}.$l{307}.$l{308}.$l{309}.$l{310}.$l{311}.$l{312}.$l{313}.$l{314}.$l{315}.$l{316}.$l{317}.$l{318}.$l{319}.$l{320}.$l{321}.$l{322}.$l{323}.$l{324}.$l{325}.$l{326}.$l{327}.$l{328}.$l{329}.$l{330}.$l{331}.$l{332}.$l{333}.$l{334}.$l{335}.$l{336}.$l{337}.$l{338}.$l{339}.$l{340}.$l{341}.$l{342}.$l{343}.$l{344}.$l{345}.$l{346}.$l{347}.$l{348}.$l{349}.$l{350}.$l{351}.$l{352}.$l{353}.$l{354}.$l{355}.$l{356}.$l{357}.$l{358}.$l{359}.$l{360}.$l{361}.$l{362}.$l{363}.$l{364}.$l{365}.$l{366}.$l{367}.$l{368}.$l{369}.$l{370}.$l{371}.$l{372}.$l{373}.$l{374}.$l{375}.$l{376}.$l{377}.$l{378}.$l{379}.$l{380}.$l{381}.$l{382}.$l{383}.$l{384}.$l{385}.$l{386}.$l{387}.$l{388}.$l{389}.$l{390}.$l{391}.$l{392}.$l{393}.$l{394}.$l{395}.$l{396}.$l{397}.$l{398}.$l{399}.$l{400}.$l{401}.$l{402}.$l{403}.$l{404}.$l{405}.$l{406}.$l{407}.$l{408}.$l{409}.$l{410}.$l{411}.$l{412}.$l{413}.$l{414}.$l{415}.$l{416}.$l{417}.$l{418}.$l{419}.$l{420}.$l{421}.$l{422}.$l{423}.$l{424}.$l{425}.$l{426}.$l{427}.$l{428}.$l{429}.$l{430}.$l{431}.$l{432}.$l{433}.$l{434}.$l{435}.$l{436}.$l{437}.$l{438}.$l{439}.$l{440}.$l{441}.$l{442}.$l{443}.$l{444}.$l{445}.$l{446}.$l{447}.$l{448}.$l{449}.$l{450}.$l{451}.$l{452}.$l{453}.$l{454}.$l{455}.$l{456}.$l{457}.$l{458}.$l{459}.$l{460}.$l{461}.$l{462}.$l{463}.$l{464}.$l{465}.$l{466}.$l{467}.$l{468}.$l{469}.$l{470}.$l{471}.$l{472}.$l{473}.$l{474}.$l{475}.$l{476}.$l{477}.$l{478}.$l{479}.$l{480}.$l{481}.$l{482}.$l{483}.$l{484}.$l{485}.$l{486}.$l{487}.$l{488}.$l{489}.$l{490}.$l{491}.$l{492}.$l{493}.$l{494}.$l{495}.$l{496}.$l{497}.$l{498}.$l{499}.$l{500};

//echo $Encrypt;
$encryptIN = $Encrypt;



?>