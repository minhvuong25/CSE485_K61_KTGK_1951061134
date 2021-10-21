<?php
include('./config.php');
if(isset($_GET['patiendtid']))
{
    $id = $_GET['patiendtid'];
    $sql = "delete from patient where patiendtid = '$id' ";
    echo $sql ;
    $rs = mysqli_query($con,$sql);
    if($rs)
    {
        header('location:index.php');
    }
    else 
    {
        header('location:eror.php');
    }
}


?>