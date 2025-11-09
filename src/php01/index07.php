<?php
function sannkaku( $score1, $score2)
{
  return ($score1 *$score2)/2;
 
//   if ($add>210){
//   echo "合格点は".$add."なので合格です";}
//   else {
//   echo "合格点は".$add."なので不合格です";}
}

echo sannkaku (11, 10)."\n";
echo sannkaku (11, 10);
echo sannkaku (11, 10);