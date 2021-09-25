<?php

class Anagram {

    /**
     * @param
     * @var string
     * @var string
     * @return boolean
     */
    public function isAnagram($str1, $str2)
    {
        $content1 = str_split($str1);
        sort($content1);
        
        $content2 = str_split($str2);
        sort($content2);

        if($content1 == $content2){
            print('true');
            print("\n");
            return true;
        }

        print('false');
        print("\n");
        return false;
    }
}

$anagram = new Anagram();
$anagram->isAnagram("arc", "car");
$anagram->isAnagram("aab", "bba");