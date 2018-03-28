<?php

/**
 *
 * 句子单词的顺序翻转
 * 
 * eg: "student. a am I”。了，正确的句子应该是“I am a student"
 *
 */
class ClassName extends AnotherClass
{
    function ReverseSentence($str)
    {
        $arr = explode(' ', $str);
        return implode(' ', array_reverse($arr, true));
    }
}