<?php

$str = $_POST['getInfo'];

$str_lower = strtolower($str);

$str_uc = ucwords($str);

$str_str = lcfirst($str);

$str_rev = strrev($str);

$str_upper = strtoupper($str);

$str_shuffle = str_shuffle($str);

$str_count = str_word_count($str);

$str_count_char = strlen($str);

if (strpos($str, 'Hello World') !== false) {
    $antwoord = "yes";
} else {
    $antwoord = "no";
}

?>
<form method="post">
    <input type="search" name="getInfo" onchange="submit.this.form()">
</form>

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
<b>Word er Hello World gebruikt?</b>
<?php
echo $antwoord;
?>


