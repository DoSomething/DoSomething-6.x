#!/bin/bash -i
drush ev '$old = variable_get("theme_dosomething_settings", NULL); $old["zen_breadcrumb"] = "no"; variable_set("theme_dosomething_settings", $old);'
