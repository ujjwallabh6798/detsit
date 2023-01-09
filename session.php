<?php


session_start();
if(empty($_SESSION['sname']))
{
echo"<script>window.location='login.php';</script>";
}
?>