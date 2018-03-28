<?php

/**
 * 
 * 一个整型数组里除了两个数字之外，其他的数字都出现了两次。
 * 请写程序找出这两个只出现一次的数字。
 * 
 * @return array, 比如[a,b]，其中ab是出现一次的两个数字
 */
class FindNumsAppearOnceInArray
{
    public function FindNumsAppearOnce($array)
    {
        $data = array_count_values($array);
        // asort($data); //排序反而增加了时间

        //方式一
        // $result = array_filter($data, function($v, $k) use (&$a) {
        //     if($v == 1) {
        //         $a[] = $k;
        //     }
        // }, ARRAY_FILTER_USE_BOTH);
        // return $a;

        //方式二
        foreach($data as $k => $v) {
            if($v == 1) {
                $a[] = $k;
            }
        }
        return $a;
    }
}
