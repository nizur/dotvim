" ===================================================
" File: .vimrc
" Author: Chris Ruzin <thatguy@chrisruzin.net>
" Last Change: Friday, March 25 2011 01:43:35 AM CDT
" ===================================================

" ===================================================
" {{{GENERAL
" ===================================================

" Pathogen
filetype off
call pathogen#helptags()
call pathogen#runtime_append_all_bundles()

" Syntax highlighting is on
syntax on
filetype plugin indent on

" Disable vi compatibility
set nocompatible

" Disable modelines
set modelines=0

" Disable backup
set nobackup
set nowritebackup
set noswapfile

" Disable matchparen plugin
let loaded_matchparen=1

" Set up persistent undo
"set undodir=~/.vim/undo
"set undofile
"set undolevels=500 " Max number of changes that can be undone
"set undoreload=500 " Max number of lines to save on buffer reload

" History - remember a lot of command line stuff
"set history=100

" Disable system beep
set noerrorbells visualbell t_vb=

" Work with all main eol characters
set ffs=unix,dos,mac

" Default file info
set fileformat=unix
set encoding=utf-8
set termencoding=utf-8

" Read changes made from external apps
set autoread

" Automatically cd into the directory the file is in
set autochdir

" Set the window title
set title

" Always show me a report
set report=0

" Keep at least 8 lines above/below cursor
set scrolloff=8

" Shorten messages
set shm=atI

" Backspace works as expected
set backspace=start,indent,eol

" Enable wildmenu
"set wildmenu
"set wildmode=list:longest

" Do not redraw while running macros (much faster)
set lazyredraw

" Play nice with the system pasteboard
set clipboard=unnamed
"}}}

" ===================================================
" {{{CURSOR
" ===================================================

" Don't mess with my cursor position
set nostartofline

" Let my cursor go where I tell it to
"set virtualedit=all
"}}}

" ===================================================
" {{{SEARCH
" ===================================================

" Don't highlight search results
"set nohls

" Enable incremental search
set incsearch

" Ignore case
"set ignorecase

" If the word starts with an uppercase letter, be case sensitive
set smartcase

" Wrap scanning
set wrapscan
"}}}

" ===================================================
" {{{APPEARANCE
" ===================================================

" Window width/height
set columns=180
set lines=80

" Line numbering
set number
set numberwidth=6

" GUI-related stuff
"if has("gui_macvim")
if has("gui_running")
    " Color scheme
    set background=dark
    " 0 = light, no color
    " 1 = light, color
    " 2 = dark, no color
    " 3 = dark, color (GUI only)
    let g:zenesque_colors=3
    colorscheme zenesque
    "colorscheme solarized

    " Invisible character colors
    hi NonText guifg=#333333
    hi SpecialKey guifg=#333333

    " Highlight cursor based on mode
    hi Cursor guifg=black guibg=#95e454
    hi iCursor guifg=black guibg=red

    set guicursor=n-v-c:block-Cursor
    set guicursor+=i:ver15-iCursor

    " Window transparency
    "set transparency=1

    " Remove toolbar
    set guioptions-=T

    " Remove menubar
    set guioptions-=m

    " Remove tab bar
    set guioptions-=e

    " Remove left-side scrollbar
    set guioptions-=l

    " Remove right-side scrollbar
    set guioptions-=r

    " Remove left-side scrollbar in vertical splits
    set guioptions-=L

    " Remove right-side scrollbar in vertical splits
    set guioptions-=R

    " Highlight current line and column
    set cursorline
    "set cursorcolumn

    " Linespacing (default 0)
    set linespace=0

    " Set default font
    " Sample: 0 O  1 l I |  " ' `  S 5   m rn
    set guifont=Droid\ Sans\ Mono\ Slashed:h12
    "set guifont=Inconsolata-dz:h12
    "set guifont=Consolas:h12
    "set guifont=Menlo-Regular:h12
    "set guifont=Monaco:h12
    "set antialias
    "set noantialias
