<?php

$id = $_GET['id'];

include("dbcon.php");

$sql = "DELETE FROM expenses WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header("Location: viewExpenses.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>