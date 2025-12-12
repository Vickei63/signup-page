
<?php

    $servername = "localhost";
    $username = "root";
    $root = "";
    $dbname = "users";

    $conn = new mysqli($servername,$username,$root,$dbname);

    if($conn -> connect_error){
        die("Db not connected !!!".$conn -> connect_error);
    }
    else{
        echo "";
    }

?>