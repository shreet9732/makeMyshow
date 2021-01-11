<html>
    <style>
        .billing_button{
            border-radius: 15%;
            background-color:rgb(148, 24, 24);
            font-size: 20px;
            color: white;
            padding: 12px 20px;
            margin-left: 20%;
            
            border: none;
            cursor: pointer;
            width: 5%;
        } 
        .offers_button{
            border-radius: 15%;
            background-color:rgb(148, 24, 24);
            font-size: 20px;
            color: white;
            padding: 12px 20px;
            margin-left: 20%;
            
            border: none;
            cursor: pointer;
            width: 5%;
        }  
        .header{
            margin-top: 10%;
            margin-left: 20%;
            font-size: 25px;
        } 
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
        a{
            color: white;
            text-decoration: none;
        }
                        

    </style>
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
        <div class= 'header'>
            <h1>Welcome Admin!🔑</h1>
            <h2>What Would You Like Me To View For You?💁</h2>
        </div><br>
        <div class= 'billing_button'>
            <a href='billing.php'>BILLING</a>
        </div><br><br>
        <div class= 'offers_button'>
            <a href='offers.php'>OFFERS</a>
        </div>
    </body>
</html>