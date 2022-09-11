<?php
        include("Connecting.php");
        error_reporting(0);

       $name=$_GET['rn'];

       $query = "DELETE FROM corder WHERE nic = '$nic'";
       
      $data = mysqli_query($conn,$query);

       if($data)
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("data deleted");window.location.href = "adminOrder.blade.php";  }
         
            </script>';
       }
       else
       {
            echo '<script type="text/javascript">

            window.onload = function () { alert("faild to data deleted");window.location.href = "adminOrder.blade.php";  }
         
            </script>';
       }

?>