<html>
    <head>
        <title>XO Game</title>
    </head>

    <body>
        <center>
            <table width="192" height="192" style="text-align: center">
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
                    $count =0;
                    $xwin=0;
                    $owin=0;
                    
                    while ($count != 9)
                    {
                        //Random position
                        $row = rand(0, 2);
                        $col = rand(0, 2);

                        $swap = true;

                        //Place point
                        if ($X_turn)
                            if ($XO_table[$row][$col] == 0){
                                $XO_table[$row][$col] = 1;
                                $count +=1;
                                
                            }
                            else
                                $swap = false;
                        else
                            if ($XO_table[$row][$col] == 0){
                                $XO_table[$row][$col] = 2;
                                $count +=1;
                            }
                            else
                                $swap = false;

                        //If have a winner loop will end
                        // if ($winner != 0)
                        //     break;

                        //Swap Turn
                        if ($swap && ($winner == 0))
                        {
                            $X_turn = !$X_turn;
                            $O_turn = !$O_turn;
                        }
                    }
                    //Check Win
                    $winner = checkWin($XO_table,$xwin,$owin);
                    //Show Table
                    showTable($XO_table);
                ?>

                <?php
                    function checkWin($XO_table,&$xwin,&$owin)
                    {
                        //Case 1
                        //x x x
                        //- - -
                        //- - -
                        if ($XO_table[0][0] == 1 &&
                            $XO_table[0][1] == 1 &&
                            $XO_table[0][2] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][0] == 2 &&
                                 $XO_table[0][1] == 2 &&
                                 $XO_table[0][2] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 2
                        //- - -
                        //x x x
                        //- - -
                        if ($XO_table[1][0] == 1 &&
                            $XO_table[1][1] == 1 &&
                            $XO_table[1][2] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[1][0] == 2 &&
                                 $XO_table[1][1] == 2 &&
                                 $XO_table[1][2] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 3
                        //- - -
                        //- - -
                        //x x x
                        if ($XO_table[2][0] == 1 &&
                            $XO_table[2][1] == 1 &&
                            $XO_table[2][2] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[2][0] == 2 &&
                                 $XO_table[2][1] == 2 &&
                                 $XO_table[2][2] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 4
                        //x - -
                        //x - -
                        //x - -
                        if ($XO_table[0][0] == 1 &&
                            $XO_table[1][0] == 1 &&
                            $XO_table[2][0] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][0] == 2 &&
                                 $XO_table[1][0] == 2 &&
                                 $XO_table[2][0] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 5
                        //- x -
                        //- x -
                        //- x -
                        if ($XO_table[0][1] == 1 &&
                            $XO_table[1][1] == 1 &&
                            $XO_table[2][1] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][1] == 2 &&
                                 $XO_table[1][1] == 2 &&
                                 $XO_table[2][1] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 6
                        //- - x
                        //- - x
                        //- - x
                        if ($XO_table[0][2] == 1 &&
                            $XO_table[1][2] == 1 &&
                            $XO_table[2][2] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][2] == 2 &&
                                 $XO_table[1][2] == 2 &&
                                 $XO_table[2][2] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 7
                        //x - -
                        //- x -
                        //- - x
                        if ($XO_table[0][0] == 1 &&
                            $XO_table[1][1] == 1 &&
                            $XO_table[2][2] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][0] == 2 &&
                                 $XO_table[1][1] == 2 &&
                                 $XO_table[2][2] == 2)
                        {
                            $owin +=1;
                        }

                        //Case 8
                        //- - x
                        //- x -
                        //x - -
                        if ($XO_table[0][2] == 1 &&
                            $XO_table[1][1] == 1 &&
                            $XO_table[2][0] == 1)
                        {
                            $xwin +=1;
                        }
                        else if ($XO_table[0][2] == 2 &&
                                 $XO_table[1][1] == 2 &&
                                 $XO_table[2][0] == 2)
                        {
                            $owin +=1;
                        }
                        if($owin==0&&$xwin==0)
                            return 3;
                        else if($owin==0&&$xwin!=0)
                            return 1;
                        else if($owin!=0&&$xwin==0)
                            return 2;
                        else 
                            return 0;
                    }

                    function showTable($XO_table)
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
                        
                    }
                ?>
            </table>
                <?php 
                echo "<hr width='25%'>";
                echo "<br><hr width='20%'>";
                echo "<br> <h1> Line X : ".$xwin. "</h1>";
                echo "<br> <h1> Line O : ".$owin. "</h1>";
                if ($winner == 1)
                    echo "<br> <h2>WINNER IS <img src='images/1.png'> </h2>";

                else if ($winner == 2)
                    echo "<br> <h2>WINNER IS <img src='images/2.png'></h2>";    
                ?>
        </center>
    </body>
</html>