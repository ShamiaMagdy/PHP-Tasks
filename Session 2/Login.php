<?php

if($_POST["email"]==$_COOKIE["Email"] && $_POST["password"]==$_COOKIE["password"])
{
    echo "Hello ". $_COOKIE["username"];
}
else 
echo "Please try again ^-^"


?>