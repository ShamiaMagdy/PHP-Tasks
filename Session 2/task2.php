<?php

//echo $_POST["email"];
//echo $_POST["username"];
//echo $_POST["password"];

setcookie("Email",$_POST["email"]);
setcookie("username",$_POST["username"]);
setcookie("password",$_POST["password"]);
//$data=$_COOKIE;

header('Location: http://localhost/Task2/login.html');

/*if($_POST["email"]==$_COOKIE["Email"] && $_POST["password"]==$_COOKIE["password"])
{
    echo "Hello ". $_POST["username"];
}*/


?>