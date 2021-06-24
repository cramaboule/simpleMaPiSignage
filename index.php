<?php


$output=null;
$retval=null;
exec('sudo -u pi -p test whoami', $output, $retval);
echo $output[0];

echo "<br>";
echo "<br>";


$output=null;
$retval=null;
//$retval = exec('sudo -u pi export DISPLAY=:0; /usr/bin/feh -V -F -Y /home/pi/Pictures/image1.png');//, $output, $retval);
//var_dump($retval);

echo "<br>";
echo "<br>";
//$retval = shell_exec('sudo -u pi -p test /home/pi/test.sh');//, $output, $retval);
//var_dump($retval);

$output=null;
$retval=null;
 //exec('sudo -u pi -p test /home/pi/test.sh > /dev/null > /dev/null 2>&1', $output, $retval);
//exec('sudo -u pi -p test export DISPLAY=:0 ; /usr/bin/feh -F -Y /home/pi/Pictures/image1.png & ; echo $!', $output, $retval);
$retval=shell_exec("sudo -u pi -p test /home/pi/test.sh 2>&1 | tee -a fehlog.log 2>/dev/null >/dev/null &");
var_dump($retval);
var_dump($output);

echo "<br>";
echo "<br>";

$file_contents = file_get_contents('fehlog.log');

var_dump($file_contents);


