<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#ff9966;">
    <form action="cal_fruit.php" method="POST">
    <select name="fruits" id="fruits">
        <option value=1>pineapple</option>
        <option value=2>banana</option>
        <option value=3>watermelon</option>
    </select>
    <br>
    Width : <input type="number" name="width">
    <br>
    <input type="radio" name="kg" value=1> 1
    <input type="radio" name="kg" value=2> 2
    <input type="radio" name="kg" value=3> 3
    <input type="submit" name="submit" value="ตกลง">
    </form>
</body>
</html>