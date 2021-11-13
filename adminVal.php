<?php 
    if(isset($_POST['un'])){
    $username = $_POST['un'];
    $password = $_POST['pass'];
    
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPass = "";
    $db = "project";

    $con = mysqli_connect($host,$dbUsername,$dbPass,$db);

    if($con){
            $q = "SELECT * from admin where username='".$username."' and password='".$password."'";
            $result = mysqli_query($con,$q);

            if(mysqli_num_rows($result) > 0){
                echo "true";
            }
            
            if(mysqli_num_rows($result) == 0){
                echo "false";
            }
        }
        
}
?>