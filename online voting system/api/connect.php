<?php

   $connect = mysqli_connect("localhost","root","","votings") or die("connection failed!");

    if($connect){
       echo"Connected!";

    }
    else{
       echo"Not Connected!";

   }

?>