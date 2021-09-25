<?php

class Palindrome {

    /**
     * @param
     * @var string
     * @return boolean
     */
    public function isPalindrome($str)
    {
        $content = str_split($str);
        $size = count($content);

        for($i = 0; $i < $size/2; $i++){
            if($content[$i] != $content - $i - 1 ){
                return false;
            }
        }

        return true;
    }
    
}


