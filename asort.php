<?php
$friends=array("bhuvi"=>'22',"sandeep"=>'20',"lipsa"=>'24',"purnima"=>'20');
asort($friends);

$f=count($friends);
for($i=0;$i<$f;$i++)
{
    echo $friends[$i];
    echo"<br>";
}
?>