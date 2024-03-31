<?php
$pattern1= '/[a-z]/'; // cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern1, $text)){
    echo "Huruf kecil ditemukan";
} else{
    echo "Huruf kecil tidak ditemukan";
}
$pattern2 ='/[0-9]+/'; // cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if(preg_match($pattern2, $text, $matches)) {
    echo "<br>Cocokkan:" . $matches[0];
    echo "<br>";
}
else {
    echo "Tidak ada yang cocok";
}
$pattern3 = "/apple/";
$replacement = "banana";
$text = " I like apple pie.";
$new_text = preg_replace($pattern3, $replacement, $text);
echo $new_text ;
echo "<br>";

// $pattern4 = "/g*ood/";  // Cocokkan "god", "good',"goood"
// $pattern4 = "/go?d/";
$pattern4 = "/go{0,1}d/";
$text = "god is good";

if(preg_match($pattern4, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}
else {
    echo "tidak ada yang cocok";
}

?>