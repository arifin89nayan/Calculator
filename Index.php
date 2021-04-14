<?php 
 //ini_set('display_errors',1);
 //error_reporting(E_ALL);
include('Calculator.php');
$calObject = new Calculator;
$result = 0;
if(isset($_POST['operator'])){
    $calObject->setData($_POST);
    //echo "<pre>";
    //print_r($calObject);
    $result = $calObject->calculate();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator-App</title>
    <style>
        .container{
            padding-top:50px;
        }
        .container form{
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #ddd;
            width: 600px;
        }
        .form-group{
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">

<form action="" method="POST">
    <h1>Result: <?php echo $result ?></h1>
   <div class="form-group">
        <label>Number1 : </label> 
        <input type="text" value="<?= $_POST['number1'] ?>" name="number1">
   </div>
   <div class="form-group">
        <label>Number2 : </label> 
        <input type="text" value="<?= $_POST['number2'] ?>" name="number2">
   </div>
   <div class="form-group">
        <label>Operators </label> 
        <select name="operator">
            <option <?= $_POST['operator'] == '+'?'selected':'' ?> value="+">+</option>
            <option <?= $_POST['operator'] == '-'?'selected':'' ?>  value="-">-</option>
            <option <?= $_POST['operator'] == '*'?'selected':'' ?> value="*">*</option>
            <option <?= $_POST['operator'] == '/'?'selected':'' ?>  value="/">/</option>
        </select>
   </div>
   <div class="form-group">
        <input type="submit" value="Calculate">
   </div>
</form>
</div>
</body>
</html>