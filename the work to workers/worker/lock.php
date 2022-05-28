<?php
session_start();
if(count($_SESSION)<=0)
{
header("location:../index.php");
}
?>