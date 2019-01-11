<?php

$score =0;

for($i=1;$i<=count($id);$i++)
{
$ch="c$i";
if($$ch==$answer[$i])
{
$score=$score+1;
}
}
echo "True  ".$score;

?>