#!/usr/bin/perl -w

use strict;
use warnings;


sub enable;

my $modules_src = '/home/dosomething/modules';
my $modules_dst = '/var/www/html/sites/all/modules';

# hash of module subcomponents that need to be enabled for each module
my %modules = (
  'cck' => ['content', 'fieldgroup', 'number', 'userreference', 'text', 'optionwidgets', 'nodereference'],
  'views' => ['views', 'views_ui'],
  'ctools' => ['ctools', 'views_content', 'page_manager'],
  'panels' => ['panels'],
  'og' => ['og', 'og_actions', 'og_views'],
  'location' => ['location'],
  'imageapi' => ['imageapi'],
  'imagecache' => ['imagecache', 'imagecache_ui'],
  'imagefield' => ['imagefield'],
  'emfield' => ['emfield', 'emvideo'],
  'features' => ['features'],
  'filefield' => ['filefield'],
  'filter_perms' => ['filter_perms'],
  'jquery_ui' => ['jquery_ui'],
  'link' => ['link'],
  'logintoboggan' => ['logintoboggan'],
  'media_bliptv' => ['media_bliptv'],
  'media_youtube' => ['media_youtube'],
  'nodequeue' => ['nodequeue'],
  'nodewords' => ['nodewords', 'nodewords_ui', 'nodewords_admin', 'nodewords_basic'],
  'rules' => ['rules', 'rules_admin'],
  'shadowbox' => ['shadowbox'],
  'views_rss' => ['views_rss'],
  'dosomething_feeds' => ['dosomething_feeds'],
  'dosomething_matrix' => ['dosomething_matrix'],
  'dosomething_menus' => ['dosomething_menus'],
);

enable $ARGV[0];

sub enable {

  my $module = $_[0];

  if ( ! exists $modules{$module} ) {
    print "No entry for module: $module\n";
    die;
  }

  my $list = join(', ', @{$modules{$module}});
  `mv $modules_src/$module $modules_dst/$module`;
  print "Upgrading " . $module . " ...\n";
  print "enabling $list\n";
  `php /home/dosomething/drush/drush.php en -y $list`;
  print "running update.php\n";
  `php /home/dosomething/drush/drush.php updb -y`;

}

#while (my ($module, $components) = each(%modules)) {
#  print $module . ":\n";
#  print "enabling " . join(',', @$components) . "\n";
#  #`php /home/dosomething/drush/drush.php en $ARGV[0] >> upgrade_log.txt`;
#}

#`php /home/dosomething/drush/drush.php updb >> upgrade_log.txt`;
