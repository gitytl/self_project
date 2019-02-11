<?php
/**
 * Created by PhpStorm.
 * User: administer
 * Date: 2018/10/29
 * Time: 17:16
 */
    //1.建立连接
        $connect=mysqli_connect('localhost','root','root','ytl','3306');
if(!$connect) echo "FAILD!连接错误，用户名密码不对";
else echo "OK!可以连接";
/*//2.定义sql语句
        $sql='select * from liukai';
        mysqli_query($connect,'set names utf8');
    //3.发送SQL语句
        $result=mysqli_query($connect,$sql);
        $arr=array();//定义空数组
        while($row =mysqli_fetch_array($result)){
            //var_dump($row);
            //array_push(要存入的数组，要存的值)
            array_push($arr,$row);
        }
        var_dump($arr);*/
    //4.关闭连接
       mysqli_close($connect);
