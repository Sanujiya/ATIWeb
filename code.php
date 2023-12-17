<?php
    session_start();
    require 'dbcon.php';

    if(isset($_POST['registration'])){
        $lecName = $_POST['lectname'];
        $email = $_POST['email'];
        $Designation = $_POST['designation'];
        $cid = $_POST['c'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];

        $query = "INSERT INTO lecturer(Name,email, Designation, CourseId, Gender, password)
                    VALUES('$lecName','$email', '$Designation', '$cid', '$gender', '$pass')";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            ?>
                <script>
                    alert("Lecturer Registered!");
                </script>
            <?php
            header("Location: login.php");
        }
    }
    
    

    //Login

    if(isset($_POST['login'])){
        $useremail = $_POST['email'];
        $password = $_POST['pass'];

        $query = "SELECT * from lecturer where email = '$useremail' and password = '$password'";

        $result = mysqli_query($con, $query);

        if($result->num_rows > 0){
            $_SESSION['status'] = "True";
            $_SESSION['userNewEmail'] = $useremail;
            header("Location: dashboard.php");
        }else{
            ?>
                <script>alert("Inavlid Username or Password")</script>
            <?php
        }
    }
?>