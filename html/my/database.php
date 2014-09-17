<?php

include_once 'config.php';
if(isset($_POST['submit']))
{
$name = $_POST['uname'];

    $pass = $_POST['pwd'];
$role = $_POST['role'];
 
$sql = "INSERT INTO login (username, password, role)VALUES ('$name', '$pass','$role')";
$data = mysql_query($sql);
if($data)
{
   echo "registration sucess";
    
}
else
{
    echo "fail";
}

}