
<html>

<head>


</head>
<body>

<?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}
else{
$page = '';
}

class calc{
    var $number1;
    var $number2;


        function Plus($number1,$number2)
        {
            $result = $number1 + $number2;
            echo("The sum of $number1 and $number2 is $result<br><br>");
            echo("$number1 + $number2 = $result");
            exit;
            }

        function Minus($number1,$number2)
        {
            $result = $number1 - $number2;
            echo("$number1 subtract $number2 is $result<br><br>");
            echo("$number1 - $number2 = $result");
            exit;
            }

        function multiply($number1,$number2)
        {
            $result  = $number1 * $number2;
            echo("$number1 multiplied by $number2 is $result<br><br>");
            echo("$number1 * $number2 = $result");
            exit;
            }

        function divide($number1,$number2)
        {
            $result = $number1 / $number2;
            echo("$number1 divided by $number2 is $result<br><br>");
            echo("$number1 / $number2 = $result");
            exit;
        }
}
$calc = new calc();
            ?>

<title>php object oriented calculator</title>
<form name="calc" action="?page=calc" method="POST">
число1: <input type=text name=value1><br>

число2: <input type=text name=value2><br>
DO:

<input type=radio name=oper value="Plus">Plus
<input type=radio name=oper value="Minus">Minus
<input type=radio name=oper value="divide">Division
<input type=radio name=oper value="multiply">Multiply<br>
<input type=submit value="Calculate">
</form> 

<?php
if($page == "calc"){
$number1 = (int)$_POST['value1'];
$number2 = (int)$_POST['value2'];
$oper = $_POST['oper'];
    if(!$number1){
        echo("You must enter number 1!");
        exit;
        }
        if(!$number2){
            echo("You must enter number 2!");
            exit;
            }
        if(!$oper){
            echo("You must select an sign to do with the numbers!");
            exit;
            }

        if($oper == "Plus"){
            $calc->Plus($number1,$number2);
            }

        if ($oper =="Minus"){
            $calc->Minus($number1,$number2);
            }
        if ($oper == "multiply"){
            $calc->multiply($number1,$number2);
            }
        if ($oper == "divide"){
            $calc->divide($number1,$number2);
            }
            }
            ?>
</body>
</html>
