<?php 
include_once '../access/connect.php';
session_start();
if(!isset($_SESSION['sid']))
{
    echo "<script>window.location='../access/403.php'</script>";
}
else
{
    $globalsid=$_SESSION['sid'];
    $globalsname=$_SESSION['sname'];
}
?>