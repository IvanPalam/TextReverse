<?php
/*$string = 'abcd efgh';
$string = implode(' ', array_reverse(explode(' ', $string)));
//var_dump (strrev($string));
print_r (strrev($string)); */
/*
$string = 'a1bcd efg!h';
$string = implode(' ', array_reverse(explode(' ', $string)));
//var_dump (strrev($string));
print_r (strrev($string));
*/

// ЗАДАЧА_____________ a1bcd efg!h -- d1cba hgf!e

$string = 'a1bcd efg!h';
$arrayOfWords = (explode(' ', $string));
$arrayOfReversedWords = [];
foreach ($arrayOfWords as $word) {
    $arrayOfCharacters = str_split($word);
    $alphabeticToArray = [];
    $specialCharacters = [];
    foreach ($arrayOfCharacters as $key => $character) {
        if (ctype_alpha($character)) {
            $alphabeticToArray[$key] = $character;
        } else {
            $specialCharacters[$key] = $character;
        }
    }
    $alphabeticCharaKeys = array_keys($alphabeticToArray);
    $reversedAlphabeticArray = array_reverse($alphabeticToArray);
    $resultAlphaArray = array_combine($alphabeticCharaKeys, $reversedAlphabeticArray);
    $resultArray = $resultAlphaArray + $specialCharacters;
    ksort($resultArray);
    $arrayOfReversedWords[] = implode('', $resultArray);
    }
var_dump($arrayOfReversedWords);
//


























