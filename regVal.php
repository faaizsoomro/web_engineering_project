<?php 
    if(isset($_POST['un'])){
        $username = $_POST['un'];
        $password = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $pnum = $_POST['pnum'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPass = "";
        $db = "project";

        $con = mysqli_connect($host,$dbUsername,$dbPass,$db);

        if($con){
                $check = "SELECT * from patient where username='".$username."'";
                $r = mysqli_query($con,$check);

                if(mysqli_num_rows($r) > 0){
                    echo $username." already taken Please choose another";
                }

                if(mysqli_num_rows($r) == 0){
                   $q = "INSERT into patient (username,password,full_name,phone_num,address,email,Gender,age)
                        values ('".$username."','".$password."','".$fullname."','".$pnum."','".$address."','".$email."','".$gender."','".$age."')
                   ";
                    $result = mysqli_query($con,$q);
                   if($result){
                       echo true;
                   }
                }

}
}
?>