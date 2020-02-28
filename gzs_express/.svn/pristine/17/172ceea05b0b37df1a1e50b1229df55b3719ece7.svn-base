<?php
/**
 * Created by PhpStorm.
 * User: Wang
 * Date: 2016/10/19
 * Time: 21:22
 */

/**
 * 裁剪字符串
 * @param unknown $str
 * @param unknown $len
 * @return string
 */
function  cutString($str,$len){
    $str=strip_tags($str);
    $strLen=strlen($str);
    //$str=$strLen.$str;
    if($strLen<=$len*3){
        return $str;
    }
    $str=str_replace("&nbsp;", '',$str);//替换空格
    $str=str_replace(" ", '',$str);//替换空格
    return mb_substr($str,0,$len,'utf-8')."...";
}