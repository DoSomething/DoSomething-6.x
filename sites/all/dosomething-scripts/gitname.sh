#!/bin/bash

thisDir="$(dirname $0)"
name="$1"
credsDir="${thisDir}/github-credentials"

case "$name" in
   "rob" )
     git config --global user.name "Rob Hawkins"
     git config --global user.email "rhawkins@dosomething.org"
     git config --global github.user "rhawkins-ds"
     git config --global github.token b08713c7c61182b785889baf3b121479
     ;;
   * )
     echo $name! Set your configuration in `basename $0`;;
esac

cp "$credsDir"/id_rsa."$name" ~/.ssh/id_rsa
cp "$credsDir"/id_rsa.pub."$name" ~/.ssh/id_rsa.pub
echo done
