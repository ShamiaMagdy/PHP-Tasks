<?php
$grade=88;
if($grade >=85 && $grade <=100)
{
    echo "Excllent";
}
else if($grade >=75 && $grade <85)
{
    echo "very good";
}
else if($grade >=65 && $grade <75)
{
    echo "good";
}
else if($grade >=50 && $grade <65)
{
    echo "pass";
}
else 
    echo "Fail";


echo "<br>";

$number =6;
if($number > 0)
{
    if($number %2 ==0)
        echo "Even";
    else 
        echo "Odd";
}
else 
    echo "Negative";

echo "<br>";

//Problem 1:
$name="Donia Hany";
echo "Hello ". $name;

echo "<br>";

//Problem 2:
$x=5;
$y=10;
echo $x ." + " . $y . " = " . $x+$y ."<br>";
echo $x ." - " . $y . " = " . $x-$y ."<br>";
echo $x ." * " . $y . " = " . $x*$y ."<br>";

//Problem 3:
$a=1;
$b=2;
$c=3;
$d=4;
$Diff= ($a*$b)-($c*$d);
echo "Difference = " . $Diff . "<br>";

//Problem 4:
$num1=13;
$num2=12;
$res=($num1%10)+($num2%10);
echo $res ."<br>";

//Problem 5:
$Number2= "4587";
if($Number2[0]%2 ==0)
{
    echo "Even";
}
else echo "Odd";

//problem 6:
$a=15;
$b=7;
$k=3;
if($a>=1 && $b>=1 && $k>=1 && $a<=1018 && $b<=1018 && $k<=1018)
{
    if($a % $k==0 && $b % $k==0)
        echo "Both";
    else if($a%$k==0 && $b%$k!=0)
        echo "Memo";
    else if($a%$k!=0 && $b%$k==0)
        echo "Momo";
    else if($a%$k!=0 && $b%$k!=0)
        echo "No One";
}
echo "<br>";

//problem 7:
$x=2;
$y=3;
if($x-$y==-1 || $x-$y==1)
{
    echo "Yes" . "<br>";
}   
else echo "No" . "<br>";

//problem 8:
$value="39";
if($value[0]%$value[1]==0 || $value[1]%$value[0]==0)
{
    echo "Lucky" . "<br>";
}
else echo "No" . "<br>";
?>