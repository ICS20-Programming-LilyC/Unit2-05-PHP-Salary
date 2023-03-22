<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data section-->
    <meta charset="utf-8">
    <meta name="description" content="Salary with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link to css-->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>Area of a Triangle in PHP</title>
  </head>
  <body>
 <?php 
      echo "<h1>Calculating Pay and Tax in PHP Based on Hours Worked and Hourly Rate</h1>";
      echo "<p>Hey there! Input your hours worked and hourly rate in the textfield below to calculate the amount of money you make and how much of your money goes to taxes:</p>";
      echo "<h3>Your Input:</h3>";
    ?>

    <!-- Form for user input -->
    <form action="./results.php" method="post" target="result">
      <label for="hours">Total hours worked:</label>
      <input type="float" id="Total-hours-worked" placeholder="Total hours worked..." name="Total-hours-worked">
      <br><br>
      <label for="rate">Hourly Rate:</label>
      <input type="float" id="hourly-rate" placeholder="Your hourly rate..." name="hourly-rate">
      <br><br>
      <input type="submit" value="Calculate">
    </form>

    <!-- Div for calculations -->
    <iframe id="result" name="result">
    </iframe>
  </body>
</html>