<?php
$conn = mysqli_connect("localhost", "root", asdf);
mysqli_select_db($conn, "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM topic");
// sql문
$sql = "insert into topic(title,description,author,created) values (.$_POST['title'].",".$_POST['description'].",".$_POST['author'].","now())";
echo $sql;
?>
