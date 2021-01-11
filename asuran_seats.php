
<?php

$booked_seats=file('asuran_seats.txt');

echo "           
        <html>
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
                    .seat {
                        margin: 3px;
                        height: 40px;
                        width: 40px;
                        background-color: #fff;
                        border-style: solid;
                        border-radius: 5px;
                        border-color: #fff;
                    }
                    .seats{
                        
                        display: flex;
                        flex-flow: wrap;
                        width:27%;
                        margin-top: 5%;
                        margin-left: 37%;
                    }
                    .seat:active{
                        background-color: #fff;
                    }
                    .seat:after{
                        display: none;
                    }
                    .seat:hover{
                        background-color: #fff; 
                    }
                    .seat_blocked{
                        margin: 3px;
                        height: 40px;
                        width: 40px;
                        background-color: #fff;
                        border-style: solid;
                        border-radius: 5px;
                        border-color: #fff;
                        background_color: #666;
                    }
                    .seat_number{
                        width:20px;
                    }
                    .screen{
                        
                        height: 20px;
                        width: 30%;
                        background-color: grey;
                        margin-top: 5%;
                        margin-left: 35%;
                    }
                    .screen_caption{
                        margin-left:48%;
                    }
                    .submit_container{
                        margin-left: 47%;
                        align:center;
                        
                        
                    }
                    .submit_button{
                        border-radius: 20%;
                        background-color:rgb(148, 24, 24);
                        font-size: 20px;
                        color: white;
                        margin-top: 1%;
                        padding: 12px 12px;
                        border: none;
                        cursor: pointer;
                        width: 15%;
                    }
                    .movie_theatre{
                        margin-top: 5%;
                        font-size: 30px;
                        margin-left: 37%;
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
                    <div class='movie_theatre'>
                        <p><strong>Asuran(Tamil)- PVR- Phoenix</strong></p>
                    </div>
                    <form action='asuran_booked_seats.php' method='POST'>
                    <div class='seats'>";
            $seat="<div class='seat'></div>";
            $seat_num=1;
            
            for($rows=0;$rows<36;$rows++){
                if(in_array($seat_num,$booked_seats))
                    echo "<input type='checkbox' id='".$seat_num ."' value='".$seat_num ."'disabled class='seat_blocked'>";
                else                    
                    echo "<input type='checkbox' name='" .$seat_num ."' value='".$seat_num ."' class='seat'>";
                echo "<p class='seat_number'>".$seat_num ."</p>";
                $seat_num++;                                                 
            }            
            
            echo "</div>
                <div class='screen'/>
                </div>
                <p id='consol' class='screen_caption'>Eyes this way!</p>
                <div class='submit_container'>
                    Phone No.:<input type='number' name='ph_no'>
                    <br>                    
                    <input class='submit_button' type='submit'>
                </div>
                </form>
            </body>
            
        </html>";
?>                

