<?php
    $file = fopen("aadu_seats.txt","a");
    $my_file = 'aadu_seats.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $count_seats=0;
    for($row=1;$row<=36;$row++)
    {
        if(isset($_POST["$row"]))
        {
            $data = "\n$row";
            fwrite($handle,$data);
            $count_seats++;
        }
    }
   
    fclose($file);
    $bill_amount=$count_seats*256;
    $bill_id=rand(1000,9999);
    $phone_number=$_POST['ph_no'];
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
    {
        echo 'CONNECTION TO SERVER FAILED!';
    }
    else
    {
        if(!mysqli_select_db($con,'makemyshow'))
        {
            echo 'ERROR CONNECTING TO DATABASE.';
        }
        else
        {    
            $sql="UPDATE seats SET available_seats=available_seats-$count_seats WHERE movie_id=5";
            if(!mysqli_query($con,$sql))
            {
                echo 'Oops! try again later!';
            }
            else
            {    
                echo "<html>
                        <head>
                            <style>
                            body{
                                background-color: #e5e5e5;
                                margin:0;
                            }
                            .navigation{
                                display: flex;                
                                justify-content: space-between;
                            }
                            .nav_items a:hover {
                                background-color: #5f5553;
                            }
                            .nav_items a {
                                display: block;
                                color: white;
                                padding: 12px;
                                text-align: center;
                                text-decoration: none;
                            }
                            .nav_items {
                                float: right;
                                
                                width: 12%;
                            }
                            .nav_menu {
                                position:fixed;
                                list-style-type: none;
                                margin: 0;
                                padding: 0;
                                overflow: hidden;
                                width: 100%;
                                background-color: #1f2533;
                                
                                }
                            .logo{
                                z-index: 2;
                                width: 10.5%;
                                position:fixed;
                            }
                            .message{
                                margin-top: 10%;
                                margin-left: 20%;
                                font-size: 25px;
                            }
                            .alert{
                                margin-right: 20%;
                            }
                            </style>
                        </head>

                        <body>
                        <div class='navigation'>
                    
                        <ul class='nav_menu'>
                            <li class='nav_items'><a href='contact_us.html'>Contact Us</a></li>
                            <li class='nav_items'><a href='about_us.html'>About Us</a></li>
                            <li class='nav_items'><a href='offers.html'>Offers</a></li>
                            <li class='nav_items'><a href='tabs.html'>Home</a></li>
                        </ul>
                            <img class='logo' width='12%' src ='myyy.jpeg'>
                            
                        </div>

                            <div class='message'>
                                <h1>Thank You For Using makeMyshow!🎬</h1>
                                <p>Your Bill amount is ₹ $bill_amount.😄</p>
                                <p>For Your Bill Id  $bill_id.📰</p><br><br>
                                <hr>
                                <div class='alert'>
                                    <p>!!Do not forget to Produce your Bill Id and Your Phone Number at the Box Office to Collect your TICKETS!!🎞</p>
                                </div>
                            </div>
                        </body>
                    </html>
                            ";
            }
            
            $sql="INSERT INTO billing VALUES('$bill_id',5,'$count_seats','Gopalan','$phone_number')";
            if(!mysqli_query($con,$sql))
            {
                echo 'Trigger! 0 seats selected- Your booking ID is not valid';
            }
            
            mysqli_close($con);
        }
    }
    
    

?>