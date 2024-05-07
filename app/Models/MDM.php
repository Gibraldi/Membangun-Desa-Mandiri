<?php

$connection = mysqli_connect("http://localhost:8080","root","","membangun desa mandiri")

if(!$connection){
    die("Error". mysqli_connect_error());

}

$query = "select * from std_table"

$stmt = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)){

    echo $row['name'] . ' '.$row['fname'].'</br>';
}
?>