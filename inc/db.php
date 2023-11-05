<?php

$con = mysqli_connect('127.0.0.1' , 'root' , ' root' , 'ghpro');
if(!$con){
    echo 'fail : ' . mysqli_connect_error();
}
