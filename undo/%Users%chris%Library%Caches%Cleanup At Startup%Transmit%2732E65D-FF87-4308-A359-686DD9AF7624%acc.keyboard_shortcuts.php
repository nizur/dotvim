Vim�UnDo� L<����ѴY���(������Z�������   z   c            $data = array('combi' => $ks_key_combo, 'title' => $ks_title, 'url' => $ks_current_loc;   n   b      %       %   %   %    M�>�    _�                     a        ����                                                                                                                                                                                                                                                                                                                                                             M�6�    �   a   g   d          �   a   c   c    5�_�                   ^   t    ����                                                                                                                                                                                                                                                                                                                                                             M�7�    �   ]   _   h      �        $data['form_action'] = BASE.AMP.'C=addons_accessories&M=process_request&accessory=keyboard_shortcuts&method=save_new_shortcut';5�_�                   ^   '    ����                                                                                                                                                                                                                                                                                                                                                             M�8�     �   ^   `   i              �   ^   `   h    5�_�                    _   +    ����                                                                                                                                                                                                                                                                                                                                                             M�8�   	 �   ^   `   i      +        $data['form_action'] = str_replace(5�_�      	              _   K    ����                                                                                                                                                                                                                                                                                                                                                             M�9?     �   ^   _          L        $data['form_action'] = str_replace('D=cp&','',$data['form_action']);5�_�      
           	   c       ����                                                                                                                                                                                                                                                                                                                                                             M�9Y   
 �   b   d   h           function save_new_shortcut()5�_�   	              
   ^   |    ����                                                                                                                                                                                                                                                                                                                            ^   |       ^   �       v   �    M�9�     �   ]   _   h      �        $data['form_action'] = BASE.AMP.'C=addons_accessories&M=process_request&accessory=keyboard_shortcuts&method=process_save_new_shortcut';5�_�   
                c       ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�9�    �   b   d   h      (    function process_save_new_shortcut()5�_�                    e       ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�9�     �   d   g   h    5�_�                    e        ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�9�     �   d   f   j      -if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))5�_�                    f       ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�9�     �   d   g   j      5        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))   {�   e   g   j            {5�_�                    f       ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�9�     �   f   m   k                  �   f   h   j    5�_�                    m       ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�:     �   l   m                  return 'Howdy!';5�_�                    g        ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�:     �   f   h   o       5�_�                    k        ����                                                                                                                                                                                                                                                                                                                            c          c          v       M�:    �   j   l   o       5�_�                    ^   )    ����                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�:�     �   ]   _   o      �        $data['form_action'] = BASE.AMP.'C=addons_accessories&M=process_request&accessory=keyboard_shortcuts&method=process_new_shortcut';5�_�                    ^   Y    ����                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�:�    �   ]   _   o      �        $data['form_action'] = BASE.AMP.'C=addons_accessories&M=process_request&accessorykeyboard_shortcuts&method=process_new_shortcut';5�_�                    g      8   S                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�<T     �   f   g                      exit('Howdy!');5�_�                    g   	   J   S                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�<U    �   f   o   o                  �   f   h   n    5�_�                    k       ����                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�=     �   j   l   v      (                $$field = $_GET[$field];5�_�                    k   G    ����                                                                                                                                                                                                                                                                                                                            ^   )       ^   Y       v   Y    M�=    �   j   l   v      G                $$field = $this->EE->security->xss_clean($_GET[$field];5�_�                    n       ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=W     �   m   p   v                  exit($ks_title);5�_�                    n   &    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=[     �   m   o   w      U            $data = array('combi' => $combi, 'title' => $link[0], 'url' => $link[1]);5�_�                    n   @    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=d     �   m   o   w      \            $data = array('combi' => $ks_key_combo, 'title' => $link[0], 'url' => $link[1]);5�_�                    n   T    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=k     �   m   o   w      ]            $data = array('combi' => $ks_key_combo, 'title' => $ks_title, 'url' => $link[1]);5�_�                    o   G    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=v     �   n   r   w      W            $sql[] = $this->EE->db->insert_string($this->table, $data);exit($ks_title);5�_�                     p        ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=z     �   o   q   y                  5�_�      !               o       ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=}     �   n   p   y      G            $sql[] = $this->EE->db->insert_string($this->table, $data);5�_�       "           !   o       ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=}     �   n   p   y      F            $sql] = $this->EE->db->insert_string($this->table, $data);5�_�   !   #           "   o       ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=�     �   o   q   z                  �   o   q   y    5�_�   "   $           #   r       ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=�    �   q   s   z                  exit($ks_title);5�_�   #   %           $   n   b    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�=�    �   m   o   z      c            $data = array('combi' => $ks_key_combo, 'title' => $ks_title, 'url' => $ks_current_loc;5�_�   $               %   n   S    ����                                                                                                                                                                                                                                                                                                                            ,          -   F       v   F    M�>�    �   m   o   z      d            $data = array('combi' => $ks_key_combo, 'title' => $ks_title, 'url' => $ks_current_loc);5�_�   
                 c       ����                                                                                                                                                                                                                                                                                                                            ^   |       ^   �       v   �    M�9�     �   b   d   h      0    function process_process_save_new_shortcut()5�_�                    c       ����                                                                                                                                                                                                                                                                                                                                                             M�8    �   b   d   h      (    function process_save_new_shortcut()5�_�                   ^   l    ����                                                                                                                                                                                                                                                                                                                                                             M�7W    �   ]   _   h      �        $data['form_action'] = BASE.AMP.'C=addons_accessories&M=process_request&accessory=keyboard_shortcuts_acc&method=save_new_shortcut';5�_�                    ^   )    ����                                                                                                                                                                                                                                                                                                                                                             M�7    �   ]   _   h      �        $data['form_action'] = BASE.AMP.'D=cp&C=addons_accessories&M=process_request&accessory=keyboard_shortcuts&method=save_new_shortcut';5��