else
    " Use 256 colors in terminal
    set t_Co=256

    " Color scheme
    colorscheme wombat256
endif
"}}}

" ===================================================
" {{{TABS/BUFFERS/WINDOWS
" ===================================================

" Use an open buffer if it already exists instead of opening a new one
set switchbuf=useopen

" Maximum memory to use for one buffer
set maxmem=512

" Don't show tabline
set showtabline=0

" Hide buffers, don't close them
set hidden

" Smart way to move between windows
map <C-j> <C-W>j
map <C-k> <C-W>k
map <C-h> <C-W>h
map <C-l> <C-W>l

" Make the arrows useful, quick buffer switching
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
set softtabstop=4
set shiftwidth=4
set expandtab
"set smarttab

" Highlight the entire line, no matter how long it is
set synmaxcol=0

" Disable line-wrapping
"set nowrap
"set whichwrap+=h,l

" Show something at the beginning of wrapped lines
let &showbreak = '❯❯❯ '

" Since I have line-wrapping enabled, make j/k more natural
nnoremap j gj
nnoremap k gk

" Highlight matching brackets
"set showmatch
"set mat=3

" Code folding
set foldmethod=marker
set foldnestmax=5
set nofoldenable
set foldlevel=1
"}}}

" ===================================================
" {{{OMNICOMPLETE
" ===================================================

" Menu behavior
"set completeopt=longest,menuone,preview

" Tab key in insert mode is super smart!
"function! SuperCleverTab()
"    if strpart(getline('.'), 0, col('.') - 1) =~ '^\s*$'
"        return "\<Tab>"
"    else
"        if &omnifunc != ''
"            return "\<C-X>\<C-O>"
"        elseif &dictionary != ''
"            return "\<C-K>"
"        else
"            return "\<C-N>"
"        endif
"    endif
"endfunction
"
"inoremap <Tab> <C-R>=SuperCleverTab()<cr>
"
"" Close omnicomplete preview window when I've made my selection
"autocmd CursorMovedI * if pumvisible() == 0|pclose|endif
"autocmd InsertLeave * if pumvisible() == 0|pclose|endif
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

" No short tags
let php_noShortTags=1

" Highlight error for orphaned [ or (
"let php_parent_error_open=1

" Highlight parent error ] or )
"let php_parent_error_close=1

" Setting :make to work with PHP
set makeprg=php\ -l\ %
set errorformat=%m\ in\ %f\ on\ line\ %l
"}}}

" ===================================================
" {{{PYTHON-RELATED
" ===================================================

" More highlighting
let python_highlight_all = 1

" Highlight whitespace at the end of the line
highlight WhitespaceEOL ctermbg=red guibg=red
match WhitespaceEOL /\s\+\%#\@!$/

" Python-specific settings
au BufEnter,BufRead *.py setlocal modeline cinwords=if,elif,else,for,while,try,except,finally,def,class
"}}}

" ===================================================
" {{{CSS-RELATED
" ===================================================

" Sort CSS properties
au BufNewFile,BufRead *.css nnoremap <buffer> <leader>sp ?{<cr>jV/\v^\s*\}?$<cr>k:sort<cr>:noh<cr>

"}}}

" ===================================================
" {{{STATUS BAR
" ===================================================

" Status line
"set ruler
set showmode
set showcmd
set cmdheight=1
set laststatus=2 " Always show statusbar
"set statusline=CWD:\ %r%{CurDir()}%h%m
"set statusline+=\ \ LINE:\ %l/%L:%v
"set statusline+=\ \ TYPE:\ %Y
"set statusline+=\ %#warningmsg#%{SyntasticStatuslineFlag()}%*
"set statusline+=%=FUNC:\ %{Tlist_Get_Tagname_By_Line()} " Use Taglist to show current function

hi StatColor guibg=#95e454 guifg=black ctermbg=lightgreen ctermfg=black
hi Modified guibg=orange guifg=black ctermbg=lightred ctermfg=black
hi StatusLineNC guibg=#222222 guifg=#444444 ctermbg=lightgrey ctermfg=black

