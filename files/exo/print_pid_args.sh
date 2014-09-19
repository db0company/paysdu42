#!/bin/bash
# Made by	db0
# Contact	db0company[at]gmail[dot]com
# Website	http://db0.fr/ 

echo "PID : $$"

echo "Nombre d'arguments : $#"

echo -n "Les Arguments : "

i=1;
while [ "$i" -le "$#" ]
do
   eval echo -n \$$i
   echo -n " "
   i=$(($i + 1))
done

echo ""
