" ===================================================
" File: .vimrc
" Author: Chris Ruzin <thatguy@chrisruzin.net>
" Last Change: 2010-09-24
" ===================================================

" ===================================================
" {{{GENERAL
" ===================================================

" Disable vi compatibility
set nocompatible

" Pathogen
filetype off
call pathogen#helptags()
call pathogen#runtime_append_all_bundles()

" Syntax highlighting is on
filetype plugin indent on
syntax on

" Work with all main eol characters
set ffs=unix,dos,mac

" Default file info
set fileformat=unix
set encoding=utf-8

" Read changes made from external apps
set autoread

" Keep at least 2 lines above/below cursor
set scrolloff=2

" Disable system beep
set noerrorbells
set visualbell
set t_vb=

" Shorten messages
set shm=atI

" Backspace works as expected
set backspace=start,indent,eol

" Enable wildmenu
set wildmenu
set wildmode=list:longest

" Disable backup
set nobackup
set nowb
set noswapfile

" Do not redraw while running macros (much faster)
set lazyredraw

" History - remember a lot of command line stuff
set history=500

" Don't mess with my cursor position
set nostartofline

" Let my cursor go where I tell it to
set virtualedit=all

" Play nice with the system pasteboard
set clipboard=unnamed
"}}}

" ===================================================
" {{{SEARCH
" ===================================================

" Don't highlight search results
"set nohls

" Enable incremental search
set incsearch

" Ignore case
set ignorecase

" If the word starts with an uppercase letter, be case sensitive
set smartcase

" Wrap scanning
set wrapscan
"}}}

" ===================================================
" {{{APPEARANCE
" ===================================================

" Window width/height
set columns=160
set lines=80

" Line numbering
set number
set numberwidth=6

" GUI-related stuff
"if has("gui_macvim")
if has("gui_running")
    " Color scheme
    " 0 = light, no color
    " 1 = light, color
    " 2 = dark, no color
    " 3 = dark, color (GUI only)
    let g:zenesque_colors=3
    colorscheme zenesque

    " Window transparency
    set transparency=2

    " Remove toolbar
    set guioptions-=T

    " Remove tab bar
    set guioptions-=e

    " Remove left-side scrollbar
    set guioptions-=l

    " Remove right-side scrollbar
    set guioptions-=r

    " Highlight current line and column
    set cursorline
    "set cursorcolumn

    " Cursor customization: ignore whatver the colorscheme says
    "highlight Cursor guifg=#ffffff guibg=#ff0000
    "highlight iCursor guifg=#ffffff guibg=#ff0000
    "set guicursor=n-v-c:block-Cursor
    "set guicursor+=i:ver30-iCursor-blinkwait300-blinkon200-blinkoff150

    " Set default font
    "set guifont=Droid\ Sans\ Mono\ Slashed:h12
    set guifont=Menlo-Regular:h12
    set antialias

    " Automatically cd into the directory the file is in
    set autochdir

    " Set up persistent undo
    set undodir=~/.vim/undo
    set undofile
    set undolevels=1000 " Max number of changes that can be undone
    set undoreload=5000 " Max number of lines to save on buffer reload
else
    let g:zenesque_colors=2
    colorscheme zenesque
endif
"}}}

" ===================================================
" {{{TABS/BUFFERS/WINDOWS
" ===================================================

" Use an open buffer if it already exists instead of opening a new one
set swb=useopen

" Don't show tabline
set showtabline=0

" Hide buffers, don't close them
set hidden

" Smart way to move between windows
map <C-j> <C-W>j
map <C-k> <C-W>k
map <C-h> <C-W>h
map <C-l> <C-W>l

" Make the arrows useful
map <right> :bn<cr>
map <left> :bp<cr>
"}}}

" ===================================================
" {{{CODE
" ===================================================

" Enable indentation
set autoindent
set smartindent

" Tabs
set tabstop=4
set shiftwidth=4
set expandtab
"set smarttab

" Disable line-wrapping
"set nowrap
"set whichwrap+=h,l

" Since I have line-wrapping enabled, make j/k more natural
nnoremap j gj
nnoremap k gk

" Highlight matching brackets
set showmatch
set mat=3

" Code folding
set foldmethod=marker
set foldnestmax=5
set nofoldenable
set foldlevel=1
"}}}

" ===================================================
" {{{PHP-RELATED
" ===================================================

" Highlight SQL inside PHP strings
let php_sql_query=1

" Highlight HTML inside PHP strings
let php_htmlInStrings=1

" Allow PHP code folding for classes and functions
let php_folding=1

" Setting :make to work with PHP
set makeprg=php\ -l\ %
set errorformat=%m\ in\ %f\ on\ line\ %l

" CFI: don't show param in statusline
let g:cfi_php_show_params = 0
"}}}

" ===================================================
" {{{PYTHON-RELATED
" ===================================================

" More highlighting
let python_highlight_all = 1

" Highlight whitespace at the end of the line
highlight WhitespaceEOL ctermbg=red guibg=red
match WhitespaceEOL /\s\+$/
"}}}

" ===================================================
" {{{STATUS BAR
" ===================================================

