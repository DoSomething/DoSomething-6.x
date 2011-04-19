#!/bin/bash

modules=( cck views ctools panels og location imageapi imagecache filefield imagefield emfield features filter_perms jquery_ui link logintoboggan media_bliptv media_youtube nodequeue nodewords rules shadowbox views_rss dosomething_feeds dosomething_matrix dosomething_menus)

if [ ! -d /var/www/html/sites/all/modules ]
then
  echo 'Error: No destination /var/www/html/sites/all/modules directory -- quitting...'
  exit 1
fi

for module in "${modules[@]}"
do
  if [ ! -d ~/modules/$module ]
  then
    echo "Error: couldn't find $module in ~/modules ... skipping"
    continue
  fi 
  ./module_upgrade.pl $module 2>>$module.txt
  tail -n 1 $module.txt
  egrep '(\[error\])|(\[warning\])' $module.txt
  while true; do
    echo -n "Continue? (y/n) "
    read yn
    case $yn in
      y* | Y* ) break ;;
      [nN]* )   echo "quitting..." ; exit ;;
      q* )   echo "quitting..." ; exit ;;
      * ) echo "Enter yes or no" ;;
    esac
  done
done
