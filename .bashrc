# .bashrc

# Source global definitions
if [ -f /etc/bashrc ]; then
	. /etc/bashrc
fi

set -o vi
webroot="~"
export HISTSIZE=10000
export HISTCONTROL=ignoredups

# User specific aliases and functions
alias clearcss="rm -f $webroot/files/css/css_*; drush php-eval 'db_query(\"truncate table cache_page\")'"
alias ds="cd $webroot/sites/all/themes/dosomething"
alias oldds="cd /var/www/old.dosomething.org/sites/all/themes/zen/dosomething"
alias css="cd $webroot/sites/all/themes/dosomething/css"
alias tpl="cd $webroot/sites/all/themes/dosomething/templates"
alias mods="cd $webroot/sites/all/modules"
alias micro="cd $webroot/sites/all/micro"
alias forms="vim $webroot/sites/all/modules/dosomething_forms/dosomething_forms.module"
alias grep='grep --color=auto'
alias egrep='egrep --color=auto'

PATH=$PATH:/home/dosomething/drush
