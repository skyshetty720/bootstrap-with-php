<?php

$server="localhost";
$user="root";
$password="";
$db="signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
}else
{
    ?>
    <script>
        alert("connection problem!!!!");
        </script>
    <?php

}



?>