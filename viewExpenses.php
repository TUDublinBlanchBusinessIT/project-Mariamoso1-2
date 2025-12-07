<?php
session_start();
$_SESSION['user'] = 'ExpenseUser';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Expenses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">My Expenses</h2>
  <p align="center">Welcome, <?php echo $_SESSION['user']; ?></p>
  <br><br>

<?php

include("dbcon.php");
include("ExpenseCalculator.php");

$sql = "SELECT id, amount, description, expense_date, category_id FROM expenses";
$result = mysqli_query($conn, $sql);

$expenses = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Date: " . $row["expense_date"] . " - Category: " . $row["category_id"] . " - Amount: " . $row["amount"]. " - Description: " . $row["description"]. "<br>";
        $expenses[] = $row;
    }
} else {
    echo "No expenses found";
}

if (count($expenses) > 0) {
    $calculator = new ExpenseCalculator();
    $total = $calculator->calculateTotal($expenses);
    echo "<br><strong>Total: $" . number_format($total, 2) . "</strong>";
}

mysqli_close($conn);

?>

</div>

</body>
</html>