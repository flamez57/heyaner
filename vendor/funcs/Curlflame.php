<?php
namespace vendor\funcs;

class Curlflame{
    /**
    *Curl post请求
    *@param string $url 请求地址
    *@param array $data 提交的数据
    *@author flame
    *return string
    */
    public static function post($url,$data){
         $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

        $curlflame = curl_exec($ch);
        curl_close($ch);
        return $curlflame;
    }

    
}