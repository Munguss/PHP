<!DOCTYPE html>
<html>
<head>
<title>004</title>
</head>
<body>

<?php
if (isset($_POST['submit1'])) {
    $num = $_POST['celcius'];
    myFunctionCtoF($num);
}
function myFunctionCtoF($num) {
    $result = ($num*9/5) + 32;
    echo "Result: " . $result;
}

if (isset($_POST['submit2'])) {
    $num = $_POST['number1'];
    myFunction($num);
}
function myFunction($num) {
    $result = $num / 3;
    if ($result >= 1) {
        echo "Result: " . $result;
    }
    else{
        echo "Not Possible";
    }
}


if (isset($_POST['submit3'])) {
    $str = $_POST['string'];
    myFunctionReverse($str);
}
function myFunctionReverse($str) {
    $result = implode(array_reverse(str_split($str)));
    echo "Result: " . $result;

}
?>

<h3>Celsius - Fahrenheit</h3>

<form action="" method="post">
  <input type="text" name="celcius" value="">
  <input type="submit" name="submit1" value="Convert">
</form> 

<h3>Number : 3</h3>

<form action="" method="post">
  <input type="text" name="number1" value="">
  <input type="submit" name="submit2" value="Check">
</form> 

<h3>Sentence - reversed</h3>

<form action="" method="post">
  <input type="text" name="string" value="">
  <input type="submit" name="submit3" value="Reverse">
</form> 


</body>
</html>