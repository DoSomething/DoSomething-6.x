#!/bin/bash

if [ ! -d ~/modules/$1 ]
then
  echo "Error: couldn't find $1 in ~/modules"
  exit 1
fi 

./module_upgrade.pl $1 2>>$1.txt
tail -n 1 $1.txt
egrep '(\[error\])|(\[warning\])' $1.txt
