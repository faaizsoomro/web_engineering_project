<?php
    if(!isset($_COOKIE['username'])){
        header('location:login.html');
    }
    
    if(isset($_POST['un'])){
    $username = $_POST['un'];
    $password = $_POST['pass'];
    $userType = $_POST['type'];
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPass = "";
    $db = "project";

    $con = mysqli_connect($host,$dbUsername,$dbPass,$db);

    if($con){
        if($userType == "patient")
        {
            $q = "SELECT * from patient where username='".$username."' and password='".$password."'";
            $result = mysqli_query($con,$q);

            if(mysqli_num_rows($result) > 0){
                setcookie("username",$username,time()+60,'/');
                setcookie("usertype",$userType,time()+60,'/');
                echo "pTrue";
            }
            
            if(mysqli_num_rows($result) == 0){
                echo "pFalse";
            }
             
            
        }
        else if($userType == "doctor"){
            $q = "SELECT * from doctor where username='".$username."' and password='".$password."'";
            $result = mysqli_query($con,$q);

            if(mysqli_num_rows($result) > 0){
                setcookie("username",$username,time()+60,'/');
                setcookie("usertype",$userType,time()+60,'/');
                echo "dTrue";
            }
            
            if(mysqli_num_rows($result) == 0){
                echo "dFalse";
            }
        }
}
}
?>