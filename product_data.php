<?php

require_once 'class.php';
include 'connection.php';

$products = array();






//variables


$email = "";

//sql

$sqlx = "SELECT * FROM product";

$sqlv = "SELECT * FROM product where type='vegi'";
$sqlf = "SELECT * FROM product where type='fruit'";
$sqls = "SELECT * FROM product where type='spice'";
$sqlo = "SELECT * FROM `product` where type = 'other';";

$sqlfav = "SELECT * FROM `favourites` where user = ;";



//rsult fetch
$resultx = mysqli_query($link, $sqlx);

$resultv = mysqli_query($link, $sqlv);
$resultf = mysqli_query($link, $sqlf);
$results = mysqli_query($link, $sqls);
$resulto = mysqli_query($link, $sqlo);

//noofdata
$noOfDatav = mysqli_num_rows($resultv);
$noOfDataf = mysqli_num_rows($resultf);
$noOfDatas = mysqli_num_rows($results);
$noOfDatao = mysqli_num_rows($resulto);

$noOfDatax = mysqli_num_rows($resultx);








$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $products[$i] = new pt();
        
        $products[$i]->name = $row['Name'];
        $products[$i]->price = $row['Price'];
        $products[$i]->rate = $row['Ratings'];
        $products[$i]->path = $row['path'];
       
        $products[$i]->type = $row['type'];
       

        $i++;
}
