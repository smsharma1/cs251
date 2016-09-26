awk < $1 'BEGIN{a=0;b=0}{if $1 ~! [a-z] {a=a+$1;b=b+1;} }END{printf "Average=%.2f\n",a/b}'
