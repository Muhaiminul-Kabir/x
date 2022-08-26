<?php
function insert_product()
{

        include 'connection.php';

        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

$sqlInsert = 'insert into user values("","sSs","sS","sS","sS","sd","ss")';
$resultInsert = mysqli_query($link, $sqlInsert) or die(mysqli_error($link));
;
exit;
}
insert_product();
?>