<?php

include 'db.php';

if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];


        $sql1 = "INSERT INTO `contact_data`(`id`, `name`, `phone`, `email`, `message`) VALUES ('','".$name."','".$phone."','".$email."','".$message."')";
        if (mysqli_query($mysqli, $sql1)) {

            header('Location: index.html');
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
    }
}


    if (count($_POST) > 0) {
        if ($_POST['type'] == 2) {
            $username = $_POST['username'];
            $password = $_POST['password'];
           
            $sql1 = mysqli_query($mysqli,"SELECT * from `user` where username ='$username' and password='$password'");
            
            $result= mysqli_num_rows($sql1);

            if ($result > 0) {
                header('Location: welcome.html');
            } else {
                header('Location: login.htm');
            }
            mysqli_close($mysqli);
        }
    }


    
    if (count($_POST) > 0) {
        if ($_POST['type'] == 3) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $sql1 = "INSERT INTO `user`( `id`,`username`, `email`,`password`) 
            VALUES ('','" . $username . "', '" . $email . "', '" . $password . "')";
            if (mysqli_query($mysqli, $sql1)) {
                header('Location: login.htm');
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($mysqli);
            }
            mysqli_close($mysqli);
        }
    }





?>