function! MyStatusLine(mode)
    let statusline=""
    if a:mode == 'Enter'
        let statusline.="%#StatColor#"
    endif
    let statusline.="\(%n\)\ %f\ "
    if a:mode == 'Enter'
        let statusline.="%*"
    endif
    let statusline.="%#Modified#%m"
    if a:mode == 'Leave'
        let statusline.="%*%r"
    elseif a:mode == 'Enter'
        let statusline.="%r%*"
    endif
    "let statusline .= " CWD:\ %r%{CurDir()}%h%m"
    let statusline .= "  LINE:\ %l/%L:%v"
    let statusline .= "  TYPE: %Y"
    let statusline .= "  %#warningmsg#%{SyntasticStatuslineFlag()}%*"
    " Use Taglist to show current function
    let statusline .= "%=FUNC:\ %{Tlist_Get_Tagname_By_Line()}"
    "let statusline .= "\ (%l/%L,\ %c)\ %P%=%h%w\ %y\ [%{&encoding}:%{&fileformat}]\ \ "
    return statusline
endfunction

au WinEnter * setlocal statusline=%!MyStatusLine('Enter')
au WinLeave * setlocal statusline=%!MyStatusLine('Leave')
set statusline=%!MyStatusLine('Enter')

function! InsertStatuslineColor(mode)
  if a:mode == 'i'
    hi StatColor guibg=red ctermbg=lightred
  elseif a:mode == 'r'
    hi StatColor guibg=#e454ba ctermbg=magenta
  elseif a:mode == 'v'
    hi StatColor guibg=#e454ba ctermbg=magenta
  else
    hi StatColor guibg=yellow ctermbg=yellow
  endif
endfunction

au InsertEnter * call InsertStatuslineColor(v:insertmode)
au InsertLeave * hi StatColor guibg=#95e454 guifg=black ctermbg=lightgreen ctermfg=black

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
nnoremap / /\v
vnoremap / /\v

" Remap search/replace
noremap ;; :%s:::g<left><left><left>
noremap ;' :%s:::cg<left><left><left><left>

" Fast reloading of the .vimrc
map <leader>s :source ~/.vimrc<cr>

" Fast editing of .vimrc
map <leader>e :e! ~/.vimrc<cr>

" Fast update of docs - Disable since Pathogen does this for me
"map <leader>ht :helptags ~/.vim/doc<cr>

" Fast vertical split and focus
nnoremap <leader>w <C-w>v<C-w>l

" Escape in insert mode awesomeness
inoremap jj <Esc>
nnoremap JJJJ <Nop>

" Create new buffer
nmap <C-t> :enew<CR>
imap <C-t> <Esc>:enew<CR>

" Move a line of text using ALT+[jk]
nmap <M-j> mz:m+<cr>`z
nmap <M-k> mz:m-2<cr>`z
vmap <M-j> :m'>+<cr>`<my`>mzgv`yo`z
vmap <M-k> :m'<-2<cr>`>my`<mzgv`yo`z

" Visual shifting (builtin-repeat)
vnoremap < <gv
vnoremap > >gv

