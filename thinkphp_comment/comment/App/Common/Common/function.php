<?php
/**
 * Created by PhpStorm.
 * User: yanluan
 * Date: 15/11/4
 * Time: 下午2:41
 */


// 评论显示替换表情标签
function reFace($str){
    for($i=1;$i<76;$i++){

        $str = str_replace("[em_$i]","<img src='../../../../comment/Public/Face/$i.gif'/>",$str);
    }
    return $str;
}

