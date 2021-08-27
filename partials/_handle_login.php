<?php 

$showError= "false";
if($_SERVER["REQUEST_METHOD"]== "POST"){

    include 'connection.php';

    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];



    $sql = " SELECT * FROM users where user_id ='$email' ";

    $result = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);

    if($numRows==1){

        $row = mysqli_fetch_assoc($result);

        if($pass == $row['user_pass'])
        {

            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email;
           
            header('Location: ../index.php');


        }

        else{
            header('Location: ../login.php');
            $alertt=1;
        }
        

        
        
    }

    else{
        header('Location: ../login.php');
        $alertt=1;
    }

}