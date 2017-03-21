<?php

$str = 'This is some text. I will be using PHP string functions to change it';

$str_lower = strtolower($str);

$str_uc = ucwords($str);

$str_str = lcfirst($str);

$str_rep = str_replace("PHP",'HTML',$str);

$str_rev = strrev($str);

$str_upper = strtoupper($str);

$str_shuffle = str_shuffle($str);

$str_count = str_word_count($str);

$str_count_char = strlen($str);

$str_sub_count = strpos($str, 'PHP');
?>

<b>Output:</b>
<?php
echo $str_lower;
?>
<br>
<b>Output:</b>
<?php
echo $str_uc;
?>
<br>
<b>Output:</b>
<?php
echo $str_str;
?>
<br>
<b>Output:</b>
<?php
echo $str_rep;
?>
<br>
<b>Output:</b>
<?php
echo $str_rev;
?>
<br>
<b>Output:</b>
<?php
echo $str_upper;
?>
<br>
<b>Output:</b>
<?php
echo $str_shuffle;
?>
<br>
<b>The number of words in the string:</b>
<?php
echo $str_count;
?>
<br>
<b>The number of characters in the string:</b>
<?php
echo $str_count_char;
?>
<br>
<b>The word PHP starts at position :</b>
<?php
echo $str_sub_count;
?>


