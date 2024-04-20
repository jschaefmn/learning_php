<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Calculator</title>
</head>
<body>
  <!-- when using a get method, data is in URL, when using post the data doesn't show up -->
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num01" placeholder="Number One">

    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>

    <input type="number" name="num02" placeholder="Number Two">
    <button>Calculate</button>
  </form>

  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       // $num01 = $_GET["num01"]; --> Not secure
      $num01 = $_POST["num01"];

      // grab the data from inputs, filter it and store it in a variable
       $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
       $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
       // filter_input(INPUT_POST, "operator", FILTER_SANITIZE_STRING); --> Deprecated
       $operator = htmlspecialchars($_POST["operator"]);

       // Error handlers
       $errors = false;

       // check to make sure user filled in all fields
       if(empty($num01)|| empty($num02 || empty($operator))){
         echo "<p class ='calc-error'>Fill in all fields!</p>";
         $errors = true;
       }

       // validate user entered a number
       if(!is_numeric($num01) || !is_numeric($num02)){
         echo "<p class ='calc-error'>Only enter a number!</p>";
         $errors = true;
       }

       // calculate numbers if no errors
       if (!$errors) {
         // switch statement to determine which operator to use
         // declare $value with value of 0 in case an error occurs inside switch statement that wasn't
         // caught by the error handlers 
         $value = 0;
         switch($operator) {
           case "add":
             $value = $num01 + $num02;
             break;
            case "subtract":
              $value = $num01 - $num02;
              break;
            case "multiply":
             $value = $num01 * $num02;
             break;
            case "divide":
             $value = $num01 / $num02;
             break;
            default:
             echo "<p class ='calc-error'>Something went wrong</p>";
          }
          echo "<p class='calc-result'>Result = " . $value . "</p>";
        }

    }
  ?>
</body>
</html>