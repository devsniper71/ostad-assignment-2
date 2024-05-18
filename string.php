<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($str)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
