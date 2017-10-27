<?php
//第一种方式：
/*$content = file_get_contents('php://input');
//print_r($content);
print_r(json_decode($content,true));*/

//第二种方式：
//id=xx&name=xx
print_r($_POST);