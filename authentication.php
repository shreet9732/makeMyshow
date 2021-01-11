<?php
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
    {
        echo 'Not Connected to Server';
    }
    if(!mysqli_select_db($con,'makemyshow'))
    {
        echo 'Database not selected.';
    }
    else{
        $username= $_POST['username'];
        $password= $_POST['password'];
        $sql="SELECT * FROM user_authentication WHERE username='$username' AND passwd='$password'";
        if(mysqli_num_rows(mysqli_query($con,$sql)))
            header("refresh:1; url=admin.php");
        else
        {
            echo "Authentication Failed";
        }
        
        
    }