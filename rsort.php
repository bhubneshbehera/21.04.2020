<?php
$friends=array("bhuvi","sandeep","lipsa","purnima");
rsort($friends);

$f=count($friends);
for($i=0;$i<$f;$i++)
{
    echo $friends[$i];
    echo"<br>";
}
?>