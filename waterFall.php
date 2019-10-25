<?php
// $cb= $_GET['callback'];
$uname = $_GET['username'];
if($uname == '123'){
    echo json_encode('[{src:"img/12.png"},
    {src:"img/11.png"},
    {src:"img/1.png"},
    {src:"img/14.png"},
    {src:"img/5.png"},
    {src:"img/13.png"},
    {src:"img/4.png"},
    {src:"img/7.png"},
    {src:"img/6.png"},
    {src:"img/3.png"},
    {src:"img/2.png"},
    {src:"img/9.png"},
    {src:"img/8.png"}]');
}else{
    echo $cb.'('."'hello'".')';
}
?>