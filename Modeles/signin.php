<?php
    function connectDb()
    {
        $db = mysqli_connect("localhost","root", "", "forum");
        if (!$db) 
        {
            die("Connection failed: " . mysqli_connect_error());
            header("Location: /../Vues/signin.php?ErrorConnectDB");
        } 
        return $db;
    }
    function get_user($db,$mail)
    {
        $result=array();
        $qw="select * from user where mail='$mail';";
        $exe=mysqli_query($db,$qw);
        $result=mysqli_fetch_assoc($exe);
        if($result)
        {    
             return $result;
        }
        else header("Location: /../Vues/signin.php?ErrorGetUser");
    }
