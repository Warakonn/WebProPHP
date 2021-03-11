<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="#" style="text-align: center;font-size:30px">
        row<input type="number" name="row" required>
        col<input type="number" name="col" required>
        <input type="submit" value="ส่งไปไอสัส" name="submit">
    </form>

    <?php if (isset($_GET['submit'])) : ?>
        <?php $row = $_GET['row'];
        $col = $_GET['col'];
        ?>
        <table border="1" >
            <?php for ($r = 1; $r <= $row; $r++) { ?>
                <tr>
                    <?php for ($c = 1; $c <= $col; $c++) { ?>
                        <td><?php echo rand(1,10)?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    <?php endif ?> 




</body>

</html> -->