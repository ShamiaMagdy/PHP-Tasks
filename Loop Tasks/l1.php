<?php
//problem 1
$N=5;
for($i=1;$i<=$N;$i++)
{
    echo $i ."<br>";
}
echo "<br>";

//problem 2
$num=10;
$flag=true;
for($i=1;$i<=$num;$i++)
{
    if($i%2==0)
    {
        echo $i ."<br>";
        $flag=false;
    }
}
if($flag==true)
{
    echo -1 ."<br>";
}
echo "<br>";

//problem 3
$iterations=5;
$num_arr=[1,8,5,7,5];
$max=$num_arr[0];
for($i=0;$i<count($num_arr);$i++)
{
    if($num_arr[$i]>$max)
    {
        $max=$num_arr[$i];
    }
}
echo $max ."<br>";
echo "<br>";

//problem 4
$nump=7;
$isprime=true;
for($i=2;$i<$nump;$i++)
{
    if($nump%$i==0)
    {
        $isprime=false;
    }
}
if($isprime==true)
    echo "Yes" . "<br>";
else if ($isprime ==false || $nump=1)
    echo "No" . "<br>";

echo "<br>";

//problem 5
echo "<br>";

//problem 6
$num=6;
for($i=1;$i<=$num;$i++)
{
    if($num%$i==0)
    {
        echo $i ."<br>";
    }
}
echo "<br>";

//problem 7
echo "<br>";

//problem 8
$lines=4;
for($i=1;$i<=$lines;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

?>