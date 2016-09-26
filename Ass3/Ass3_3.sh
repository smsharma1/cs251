awk < $1 'BEGIN{FS=","};{for(i=NF;i>=1;i--){OFS=",";ORS="";print $i;if(i!=1){printf(",")};if(i==1){printf("\n")}}}' > Output3.txt         #last condition
cat Output3.txt