" Select the line I just pasted
nnoremap <leader>v V`]

" Show syntax highlighting groups for word under cursor
nmap <C-S-P> :call <SID>SynStack()<cr>
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
let Tlist_Close_On_Select = 1 " Close the Ctags window when I select a tag
let Tlist_Compact_Format = 1 " Compact window
let Tlist_Ctags_Cmd = '/usr/local/bin/ctags' " Ctags command location
let Tlist_Enable_Fold_Column = 0 " Disable column folding
let Tlist_GainFocus_On_ToggleOpen = 1 " Focus the Taglist window when opened
let Tlist_Max_Submenu_Items = 20 " Make submenus if there are more than 10 tags
let Tlist_Max_Tag_Length = 25 " Show the first 25 chars of the tag name
let Tlist_Process_File_Always = 1 " Always process the file
let Tlist_Show_Menu = 1 " Show the tags menu
let Tlist_Show_One_File = 1 " Only show tags for the file I'm looking at
let Tlist_Sort_Type = "name" " Sort by tag name
let Tlist_WinWidth = 40 " Window width

let tlist_php_settings = 'php;c:class;d:constant;f:function' " PHP-related settings

nnoremap <silent> <F3> :TlistToggle<cr>
inoremap <silent> <F3> <ESC>:TlistToggle<cr>

" Tagbar
"let g:tagbar_autofocus = 1
"let g:tagbar_compact = 0
"
"nnoremap <silent> <F3> :TagbarToggle<cr>
"inoremap <silent> <F3> <ESC>:TagbarToggle<cr>

" LustyExplorer
nnoremap <silent> <F4> :LustyBufferExplorer<cr>
inoremap <silent> <F4> <ESC>:LustyBufferExplorer<cr>

nnoremap <silent> <S-F4> :LustyBufferGrep<cr>
inoremap <silent> <S-F4> <ESC>:LustyBufferGrep<cr>

" YankRing
let g:yankring_max_history = 50
let g:yankring_min_element_length = 2 " Don't store single letter changes
let g:yankring_window_use_horiz = 0  " Use vertical split
let g:yankring_window_width = 80
let g:yankring_history_dir = '$VIM' " Store the history file in .vim

nnoremap <silent> <F5> :YRShow<cr>
inoremap <silent> <F5> <ESC>:YRShow<cr>

" Add PHP syntax checking
nnoremap <silent> <F6> :make<cr>
inoremap <silent> <F6> <ESC>:make<cr>

" TaskList
let g:tlTokenList = ['TODO', 'HACK', 'FIXME'] " Only use these tokens

nnoremap <silent> <F7> :TaskList<cr>
inoremap <silent> <F7> <ESC>:TaskList<cr>

" Toggle hlsearch
nnoremap <silent> <F8> :set hls!<bar>set hls?<cr>
inoremap <silent> <F8> <ESC>:set hls!<bar>set hls?<cr>

" Command-T

" Gundo
let g:gundo_preview_height = 20
let g:gundo_preview_bottom = 1 " Show the preview window below the main window

nnoremap <silent><leader>u :GundoToggle<cr>

" MRU - Most Recently Used
let MRU_File = '/Users/chris/.vim/bundle/mru/mru_files'
let MRU_Max_Entries = 40
let MRU_Add_Menu = 0 " Disable the menu

nnoremap <silent> <leader>m :MRU<cr>

" Shortcut to assign php syntax highlighting
nnoremap <silent> <leader>p :set ft=php<cr>

" Show invisibles
nnoremap <silent> <leader>i :set list!<cr>
set listchars=tab:▸\ ,eol:¬

" Syntastic
let g:syntastic_enable_signs = 1

" Toggle linenumber mode
function! g:ToggleNuMode()
    if(&rnu == 1)
        set nu
    else
        set rnu
    endif
endfunc

nnoremap <silent> <leader>nm :call g:ToggleNuMode()<cr>

" PeepOpen
nnoremap <silent> <leader>po :PeepOpen<cr>

" Ack search... rawks!
nnoremap <leader>a :Ack
nnoremap <leader>af :AckFile
"}}}

" ===================================================
" {{{ABBREVIATIONS
" ===================================================

iab _NAME Chris Ruzin
iab _URL http://www.chrisruzin.net
iab _GMAIL cruzin@gmail.com
iab _EMAIL thatguy@chrisruzin.net
iab _SOLEMAIL chris@solspace.com
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

" Open help in a vertical window
au BufWinEnter *.txt if &ft == 'help' | wincmd L | endif

" Save and restore folds on open/close
"au! BufWinLeave * mkview
"au! BufWinEnter * silent loadview

" Add EE syntax
"au BufRead,BufNewFile *.ee set filetype=ee
"au! Syntax ee source $VIM/ee.vim
"}}}
