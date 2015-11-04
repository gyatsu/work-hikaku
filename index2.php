<?php

echo "1番目の数字を入力して下さい\n";
$input1 = fgets(STDIN,4096);

echo "2番目の数字を入力して下さい\n";
$input2 = fgets(STDIN,4096);

echo "数字を比較します!\n";

if($input1 > $input2)
{
  echo "値が大きいのは".$input1."\n";
}
elseif ($input1 < $input2)
{
  echo "値が大きいのは".$input2."\n";
}
else
 echo "入力された値は等しいです\n";