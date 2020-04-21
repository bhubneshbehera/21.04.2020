<?php
$friends=array("bhuvi","sandeep","lipsa","purnima");
sort($friends);

$f=count($friends);
for($i=0;$i<$f;$i++)
{
    echo $friends[$i];
    echo"<br>";
}
?>