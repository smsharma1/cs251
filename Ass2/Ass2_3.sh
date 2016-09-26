cut -d "," -f5 $1 > temp
if grep -q  "\*" temp         #check if there is a A*
then
sed -i -e 's/\*\|A$/Good/g' -e 's/B\|C$/Average/g' -e 's/D$/Poor/g' -e 's/F$/Fail/g' $1            #read and write the same file
elif grep -q "F" temp         #check if there is a F
then
sed -i -e 's/\*\|A$/Good/g' -e 's/B\|C$/Average/g' -e 's/D$/Poor/g' -e 's/F$/Fail/g' $1            #read and write the same file
fi




