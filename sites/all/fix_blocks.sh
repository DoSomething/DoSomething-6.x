#!/bin/bash -i

# remove broken blocks
drush ev 'db_query("UPDATE blocks SET status=0,region=\"\" WHERE module=\"block\" AND theme=\"dosomething\" AND delta IN (1, 2, 9, 88, 135, 245, 248)");'

# add in new blocks
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"whatsyourthing\r\nwhatsyourthing/*\r\ntipsandtools/*\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=0");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"sharesomething/rantandrave/*\r\nactnow/volunteer\r\nvolunteer\r\nactnow/tipsandtools/*\r\nactnow/actionguide/*\r\nactnow\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=1");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"clubs\r\nclubs/*\r\nnode/add/club\r\nog/invite/*\r\nclub\r\nclub/*\r\nactnow/club/*\r\nog_calendar/*\r\nog/users/*\r\nog/manage/*\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=2");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"grants/database\r\ngrants/*\r\ngrants\r\npbteen\r\nPBteen\r\nPBTeen\r\nawards\r\nawards/*\r\nprograms\r\nprograms*\r\nds-award-winners/*\r\npeace-players\r\nprograms/awards\r\nprograms/awards/*\r\npage/september-11th-national-day-service-and-remembrance\r\nlost-and-found\r\nPBteen\r\nabuse/confirm\r\nPrograms\r\ngrant-database-entry*\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=3");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"training\r\ntraining/*\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=4");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"staff-blog/*\r\nabout\r\nabout/*\r\napi/doc\r\ndev/donate3\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=5");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"navigation\",pages=\"staff-blog/*\r\nabout\r\nabout/*\r\napi/doc\r\ndev/donate3\" WHERE module=\"dosomething_menus\" AND theme=\"dosomething\" AND delta=5");'
# drush ev 'db_query("UPDATE blocks SET status=1,visibility=1,region=\"right\",pages=\"front\" WHERE module=\"dosomething_matrix\" AND theme=\"dosomething\" AND delta=0");'
