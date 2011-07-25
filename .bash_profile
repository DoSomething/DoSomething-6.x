# .bash_profile

# Get the aliases and functions
if [ -f ~/.bashrc ]; then
	. ~/.bashrc
fi

# User specific environment and startup programs

PATH=$PATH:$HOME/bin
CVSROOT=:pserver:anonymous:anonymous@cvs.drupal.org:/cvs/drupal-contrib

export PATH
export CVSROOT
