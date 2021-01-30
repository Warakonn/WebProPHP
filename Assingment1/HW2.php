<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
    <center><h1>HW2 : Sum of number</h1>
    Num 1: <input type="text" name="num1"><br>
    <input type="radio" name="operator" value="+"> + :
    <input type="radio" name="operator" value="-"> - :
    <input type="radio" name="operator" value="*"> * :
    <input type="radio" name="operator" value="/"> / :<br>
    Num 2: <input type="text" name="num2"><br>
    <input type="radio" name="operator2" value="+"> + :
    <input type="radio" name="operator2" value="-"> - :
    <input type="radio" name="operator2" value="*"> * :
    <input type="radio" name="operator2" value="/"> / :<br>
    Num 3: <input type="text" name="num3"><br>
    <input type="submit" name="submit" value="Submit"></center>
    </form>

    <?php
        if(isset($_GET["submit"])){
            $ans = 0 ;
            $answer = 0;
            $n1 = $_GET["num1"];
            $n2 = $_GET["num2"];
            $n3 = $_GET["num3"];
            $operator = $_GET["operator"];
            $operator2 = $_GET["operator2"];

            if ($operator == '+')
            {
                $ans = $n1+$n2;
            }

                else if ($operator == '-')
                {
                    $ans = $n1-$n2;
                }

                    else if ($operator == '*')
                    {
                        $ans = $n1*$n2;
                    }

                        else if ($operator == '/')
                        {
                            $ans = $n1/$n2;
                        }

            if ($operator2 == '+')
            {
                $answer = $ans+$n3;
            }

                else if ($operator2 == '-')
                {
                    $answer = $ans-$n3;
                }

                    else if ($operator2 == '*')
                    {
                        $answer = $ans*$n3;
                    }

                        else if ($operator2 == '/')
                        {
                            $answer = $ans/$n3;
                        }
            
            echo "<center><h2>Result is $answer";
        }
?>
</body>
</html>