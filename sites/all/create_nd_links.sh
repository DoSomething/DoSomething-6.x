#!/bin/bash

base=/var/www/html
nd=$base/nd
oldnd=$base/oldnd/$(date '+%Y-%m-%d-%H-%M-%S')
mkdir -p $oldnd

find $base/sites/all/micro/ -maxdepth 1 -mindepth 1 -type d |
  while read line;
  do
    dirname=$(basename $line)
    link=$nd/$dirname
    if [[ -e $link ]] ; then
      mv $link $oldnd
    fi
    if [[ ! -e $link ]] ; then
      ln -s $line $link
    fi
  done
