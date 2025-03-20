<?php
$player1_roll=rand(1,6);
$player2_roll=rand(1,6);
echo "Player 1 rolled: ".$player1_roll."\n";
echo "Player 2 rolled: ".$player2_roll."\n";
if($player1_roll>$player2_roll)
echo "Player 1 wins!";
elseif($player1_roll<$player2_roll)
echo "Player 2 wins!";
else echo "Its a tie";
?>