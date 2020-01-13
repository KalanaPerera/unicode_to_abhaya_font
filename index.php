<?php


function unicode_to_abhaya($text){

    $patterns = array();
    $replacements = array();

    include_once('font_patterns.php');
    include_once('font_replace.php');

return  preg_replace($patterns, $replacements, $text);

}



$unicode = "පැරණි උඩරට රාජධානිය අවට කඳු, සානු, නිම්න, තැනිතලා, දුර්ග හා කපොලු මාර්ග ආ‍ශ්‍රිතව වූ නිවර්තන වර්ෂා වනාන්තර, තැනිතලා මූකලාන්, ලඳු කැළෑ, සහ විශාල තෘණ භූමි පොදුවේ වන දුර්ග යනුවෙන් හඳුන්වාදිය හැකිය. උඩරට රාජධානියේ ආරක්ෂාවට ප්‍රයෝජනවත් වූ මෙම වනාන්තර හරහා ස්වකීය යුද්ධ මෙහෙයුම් කිරීමට පෘතුගිසී, ලන්දේසී, ඉංග්‍රීසි වැනි ත්‍රිවිධ යුරෝපා ආක්‍රමණිකයන්ට අපහසු වූයේ හමුදා ශක්තිය පමණක් නොව ඉහළ ජෛව විවිධත්වයක් උඩරට පැවතිම නිසා ය.";

$unicode2 = "මේ අනුව පෙනී යන්නේ යුරෝපීය ආක්‍රමණිකයන්ට මහත් විනාශයක් උඩරට වනාන්තරවල ජීවත්වන පුහුඩාවන් හෙවත් කුඩැල්ලන් විසින් සිදුකළ බව යි. ඉහත තොරතුරුවලට අනුව විෂ සහිත කුඩැල්ලන් කීපයක් හඳුනාගත හැකිය. එනම් කෘෂ්ණ, කර්බුරා, අලගර්දා, ඉන්දායුධා, සම්ද්‍රිකා, සහ ගොවින්දනා වෙයි";


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@font-face {
    font-family: FMAbhaya;
    src: url(font/FM-Abhaya.TTF);
}
</style>

</head>


<body>

<div style="    font-size: 23px;
    font-weight: bold;font-family:FMAbhaya, Abhaya Libre,Noto Sans Sinhala,Verdana, Lucida Grande,Arial, sans-serif;"> 

<?php echo htmlentities(unicode_to_abhaya($unicode)); ?>




    </div>

    <br/> <br/>

    <div style="    font-size: 23px;
    font-weight: bold;font-family:FMAbhaya, Abhaya Libre,Noto Sans Sinhala,Verdana, Lucida Grande,Arial, sans-serif;"> 

<?php echo htmlentities(unicode_to_abhaya($unicode2)); ?>




    </div>

</body>

</html>