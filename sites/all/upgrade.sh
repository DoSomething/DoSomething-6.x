#!/bin/bash -i

thisDir="$(dirname $0)"
create_nd_links=${thisDir}/create_nd_links.sh

# move contrib modules out of the way to avoid accidental updates
rm -rf /home/dosomething/modules
mv ./modules /home/dosomething
mkdir ./modules

# dblog is new, run updates for it
drush updb -y 2>>dblog.txt

# cck content module
mv /home/dosomething/modules/cck ./modules
drush en content -y
drush updb -y 2>>content.txt
cat content.txt

# cck remainder (fieldgroup, nodereference, number, optionwidgets, text, userreference)
drush en fieldgroup, nodereference, number, optionwidgets, text, userreference -y
drush updb -y 2>>cck_remainder.txt
cat cck_remainder.txt

# fix weird number bug (http://drupal.org/node/508708#comment-4214348)
drush php-eval "content_associate_fields('number');"

# views
mv /home/dosomething/modules/views ./modules
drush en views views_ui -y
drush updb -y 2>>views.txt
cat views.txt

# emfield and emvideo module
mv /home/dosomething/modules/emfield ./modules
drush en emfield emvideo -y
drush updb -y 2>>emfield.txt
cat emfield.txt

# media_youtube and media_bliptv
mv /home/dosomething/modules/media_youtube ./modules
mv /home/dosomething/modules/media_bliptv ./modules
drush en media_youtube media_bliptv -y
drush updb -y 2>>media.txt
cat media.txt

# filefield
mv /home/dosomething/modules/filefield ./modules
drush en filefield -y
drush updb -y 2>>filefield.txt
cat filefield.txt

# link 
mv /home/dosomething/modules/link ./modules
drush en link -y
drush updb -y 2>>link.txt
cat link.txt

# imagefield 
mv /home/dosomething/modules/imagefield ./modules
drush en imagefield -y
drush updb -y 2>>imagefield.txt
cat imagefield.txt

# date 
mv /home/dosomething/modules/date ./modules
drush en date_api date_timezone -y
drush updb -y 2>>date_api.txt
cat date_api.txt
drush en date -y
drush updb -y 2>>date.txt
cat date.txt

# og 
mv /home/dosomething/modules/og ./modules
drush en og og_views -y
drush updb -y 2>>og.txt
cat og.txt

# ctools 
mv /home/dosomething/modules/ctools ./modules
drush en ctools page_manager views_content -y
drush updb -y 2>>ctools.txt
cat ctools.txt

# panels 
mv /home/dosomething/modules/panels ./modules
drush en panels -y
drush updb -y 2>>panels.txt
cat panels.txt

# imagecache 
mv /home/dosomething/modules/imageapi ./modules
mv /home/dosomething/modules/imagecache ./modules
drush en imageapi imageapi_ds imagecache imagecache_ui -y
drush updb -y 2>>imagecache.txt
cat imagecache.txt

# rules 
mv /home/dosomething/modules/rules ./modules
drush en rules rules_admin -y
drush updb -y 2>>rules.txt
cat rules.txt

# token 
mv /home/dosomething/modules/token ./modules
drush en token -y
drush updb -y 2>>token.txt
cat token.txt

# pathauto 
mv /home/dosomething/modules/pathauto ./modules
drush en pathauto -y
drush updb -y 2>>pathauto.txt
cat pathauto.txt

# globalredirect 
mv /home/dosomething/modules/globalredirect ./modules
drush en globalredirect -y
drush updb -y 2>>globalredirect.txt
cat globalredirect.txt

# location 
mv /home/dosomething/modules/location ./modules
drush en location location_node -y
drush updb -y 2>>location.txt
cat location.txt

# nodewords 
mv /home/dosomething/modules/nodewords ./modules
drush en nodewords nodewords_basic nodewords_admin nodewords_ui -y
drush updb -y 2>>nodewords.txt
cat nodewords.txt

# nodequeue 
mv /home/dosomething/modules/nodequeue ./modules
drush en nodequeue -y
drush updb -y 2>>nodequeue.txt
cat nodequeue.txt

