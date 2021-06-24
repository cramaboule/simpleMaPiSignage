<?php


$output=null;
$retval=null;
exec('sudo whoami', $output, $retval);
echo $retval;


echo "<br>";


$output=null;
$retval=null;
//$retval = exec('sudo -u pi export DISPLAY=:0; /usr/bin/feh -V -F -Y /home/pi/Pictures/image1.png');//, $output, $retval);
var_dump($retval);

echo "<br>";

//$retval = shell_exec('sudo -u pi -p test /home/pi/test.sh');//, $output, $retval);
//var_dump($retval);


exec('sudo -u pi -p test /home/pi/test.sh > /dev/null > /dev/null 2>&1', $output, $retval);

echo $retval;


echo "<br>";
var_dump($output);


exec('sudo -u pi -p test ps -aux | grep feh', $output, $retval);

echo $retval;


echo "<br>";
var_dump($output);
echo $output;
