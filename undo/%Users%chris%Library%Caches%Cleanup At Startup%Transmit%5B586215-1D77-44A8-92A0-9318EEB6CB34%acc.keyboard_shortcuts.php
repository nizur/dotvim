Vim�UnDo� ��5�ѧ�y
�;آ�w��8���ϻ�cd���_   �   S        if ( $header ) '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';   �         ;       ;   ;   ;    M�d7    _�                     �       ����                                                                                                                                                                                                                                                                                                                            r   )       r   �       v   �    M�X|     �   �   �   �          �   �   �   �    5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            r   )       r   �       v   �    M�X�     �   �   �   �       5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �   �    5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �   �              5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �           5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �   �      I            $valid = array('ks_title', 'ks_current_loc', 'ks_key_combo');5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �   �      C            $valid = array('id', 'ks_current_loc', 'ks_key_combo');5�_�      	              �                                                                                                                                                                                                                                                                                                                                     y          �          V       M�X�     �   �   �   �                  �   �   �   �    5�_�      
           	   �                                                                                                                                                                                                                                                                                                                                      y          �          V       M�X�     �   �   �   �    5�_�   	              
   �                                                                                                                                                                                                                                                                                                                                      y          �          V       M�X�     �   �   �           5�_�   
                 �                                                                                                                                                                                                                                                                                                                                      y          �          V       M�X�     �   �   �   �    5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�X�     �   �   �   �       5�_�                    �   !    ����                                                                                                                                                                                                                                                                                                                            y          �          V       M�YC    �   �   �   �      !            if ( $query->num_rows5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �          �          v       M�Y�     �   �   �   �                      exit(1);5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �   =       �   =       V   =    M�Y�     �   �   �   �      =            $this->EE->load->_ci_view_path = $orig_view_path;5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �   =       �   =       V   =    M�Y�     �   �   �   �      =            $orig_view_path = $this->EE->load->_ci_view_path;   T            $this->EE->load->_ci_view_path = PATH_THIRD.'keyboard_shortcuts/views/';       O            $out = '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';   D            $out .= $this->EE->load->view('available', $data, TRUE);       M            // Switch the view path back to the original, remove package path5�_�                    �       -   -                                                                                                                                                                                                                                                                                                                            �      -   �      0   V   =    M�Y�     �   �   �                      else               {                   exit(0);               }5�_�                    �      0   =                                                                                                                                                                                                                                                                                                                            �      -   �      0   V   =    M�Y�     �   �   �   �                  �   �   �   �    5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �      -   �      0   V   =    M�Y�     �   �   �   �                      �   �   �   �    5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �      -   �      0   V   =    M�Y�     �   �   �   �                      exit(0);5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �      -   �      0   V   =    M�Y�     �   �   �   �                      exit('0);5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z     �   �   �          8            // Create the new shortcuts section for AJAX               $data   = array();               $binds  = array();       _            $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table}");       )            if ( $query->num_rows() > 0 )               {   :                foreach ( $query->result_array() as $row )                   {   Z                    $binds[$row['id']] = array($row['title'], $row['url'], $row['combi']);                   }               }       (            $data['shortcuts'] = $binds;       4            // Find out how many columns we're using   #            $total = count($binds);               $cols = 1;   /            if ( $total >= 10 AND $total < 20 )                   $cols = 2;   $            else if ( $total >= 20 )                   $cols = 3;   *            $per_col = ceil($total/$cols);   ;            $columns = array_chunk($binds, $per_col, TRUE);       (            $data['columns'] = $columns;    5�_�                    �                                                                                                                                                                                                                                                                                                                                     �          �          V       M�Z
     �   �   �   �          �   �   �   �    5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z6     �   �   �   �    5�_�                    �                                                                                                                                                                                                                                                                                                                                      �          �          V       M�Z8     �   �   �           5�_�                    �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z<     �   �   �   �      8            // Create the new shortcuts section for AJAX               $data   = array();               $binds  = array();       _            $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table}");       )            if ( $query->num_rows() > 0 )               {   :                foreach ( $query->result_array() as $row )                   {   Z                    $binds[$row['id']] = array($row['title'], $row['url'], $row['combi']);                   }               }       (            $data['shortcuts'] = $binds;       4            // Find out how many columns we're using   #            $total = count($binds);               $cols = 1;   /            if ( $total >= 10 AND $total < 20 )                   $cols = 2;   $            else if ( $total >= 20 )                   $cols = 3;   *            $per_col = ceil($total/$cols);   ;            $columns = array_chunk($binds, $per_col, TRUE);       (            $data['columns'] = $columns;5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z=     �   �   �   �              �   �   �   �    5�_�                    �                                                                                                                                                                                                                                                                                                                                      �          �          V       M�Z\     �   �   �   �       5�_�                    �                                                                                                                                                                                                                                                                                                                                      �          �          V       M�Zu     �   �   �   �                  �   �   �   �    5�_�                    �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �      5            $data = $this->_process_shortcuts_view();5�_�                     �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �       
   >            // Ugly hack to get around a nasty bug in EE 2.1.3   =            $orig_view_path = $this->EE->load->_ci_view_path;   T            $this->EE->load->_ci_view_path = PATH_THIRD.'keyboard_shortcuts/views/';       O            $out = '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';   D            $out .= $this->EE->load->view('available', $data, TRUE);       M            // Switch the view path back to the original, remove package path   =            $this->EE->load->_ci_view_path = $orig_view_path;    5�_�      !               �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �    5�_�       "           !   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �    5�_�   !   #           "   �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �   	   >            // Ugly hack to get around a nasty bug in EE 2.1.3   =            $orig_view_path = $this->EE->load->_ci_view_path;   T            $this->EE->load->_ci_view_path = PATH_THIRD.'keyboard_shortcuts/views/';       O            $out = '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';   D            $out .= $this->EE->load->view('available', $data, TRUE);       M            // Switch the view path back to the original, remove package path   =            $this->EE->load->_ci_view_path = $orig_view_path;5�_�   "   $           #   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �              return $data;5�_�   #   %           $   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       M�Z�     �   �   �   �      &    function _process_shortcuts_view()5�_�   $   &           %   �        ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�Z�     �   �   �   �      B                // Ugly hack to get around a nasty bug in EE 2.1.3�   �   �          A                $orig_view_path = $this->EE->load->_ci_view_path;   X                $this->EE->load->_ci_view_path = PATH_THIRD.'keyboard_shortcuts/views/';       S                $out = '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';   H                $out .= $this->EE->load->view('available', $data, TRUE);       Q                // Switch the view path back to the original, remove package path   A                $this->EE->load->_ci_view_path = $orig_view_path;5�_�   %   '           &   �   "    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�Z�    �   �   �   �      4            $out = $this->_process_shortcuts_view();5�_�   &   (           '   �   !    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�\q     �   �   �   �      )            if ( $query->num_rows() > 0 )5�_�   '   )           (   �   !    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�\r    �   �   �   �      (            if ( $query->num_rows) > 0 )5�_�   (   *           )   �   !    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�]�    �   �   �   �      '            if ( $query->num_rows > 0 )5�_�   )   +           *   �       ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�]�     �   �   �   �      )            if ( $query->num_rows() > 0 )5�_�   *   ,           +   �       ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�^    �   �   �   �      .            if ( $query->affected_rows() > 0 )5�_�   +   -           ,   �   X    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�b�    �   �   �   �      [        $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table}");5�_�   ,   .           -   �   h    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�c     �   �   �   �      o        $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table} ORDER BY combi DESC");5�_�   -   /           .   �   h    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�c     �   �   �   �      n        $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table} ORDER BY combi ESC");5�_�   .   0           /   �   h    ����                                                                                                                                                                                                                                                                                                                            �   .       �   .       V   .    M�c    �   �   �   �      m        $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table} ORDER BY combi SC");5�_�   /   1           0   R        ����                                                                                                                                                                                                                                                                                                                            Q          i          V       M�cR     �   P   R   �      /        // Pull in our shortcuts from the table�   Q   R                  $data   = array();           $binds  = array();       [        $query  = $this->EE->db->query("SELECT id, combi, title, url FROM {$this->table}");       %        if ( $query->num_rows() > 0 )   	        {   6            foreach ( $query->result_array() as $row )               {   V                $binds[$row['id']] = array($row['title'], $row['url'], $row['combi']);               }   	        }       $        $data['shortcuts'] = $binds;       0        // Find out how many columns we're using           $total = count($binds);           $cols = 1;   6        if ( $total >= 10 AND $total < 20 ) $cols = 2;   +        else if ( $total >= 20 ) $cols = 3;   &        $per_col = ceil($total/$cols);   5        $columns = array_chunk($binds,$per_col,TRUE);       $        $data['columns'] = $columns;5�_�   0   2           1   Q       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�cf     �   P   R   �      3        $this->_process_available_shortcuts_view();5�_�   1   6           2   S   H    ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�cm    �   R   T   �      x        $this->sections[$this->EE->lang->line('available_shortcuts')] = $this->EE->load->view('available', $data, TRUE);5�_�   2   7   4       6   Q   7    ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�     �   P   R   �      :        $out = $this->_process_available_shortcuts_view();5�_�   6   8           7   Q   8    ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�     �   P   R   �      :        $out = $this->_process_available_shortcuts_view();5�_�   7   9           8   Q   8    ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�     �   P   R   �      >        $out = $this->_process_available_shortcuts_view(TRUE);5�_�   8   :           9   �   /    ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�d     �   �   �   �      0    function _process_available_shortcuts_view()5�_�   9   ;           :   �       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�d+     �   �   �   �      K        $out = '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';5�_�   :               ;   �       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�d6    �   �   �   �      S        if ( $header ) '<h5>'.$this->EE->lang->line('available_shortcuts').'</h5>';5�_�   2   5   3   6   4   S       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�     �   R   T   �      !        $this->sections[] = $out;5�_�   4               5   S       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�   
 �   R   T   �      #        $this->sections[''] = $out;5�_�   2           4   3   \       ����                                                                                                                                                                                                                                                                                                                            Q          R          V       M�c�   	 �   [   ]   �      F        $this->sections[] = $this->EE->load->view('new', $data, TRUE);5��