" Status line
set ruler
set showmode
set showcmd
set ch=1
set laststatus=2 " Always show statusbar
set statusline=CWD:\ %r%{CurDir()}%h
set statusline+=\ \ LINE:\ %l/%L:%c
set statusline+=\ \ TYPE:\ %Y
set statusline+=\ %#warningmsg#%{SyntasticStatuslineFlag()}%*
set statusline+=%=FUNC:\ %{cfi#get_func_name()}

fun! CurDir()
	let curdir = substitute(getcwd(), '/Users/chris/', "~/", "g")
	return curdir
endfun
"}}}

" ===================================================
" {{{MAPPING
" ===================================================

" Set mapleader
let mapleader = ","
let g:mapleader = ","

" Remap search
map <space> /

" Remap search/replace
map <C-space> :%s/

" Fast reloading of the .vimrc
map <leader>s :source ~/.vimrc<cr>

" Fast editing of .vimrc
map <leader>e :e! ~/.vimrc<cr>

" Ack search... rawks!
map <leader>a :Ack
map <leader>af :AckFile

" Fast update of docs - Disable since Pathogen does this for me
"map <leader>ht :helptags ~/.vim/doc<cr>

" Escape in insert mode awesomeness
inoremap jj <Esc>
nnoremap JJJJ <Nop>

" Create new tab
nmap <C-t> :tabnew<CR>
imap <C-t> <Esc>:tabnew<CR>

"Move a line of text using ALT+[jk]
nmap <M-j> mz:m+<cr>`z
nmap <M-k> mz:m-2<cr>`z
vmap <M-j> :m'>+<cr>`<my`>mzgv`yo`z
vmap <M-k> :m'<-2<cr>`>my`<mzgv`yo`z

" visual shifting (builtin-repeat)
vnoremap < <gv
vnoremap > >gv

" Show syntax highlighting groups for word under cursor
nmap <C-S-P> :call <SID>SynStack()<CR>
function! <SID>SynStack()
  if !exists("*synstack")
    return
  endif
  echo map(synstack(line('.'), col('.')), 'synIDattr(v:val, "name")')
endfunc
"}}}

" ===================================================
" {{{PLUGINS/BINDINGS
" ===================================================

" NERDtree
nnoremap <silent> <F2> :NERDTreeToggle ~/<cr>
inoremap <silent> <F2> <ESC>:NERDTreeToggle ~/<cr>
nnoremap <leader>f :execute ':NERDTreeToggle '.getcwd()<cr>

" Taglist
" Ctags command location
let Tlist_Ctags_Cmd = '/usr/local/bin/ctags'
" Window width
let Tlist_WinWidth = 40
" Sort by tag name
let Tlist_Sort_Type = "name"
" Only show tags for the file I'm looking at
let Tlist_Show_One_File = 1
" Show the first 20 chars of the tag name
let Tlist_Max_Tag_Length = 20
" Close the Ctags window when I select a tag
let Tlist_Close_On_Select = 1
" Make submenus if there are more than 10 tags
let Tlist_Max_Submenu_Items = 10

nnoremap <silent> <F3> :TlistToggle<cr><C-w>h<cr>
inoremap <silent> <F3> <ESC>:TlistToggle<cr><C-w>h<cr>

" BufExplorer
nnoremap <silent> <F4> :BufExplorerVerticalSplit<cr>
inoremap <silent> <F4> <ESC>:BufExplorerVerticalSplit<cr>

" YankRing
nnoremap <silent> <F5> :YRShow<cr>
inoremap <silent> <F5> <ESC>:YRShow<cr>

" Add PHP syntax checking
nnoremap <silent> <F6> :make<cr>
inoremap <silent> <F6> <ESC>:make<cr>

" TaskList
nnoremap <silent> <F7> :TaskList<cr>
inoremap <silent> <F7> <ESC>:TaskList<cr>
let g:tlTokenList = ['TODO', 'HACK', 'FIXME']

" Toggle hlsearch
map <F8> :set hls!<bar>set hls?<cr>

" Paste toggle
"set pastetoggle=<F8>

" BufTabs
let g:buftabs_only_basename=1
let g:buftabs_active_highlight_group="Visual"
let g:buftabs_separator = "-"
let g:buftabs_marker_start = "("
let g:buftabs_marker_end = ") "

" MRU - Most Recently Used
let MRU_File = '/Users/chris/.vim/bundle/mru/mru_files'
let MRU_Max_Entries = 40
let MRU_Add_Menu = 0
nnoremap <silent> <leader>m :MRU<cr>

" Shortcut to assign php syntax highlighting
nnoremap <silent> <leader>p :set ft=php<cr>

" Syntastic
let g:syntastic_enable_signs = 1
"}}}

" ===================================================
" {{{ABBREVIATIONS
" ===================================================

iab _NAME Chris Ruzin
iab _URL http://www.chrisruzin.net
iab _EMAIL thatguy@chrisruzin.net
iab _DATE <C-R>=strftime("%A, %B %e %Y %I:%M:%S %p %Z")<CR>
"}}}

" ===================================================
" {{{AUTOCOMMANDS
" ===================================================

" Remove any trailing whitespace that is in the file
au! BufRead,BufWrite * %s/\s\+$//ge

" When .vimrc is edited, reload it
au! bufwritepost .vimrc source ~/.vimrc

" Update Taglist when buffer is saved
au! bufwritepost * :TlistUpdate

" Save and restore folds on open/close
"au! BufWinLeave * mkview
"au! BufWinEnter * silent loadview

" Add EE syntax
"au BufRead,BufNewFile *.ee set filetype=ee
"au! Syntax ee source $VIM/ee.vim
"}}}
