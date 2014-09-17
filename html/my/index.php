<a href="register.php">register</a>
<?php
include('config.php'); 
//$create = "create table logibns (username varchar(20), password varchar(20), role varchar(20))";
//$retvals = mysql_query( $create);
$role =addmis;
$sql = "INSERT INTO logibns (username, password, role)VALUES ('admin', 'admin','$role')";
//$retval = mysql_query( $sql);
if($retval)
{
    //echo "sucess";
}
 else {
    //echo 'not sucess';
}



