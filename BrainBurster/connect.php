<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='brainbruster';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con) {
    echo "SUCCESSFULL";
}
else {
    die(mysqli_error($con));
}
?>