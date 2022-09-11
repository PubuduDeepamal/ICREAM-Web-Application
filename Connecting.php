<?php

    $host ="localhost:3308";
    $username ="root";
    $password ="";
    $dbname ="icream";

    $conn=mysqli_connect($host,$username,$password,"$dbname");
    
    if($conn)
        {        
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is ok");}

          </script>';  
        }

    else
        {
          echo '<script type="text/javascript">

            window.onload = function () { alert("Database connection is failed");}

          </script>';  
        }
?>