# logintoboggan 
mv /home/dosomething/modules/logintoboggan ./modules
drush en logintoboggan -y
drush updb -y 2>>logintoboggan.txt
cat logintoboggan.txt

# rest
mv /home/dosomething/modules/* ./modules
drush en dosomething_feeds dosomething_forms dosomething_functions dosomething_matrix dosomething_menus dosomething_projects ds_mobile ds_signup features filter_perms live_profile_v2 shadowbox views_rss auto_nodetitle -y
drush updb -y 2>>rest.txt
cat rest.txt

# disable useless core statistics module
drush dis statistics -y

# make dosomething the default theme and enable it
drush php-eval 'require_once(drupal_get_path("module", "system")."/system.admin.inc"); $form_state = array("values" => array("status" => array("dosomething" => "dosomething"), "theme_default" => "dosomething", "op" => "Save configuration", ), ); drupal_execute("system_themes_form", $form_state);'

# fix up schema problems
drush en dosomething_upgrade -y
drush ev 'ds_upgrade_repair_node();'
drush ev 'ds_upgrade_repair_system();'
drush ev 'ds_upgrade_repair_forum();'
drush ev 'ds_upgrade_repair_content();'
drush ev 'ds_upgrade_repair_emvideo();'

# enable dosomething theme and make it the default
drush ev 'require_once(drupal_get_path("module", "system")."/system.admin.inc"); $form_state = array("values" => array("status" => array("dosomething" => "dosomething"), "theme_default" => "dosomething", "op" => "Save configuration",),);drupal_execute("system_themes_form", $form_state);'

# disable broken blocks
drush ev 'db_query("UPDATE blocks SET status=0,region=\"\" WHERE module=\"block\" AND theme=\"dosomething\" AND delta IN (1, 2, 9, 88, 102, 135, 245, 248)");'

# set up new blocks
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 0, -1, \"navigation\", \"whatsyourthing\r\nwhatsyourthing/*\r\ntipsandtools/*\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 1, -1, \"navigation\", \"sharesomething/rantandrave/*\r\nactnow/volunteer\r\nvolunteer\r\nactnow/tipsandtools/*\r\nactnow/actionguide/*\r\nactnow\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 2, -1, \"navigation\", \"clubs\r\nclubs/*\r\nnode/add/club\r\nog/invite/*\r\nclub\r\nclub/*\r\nactnow/club/*\r\nog_calendar/*\r\nog/users/*\r\nog/manage/*\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 3, -1, \"navigation\", \"grants/database\r\ngrants/*\r\ngrants\r\npbteen\r\nPBteen\r\nPBTeen\r\nawards\r\nawards/*\r\nprograms\r\nprograms*\r\nds-award-winners/*\r\npeace-players\r\nprograms/awards\r\nprograms/awards/*\r\npage/september-11th-national-day-service-and-remembrance\r\nlost-and-found\r\nPBteen\r\nabuse/confirm\r\nPrograms\r\ngrant-database-entry*\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 4, -1, \"navigation\", \"training\r\ntraining/*\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_menus\", \"dosomething\", 1, -128, 5, -1, \"navigation\", \"staff-blog/*\r\nabout\r\nabout/*\r\napi/doc\r\ndev/donate3\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(1, 0, \"\", \"dosomething_matrix\", \"dosomething\", 1, -128, 0, 8, \"right\", \"front\")");'
drush ev 'db_query("INSERT INTO blocks (visibility, custom, title, module, theme, status, weight, delta, cache, region, pages) VALUES(0, 0, \"\", \"dosomething_matrix\", \"dosomething\", 0, -128, 1, 8, \"\", \"\")");'

# fix breadcrumbs
drush ev '$old = variable_get("theme_dosomething_settings", NULL); $old["zen_breadcrumb"] = "no"; variable_set("theme_dosomething_settings", $old);'

# move folders in nd that also exist in the repository to oldnd .  create symlinks for folders in micro that point from nd/folder1 -> micro/folder1

$create_nd_links
