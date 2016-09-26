sum=0                          # variable which store sum
k=0 
p=1                           #counting variable 
while read  line              #while loop for input
do
sum=`echo $sum +$line | bc `                #sum expression
k=`expr $k + 1`
done < file3
echo "scale=3;$sum/$k" | bc                     #average 
