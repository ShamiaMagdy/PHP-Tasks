<?php
$users=[
    ["id"=>1 , "firstname"=>"Donia","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>2 , "firstname"=>"Amira","lastname"=>"Hany","salary"=>2000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>3 , "firstname"=>"Yasmine","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>4 , "firstname"=>"Mona","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>false],
    ["id"=>5 , "firstname"=>"Salma","lastname"=>"Hany","salary"=>10000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>6 , "firstname"=>"Jana","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>false],
    ["id"=>7 , "firstname"=>"Ahmed","lastname"=>"Hany","salary"=>7000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>8 , "firstname"=>"Mohamed","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>9 , "firstname"=>"Nona","lastname"=>"Hany","salary"=>15000,"email"=>"donia@gmail.com","isactive"=>true],
    ["id"=>10 , "firstname"=>"Manar","lastname"=>"Hany","salary"=>5000,"email"=>"donia@gmail.com","isactive"=>true]
];
foreach($users as $user)
{
    echo $user["id"] .$user["firstname"] .$user["lastname"] .$user["salary"] .$user["email"] .$user["isactive"] ."<br>";
}
echo "<br>";
foreach($users as $user)
{
    if($user["salary"]<5000)
    {
        echo "junior" ."<br>";
    }
    else if($user["salary"]>=5000 && $user["salary"]<=10000)
    {
        echo "senior" ."<br>";
    }
    if($user["salary"]>10000)
    {
        echo "tech lead" ."<br>";
    }
}

//session_start();
$active_users=array();
foreach($users as $user)
{
    if($user["isactive"])
        array_push($active_users,$user["id"]);

}
$_SESSION["active"]=$active_users;
var_dump($_SESSION);


foreach($_SESSION["active"] as $id)
{
    foreach($users as $user)
    {
        if($user["id"]==$id)
            echo $user["firstname"] ." Active" ."<br>";
    }
        

}
 


?>