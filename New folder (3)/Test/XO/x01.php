<html>
 <head>
 <title>XO Game</title>
 </head>
 <body>
 <center>
 <table border="1" width="192" height="192" style="text-align: center">
 <?php
 $XO_table = array(
 array(0, 0, 0),
 array(0, 0, 0),
 array(0, 0, 0)
 );
 //Starter 1 = X, 2 = O
 $random_starter = rand(1, 2);
 $X_turn = ($random_starter == 1) ? true : false;
 $O_turn = ($random_starter == 2) ? true : false;
 $winner = 0;
 while ($winner == 0)
 {
 //Random position
 $row = rand(0, 2);
 $col = rand(0, 2);
 $swap = true;
 //Place point
 if ($X_turn)
 if ($XO_table[$row][$col] == 0)
 $XO_table[$row][$col] = 1;
 else
 $swap = false;
 else
 if ($XO_table[$row][$col] == 0)
 $XO_table[$row][$col] = 2;
 else
 $swap = false;
 //Check Win
 $winner = checkWin($XO_table);
 //If have a winner loop will end
 if ($winner != 0)
 break;
 //Swap Turn
 if ($swap && ($winner == 0))
 {
 $X_turn = !$X_turn;
 $O_turn = !$O_turn;
 }
 }
 //Show Table
 showTable($XO_table, $winner);
 ?>
 <?php
 function checkWin($XO_table)
 {
 //Case 1
 //x x x
 //- - -
 //- - -
 if ($XO_table[0][0] == 1 &&
 $XO_table[0][1] == 1 &&
 $XO_table[0][2] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][0] == 2 &&
 $XO_table[0][1] == 2 &&
 $XO_table[0][2] == 2)
 {
 return 2;
 }
 //Case 2
 //- - -
 //x x x
 //- - -
 if ($XO_table[1][0] == 1 &&
 $XO_table[1][1] == 1 &&
 $XO_table[1][2] == 1)
 {
 return 1;
 }
 else if ($XO_table[1][0] == 2 &&
 $XO_table[1][1] == 2 &&
 $XO_table[1][2] == 2)
 {
 return 2;
 }
 //Case 3
 //- - -
 //- - -
 //x x x
 if ($XO_table[2][0] == 1 &&
 $XO_table[2][1] == 1 &&
 $XO_table[2][2] == 1)
 {
 return 1;
 }
 else if ($XO_table[2][0] == 2 &&
 $XO_table[2][1] == 2 &&
 $XO_table[2][2] == 2)
 {
 return 2;
 }
 //Case 4
 //x - -
 //x - -
 //x - -
 if ($XO_table[0][0] == 1 &&
 $XO_table[1][0] == 1 &&
 $XO_table[2][0] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][0] == 2 &&
 $XO_table[1][0] == 2 &&
 $XO_table[2][0] == 2)
 {
 return 2;
 }
 //Case 5
 //- x -
 //- x -
 //- x -
 if ($XO_table[0][1] == 1 &&
 $XO_table[1][1] == 1 &&
 $XO_table[2][1] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][1] == 2 &&
 $XO_table[1][1] == 2 &&
 $XO_table[2][1] == 2)
 {
 return 2;
 }
 //Case 6
 //- - x
 //- - x
 //- - x
 if ($XO_table[0][2] == 1 &&
 $XO_table[1][2] == 1 &&
 $XO_table[2][2] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][2] == 2 &&
 $XO_table[1][2] == 2 &&
 $XO_table[2][2] == 2)
 {
 return 2;
 }
 //Case 7
 //x - -
 //- x -
 //- - x
 if ($XO_table[0][0] == 1 &&
 $XO_table[1][1] == 1 &&
 $XO_table[2][2] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][0] == 2 &&
 $XO_table[1][1] == 2 &&
 $XO_table[2][2] == 2)
 {
 return 2;
 }
 //Case 8
 //- - x
 //- x -
 //x - -
 if ($XO_table[0][2] == 1 &&
 $XO_table[1][1] == 1 &&
 $XO_table[2][0] == 1)
 {
 return 1;
 }
 else if ($XO_table[0][2] == 2 &&
 $XO_table[1][1] == 2 &&
 $XO_table[2][0] == 2)
 {
 return 2;
 }
 //Tied Case
 $tied = true;
 //Loop for check empty box
 for ($r = 0; $r < 3; $r++)
 {
 for ($c = 0; $c < 3; $c++)
 {
 if ($XO_table[$r][$c] == 0)
 {
 $tied = false;
 return 0;
 }
 }
 }
 if ($tied)
 return 3;
 //Not Match
 return 0;
 }
 function showTable($XO_table, $winner)
 {
 //Create Row and Col in Table
 for ($r = 0; $r < 3; $r++)
 {
 echo "<tr>";
 for ($c = 0; $c < 3; $c++)
 {
 echo "<td width='64' height='64'>";
 //If table is not Empty
 if ($XO_table[$r][$c] != 0)
 {
 //Place Image for represent value in $XO_table
 $img = $XO_table[$r][$c];
 echo "<img src='images/$img.png'>";
 }
 echo "</td>";
 }
 echo "</tr>";
 }
 //Show Result
 if ($winner == 1)
 echo "<br> <h2>The Winner is X.</h2>";
 else if ($winner == 2)
 echo "<br> <h2>The Winner is O.</h2>";
 else
 echo "<br> <h2>This round is Tied.</h2>";
 }
 ?>
 </table>
 </center>
 </body>
</html>