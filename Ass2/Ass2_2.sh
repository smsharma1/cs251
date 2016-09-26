#!bin/bash
cut -d "," -f5 $1 > temp 
t=$(grep -c "\*" temp)  #count the number of A*
echo "*: $t"
t=$(grep -c "A" temp)    #count the number of A
echo "A: $t"
t=$(grep -c "B" temp)    #count the number of B
echo "B: $t"
t=$(grep -c "C" temp)    #count the number of C
echo "C: $t"
t=$(grep -c "D" temp)    #count the number of D
echo "D: $t"
t=$(grep -c "F" temp)    #count the bumber of F
echo "F: $t"
