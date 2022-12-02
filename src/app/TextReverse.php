<?php

namespace Palam\TextReverse;

class TextReverse
{
public function reverse($string)
{
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

    return implode(" ", $arrayOfReversedWords);

}
}