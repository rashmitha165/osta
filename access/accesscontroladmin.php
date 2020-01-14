<?php 
include_once '../access/connect.php';
session_start();
if(!isset($_SESSION['aid']))
{
    echo "<script>window.location='../access/403.php'</script>";
}
else
{
    $globalaid=$_SESSION['aid'];
    $globalname=$_SESSION['aname'];
}
?>