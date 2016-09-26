#!bin/bash
cut -d "," -f1,2,2  $1 > temp1.csv       #cut 1,2 and 4 columns and store it 
cut -d "," -f2,3  $2 > temp2.csv         # cut 2 and 3 columns and store it
paste -d "," temp1.csv temp2.csv > Output.txt #paste it in output 
rm temp1.csv
rm temp2.csv
cat Output.txt
rm Output.txt
rm *~
