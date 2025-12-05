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
  <h2 align="center">Add New Expense</h2>
  <br><br>
  <form class="form-horizontal" action="processExpense.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-5" for="amount">Amount:</label>
      <div class="col-sm-7">
        <input type="number" step="0.01" class="form-control" id="amount" placeholder="Enter amount" name="amount">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="description">Description:</label>
      <div class="col-sm-7">          
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="expense_date">Date:</label>
      <div class="col-sm-7">          
        <input type="date" class="form-control" id="expense_date" name="expense_date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="category_id">Category:</label>
      <div class="col-sm-7">
        <select class="form-control" id="category_id" name="category_id">
          <?php
          include("dbcon.php");
          $sql = "SELECT id, name FROM categories";
          $result = mysqli_query($conn, $sql);
          
          while($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
          }
          
          mysqli_close($conn);
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-7">
        <button type="submit" class="btn btn-default">Add Expense</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>