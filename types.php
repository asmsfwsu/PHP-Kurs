<?php
//bool tests
$bool=TRUE;
echo $bool;//1
$bool=FALSE;
echo $bool;//NULL
echo '<br>';
var_dump($bool);
echo '<br>';
//TRUE as string
$str='TRUE';
echo $str;
echo '<br>';
//hex
$max=0x7FFFFFFF;
echo $max;//output in decimal
// 
//heredoc (str)

echo <<< METKA
This is example of speech
I'll be new string w/o backspash signs
    Cool!!!
METKA;
//do NOT add ANY of sign in METKA lines!!! Else if get T_SL
//final METKA: M - is ONLY First Letter,else -  unexpected $end on last line 
//tabs and new string will not shown in final HTML!!!

//strings
echo '<br>';
$str2='Hyvaa';
echo $str2{2};

//strlen
echo '<br>';
$len = strlen($str2);
$lastLetter = $str2{strlen($str2)-1};
echo $len;
echo '<br>';
echo $lastLetter;


//atoi in PHP
echo '<br>';
$a='10Jon';
echo (int)$a; //10
//but $a is still '10Jon'
echo '<br>';
$b=(boolean)$a;
echo $b; //true

?>
