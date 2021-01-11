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
    else
    {
        $sql="CALL job_data()";
        if($result=mysqli_query($con,$sql))
        {
            if(mysqli_num_rows($result))
            {
                echo "<html>
                        <head>
                            <style>
                                table {
                                    font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
                                    border-collapse: collapse;
                                    width: 100%;
                                }
                                
                                td,th {
                                    border: 1px solid #ddd;
                                    padding: 8px;
                                }
                                
                                tr:nth-child(even){background-color: #f2f2f2;}
                                
                                tr:hover {background-color: #ddd;}
                                
                                th {
                                    padding-top: 12px;
                                    padding-bottom: 12px;
                                    text-align: left;
                                    background-color: #1f2533;
                                    color: white;
                                }
                                </style>
                            </head>";
                echo "<table>";
                echo "<tr>";
                echo "<th>BILL ID</th>";
                echo "<th>MOVIE ID</th>";
                echo "<th>SEATS</th>";
                echo "<th>ADDRESS</th>";
                echo "<th>PHONE NO</th>";
                echo "<th>MOVIE NAME</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['bill_id'] . "</td>";
                        echo "<td>" . $row['movie_id'] . "</td>";
                        echo "<td>" . $row['seats'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['phone_num'] . "</td>";
                        echo "<td>" . $row['movie_name'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>
                    </html>";
                
                mysqli_free_result($result);
            }
        }
    }
    echo "<html
          <body>"
?>