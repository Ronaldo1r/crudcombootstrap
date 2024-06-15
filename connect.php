<?php
        $localhost = "localhost";   //<!-- CONEXÃO COM O BANDO DE DADOS -->//
        $username = "root";
        $password = "";
        $dbname = "samueldb";
 $con = mysqli_connect($localhost, $username, $password,$dbname);
 
if($con->connect_error) { die("connection failed :".$con->connect_error);}

