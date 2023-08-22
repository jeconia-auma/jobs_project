<?php
    //get the connection module.
    require_once('config/conn.php');
    
    if(isset($_POST['login'])){
        //Get all the details from the form
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        //create the sql statement to query the database
        $sql = "SELECT * FROM users WHERE email='$email' AND pass='$password'";
        
        //query the database
        $query = mysqli_query($conn, $sql);

        //check to see if the query was successful.
        if($query){
            //if successful check the number of rows returned by the query.
            if(mysqli_num_rows($query) > 0){
                echo "done";
            }else{
                echo "Invalid user or password";
            }
        }else {
            echo 'failed'.mysqli_error($conn);
        }

    }elseif(isset($_POST['signup'])){
        //Get all the details from the form
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
    }else{
        echo 'login or signup failed';
    }
?>