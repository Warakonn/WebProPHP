<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form method="get" action="#" >
        row<input type="number" min="1" max="10" name="row" required>
        col<input type="number" name="col" required>
        font<input type="number" name="font" required>
        <select name="test">
            <option value="1">test1</option>
            <option value="2">test2</option>
        </select>
        <input type="submit" value="ส่งไปไอสัส" name="submit">
    </form>

    <?php if (isset($_GET['submit'])) : ?>
        <?php $row = $_GET['row'];
        $col = $_GET['col'];
        $font = $_GET['font'];
        ?>
        <table style="border: 1px solid red;border-collapse: collapse;text-align: center">
            <?php for ($r = 1; $r <= $row; $r++) { ?>
                <tr style="border: 1px solid red;border-collapse: collapse;">
                    <?php for ($c = 1; $c <= $col; $c++) { ?>
                        <td style="font-size: <?php echo $font?>px;border: 1px solid red;border-collapse: collapse;"><?php echo rand(1,10)?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    <?php endif ?>

    <a href="test.html"><button>ไป test</button></a>


</body>

</html>