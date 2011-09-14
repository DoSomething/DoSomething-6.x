#!/bin/bash


file=bios.txt
folder=bootcamp_bios
mkdir -p $folder

while read line; do
  fname=$(echo $line | awk '{print $1}');
  url=$(echo $line | awk '{print $2}');
  extension=$(echo $url | sed 's/.*\.//');
  path=$(echo $url | sed 's|http://www.dosomething.org/||g')
  cp /var/www/html/$path $folder/$fname.$extension
done < $file
