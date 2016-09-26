n=$2
awk < $1 -v n=$n  'BEGIN {FS="\n";RS="\n";b=1}{{printf("%s\t",$1)};if((b)%n==0){printf("\n")};b++};END{if((b-1)%n!=0){printf("\n")}}' > Output2.txt
cat Output2.txt

