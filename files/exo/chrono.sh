#!/bin/bash
# Made by	db0
# Contact	db0company[at]gmail[dot]com
# Website	http://db0.fr/ 

i=0
while [ $i -le 10 ]
do
    printf "\r%d" $i
    sleep 1
    i=$(($i+1))
done

echo ""

cat ascii_art_file
