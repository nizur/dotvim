Vim�UnDo� ���a��+t��3��l?9����m��e̦߼��  '   .            if ( $data['hp_title_'.$i] == '' )  t         4   0   4   4   /    M���    _�                           ����                                                                                                                                                                                                                                                                                                                                                             M��u     �            F            $article['hp_deck']     = addslashes($article['hp_deck']);5�_�                          ����                                                                                                                                                                                                                                                                                                                                                             M��x     �            G            $article['hp_title']    = addslashes($article['hp_title']);5�_�                          ����                                                                                                                                                                                                                                                                                                                                    	                 M���     �    
        0            //$article['hp_deck'] = str_replace(   �            //                            array("\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9c", "\xe2\x80\x9d", "\xe2\x80\x93", "\xe2\x80\x94", "\xe2\x80\xa6"),   `            //                            array("'", "'", '&8220;', '&8221;', '-', '--', '...'),   =            //                            $article['hp_deck']   (            //                        );5�_�                           ����                                                                                                                                                                                                                                                                                                                                    	          V       M���     �    
      5�_�                          ����                                                                                                                                                                                                                                                                                                                           
                   V       M���     �            .            $article['hp_deck'] = str_replace(5�_�                      5    ����                                                                                                                                                                                                                                                                                                                           
                   V       M���     �    	        ;                                        $article['hp_deck']5�_�                          ����                                                                                                                                                                                                                                                                                                                                                     M���     �            1            //$article['hp_title'] = str_replace(   v            //                            array(chr(145), chr(146), chr(147), chr(148), chr(150), chr(151), chr(133)),   `            //                            array("'", "'", '&8220;', '&8221;', '-', '--', '...'),   >            //                            $article['hp_title']   (            //                        );5�_�      	                     ����                                                                                                                                                                                                                                                                                                                                              V       M���     �          5�_�      
           	         ����                                                                                                                                                                                                                                                                                                                                              V       M���     �            /            $article['hp_title'] = str_replace(5�_�   	              
     5    ����                                                                                                                                                                                                                                                                                                                                              V       M���    �            <                                        $article['hp_title']5�_�   
                j       ����                                                                                                                                                                                                                                                                                                                                              V       M��>     �  j  m                �  j  l      5�_�                   l       ����                                                                                                                                                                                                                                                                                                                                              V       M���     �  k  m                if ( 5�_�                   j         %                                                                                                                                                                                                                                                                                                                                              V       M���     �  j  m                �  j  l      5�_�                   l       ����                                                                                                                                                                                                                                                                                                                                              V       M��     �  k  l          &        $check_these = array('hp_title    5�_�                   l       ����                                                                                                                                                                                                                                                                                                                                              V       M��     �  k  n                �  k  m      5�_�                   n       ����                                                                                                                                                                                                                                                                                                                                              V       M��!     �  m  o        &        if ( $data['hp_title_1'] == ''5�_�                   n   !    ����                                                                                                                                                                                                                                                                                                                                              V       M��%     �  m  o        *            if ( $data['hp_title_1'] == ''5�_�                   n   "    ����                                                                                                                                                                                                                                                                                                                                              V       M��(     �  m  o        )            if ( $data['hp_title_'] == ''5�_�                   n   ,    ����                                                                                                                                                                                                                                                                                                                                              V       M��-     �  m  s        ,            if ( $data['hp_title_'.$i] == ''5�_�                   l       ����                                                                                                                                                                                                                                                                                                                                              V       M��=     �  k  m                �  k  m      5�_�                   q        ����                                                                                                                                                                                                                                                                                                                                              V       M��L     �  p  r         5�_�                   q       ����                                                                                                                                                                                                                                                                                                                                              V       M��]     �  p  t      5�_�                   q        ����                                                                                                                                                                                                                                                                                                                           q         s          V       M��_     �  p  t        +		$msg = ee()->lang->line('changes_saved');       		$this->index($msg);5�_�                   q        ����                                                                                                                                                                                                                                                                                                                           q         s          V       M��`     �  p  t        5            $msg = ee()->lang->line('changes_saved');                   $this->index($msg);5�_�                   t                                                                                                                                                                                                                                                                                                                                    q         s          V       M��a     �  s  t                          5�_�                   q   1    ����                                                                                                                                                                                                                                                                                                                           q         s          V       M���     �  p  r        9                $msg = ee()->lang->line('changes_saved');5�_�                   q   =    ����                                                                                                                                                                                                                                                                                                                           q         s          V       M���     �  p  r        =                $msg = ee()->lang->line('changes_not_saved');5�_�                   s   #   =   `                                                                                                                                                                                                                                                                                                                           q         s          V       M���     �  r  t        #                $this->index($msg);    �  s  u                        �  s  u      5�_�                   q        ����                                                                                                                                                                                                                                                                                                                           q         s          V       M���     �  p  q          a                $msg = ee()->lang->line('changes_not_saved').'. The homepage fields were blank.';       #                $this->index($msg);5�_�                   t   
    ����                                                                                                                                                                                                                                                                                                                           q         q          V       M���     �  s  w      5�_�                    t        ����                                                                                                                                                                                                                                                                                                                           t         v   "       V   "    M���     �  s  w        a                $msg = ee()->lang->line('changes_not_saved').'. The homepage fields were blank.';       #                $this->index($msg);5�_�      !              t        ����                                                                                                                                                                                                                                                                                                                           t         v         V   "    M���     �  s  w        ]            $msg = ee()->lang->line('changes_not_saved').'. The homepage fields were blank.';                   $this->index($msg);5�_�       "           !  v                                                                                                                                                                                                                                                                                                                                    t         v         V   "    M���     �  v  x      5�_�   !   $           "  j       ����                                                                                                                                                                                                                                                                                                                           t         v         V   "    M���     �  j  m                �  j  l      5�_�   "   %   #       $  l       ����                                                                                                                                                                                                                                                                                                                           v         x         V   "    M���     �  k  l                  $blank = FALSE;    5�_�   $   &           %  m       ����                                                                                                                                                                                                                                                                                                                           t         v         V   "    M���     �  l  o      5�_�   %   '           &  r       ����                                                                                                                                                                                                                                                                                                                           v         x         V   "    M���     �  r  t  !                      �  r  t       5�_�   &   (           '  w       ����                                                                                                                                                                                                                                                                                                                           w         y         V   "    M���     �  v  y  "              �  v  x  !    5�_�   '   )           (  y        ����                                                                                                                                                                                                                                                                                                                           y         {          V       M���     �  x  |  #      Y        $msg = ee()->lang->line('changes_not_saved').'. The homepage fields were blank.';               $this->index($msg);5�_�   (   *           )  {       ����                                                                                                                                                                                                                                                                                                                           y         {          V       M���     �  {  }  $                  �  {  }  #    5�_�   )   +           *  y   <    ����                                                                                                                                                                                                                                                                                                                           y   <      y   ?       v   ?    M��     �  x  z  $      ]            $msg = ee()->lang->line('changes_not_saved').'. The homepage fields were blank.';5�_�   *   ,           +  y   X    ����                                                                                                                                                                                                                                                                                                                           y   <      y   ?       v   ?    M��     �  x  z  $      l            $msg = ee()->lang->line('changes_not_saved').'. One or more of the homepage fields were blank.';5�_�   +   -           ,  l        ����                                                                                                                                                                                                                                                                                                                           l   &      l   &       V   &    M��     �  k  p  #    �  k  l          *        // Check for blank homepage fields5�_�   ,   .           -  m       ����                                                                                                                                                                                                                                                                                                                           l          o           V   &    M��     �  l  n  '      "        //  Reset homepage default5�_�   -   /           .  r       ����                                                                                                                                                                                                                                                                                                                           l          o           V   &    M���     �  q  s  '      #        for ( $i = 1; $ <=3; $i++ )5�_�   .   0           /  r       ����                                                                                                                                                                                                                                                                                                                           l          o           V   &    M���    �  q  s  '      $        for ( $i = 1; $ <= 3; $i++ )5�_�   /   3           0  t       ����                                                                                                                                                                                                                                                                                                                           t         t   %       v   %    M���     �  s  u  '      6            if ( ! isset($data['hp_title_'.$i] == '' )5�_�   0   4   2       3  t       ����                                                                                                                                                                                                                                                                                                                           t         t   %       v   %    M���     �  s  u  '      K            if ( ! isset($data['hp_title_'.$i]$data['hp_title_'.$i] == '' )5�_�   3               4  t   .    ����                                                                                                                                                                                                                                                                                                                           t         t   %       v   %    M���     �  s  u  '      P            if ( ! isset($data['hp_title_'.$i]) OR $data['hp_title_'.$i] == '' )5�_�   0       1   3   2  t       ����                                                                                                                                                                                                                                                                                                                           t         t   %       v   %    M���     �  s  u  '      K            if ( ! isset($$data['hp_title_'.$i]data['hp_title_'.$i] == '' )5�_�   0           2   1  t       ����                                                                                                                                                                                                                                                                                                                           t         t   %       v   %    M���     �  s  u  '      K            if ( ! isset$data['hp_title_'.$i]($data['hp_title_'.$i] == '' )5�_�   "           $   #  l       ����                                                                                                                                                                                                                                                                                                                           u         w         V   "    M���     �  k  m        5��