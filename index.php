<?php
session_start();
$_SESSION['user'] = 'Mariam';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expense Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Expense Tracker</h2>
  <p align="center">Welcome, <?php echo $_SESSION['user']; ?></p>
  <br><br>
  
  <div class="row">
    <div class="col-sm-offset-3 col-sm-6 text-center">
      <a href="addExpense.php" class="btn btn-default btn-lg btn-block">Add New Expense</a>
      <br>
      <a href="viewExpenses.php" class="btn btn-default btn-lg btn-block">View All Expenses</a>
    </div>
  </div>
</div>

</body>
</html>