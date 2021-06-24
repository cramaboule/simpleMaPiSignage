#!/bin/bash

export DISPLAY=:0

/usr/bin/feh -F -Y /home/pi/Pictures/image1.png &
PID=$!
echo $PID

