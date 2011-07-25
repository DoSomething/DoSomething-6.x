if has("autocmd")
  " Drupal *.module and *.install files.
  augroup module
    autocmd BufRead,BufNewFile *.module set filetype=php
    autocmd BufRead,BufNewFile *.install set filetype=php
    autocmd BufRead,BufNewFile *.inc set filetype=php
  augroup END
endif

filetype plugin indent on
syntax on
set nohls
set ruler
set nocp
set number
set pastetoggle=<F2>
set expandtab
set tabstop=2
set shiftwidth=2
set autoindent
set smartindent
set bg=dark

set viminfo='10,\"100,:20,%,n~/.viminfo
au BufReadPost * if line("'\"") > 0|if line("'\"") <= line("$")|exe("norm '\"")|else|exe "norm $"|endif|endif
