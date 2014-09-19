#!/bin/sh
# Made by             db0
# Contact             db0company[at]gmail[dot]com
# Website             http://db0.fr/

find . -name "*~" -print -and -delete		\
    -or -name "#*#" -print -and -delete		\
    -or -name "*.o" -print -and -delete
