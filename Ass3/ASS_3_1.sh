awk < $1 'BEGIN { sum = 0;k=0 } { if($1 ~ /[0-9]/){sum += $1;k++}} END { printf"%0.2f\n",sum/k }'
