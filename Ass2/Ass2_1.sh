#!/bin/bash
cut -d "," -f5 $1 > temp
if grep -q  "\*" temp         #check if there is a A*
then
echo Yes
elif grep -q "F" temp         #check if there is a F
then
echo Yes
else
echo No
fi
