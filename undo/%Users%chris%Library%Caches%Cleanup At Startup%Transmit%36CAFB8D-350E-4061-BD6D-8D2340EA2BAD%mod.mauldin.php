Vim�UnDo� �9U�;���hl}��_��'ь��|O�e��  ?   Q            $vars['auto_renewing']      = ( $row['type'] == '1' ) ? TRUE : FALSE;  f   2                       M�ͽ    _�                    E       ����                                                                                                                                                                                                                                                                                                                                                             M��}     �  D  F  >    5�_�                   E       ����                                                                                                                                                                                                                                                                                                                                                             M��     �  D  F  ?      �                $sub['status']          = ( $row['expire'] == "0000-00-00" OR date("Y-m-d") < $row['expire'] ) ? 'Active' : 'Inactive';5�_�                   E       ����                                                                                                                                                                                                                                                                                                                                                             M�ˁ     �  D  F  ?      �            $sub['status']          = ( $row['expire'] == "0000-00-00" OR date("Y-m-d") < $row['expire'] ) ? 'Active' : 'Inactive';5�_�                   E       ����                                                                                                                                                                                                                                                                                                                                                             M�˄     �  D  F  ?      �            $vars['status']          = ( $row['expire'] == "0000-00-00" OR date("Y-m-d") < $row['expire'] ) ? 'Active' : 'Inactive';5�_�                   E   2    ����                                                                                                                                                                                                                                                                                                                                                             M�ˈ     �  D  F  ?      �            $vars['subscription_status']          = ( $row['expire'] == "0000-00-00" OR date("Y-m-d") < $row['expire'] ) ? 'Active' : 'Inactive';5�_�                   F       ����                                                                                                                                                                                                                                                                                                                                                             M�ˍ    �  E  G  ?      x            $vars['subscription_status']    = ( in_array($row['status'], array('0','10','11')) ) ? 'Active' : 'Expired';5�_�                   E   �    ����                                                                                                                                                                                                                                                                                                                                                             M��3    �  D  F  ?      �            $vars['subscription_status']    = ( $row['expire'] == "0000-00-00" OR date("Y-m-d") < $row['expire'] ) ? 'Active' : 'Inactive';5�_�      	             @   8    ����                                                                                                                                                                                                                                                                                                                                                             M�̦     �  ?  A  @                  �  ?  A  ?    5�_�      
           	  @       ����                                                                                                                                                                                                                                                                                                                                                             M���     �  ?  @          "            $title = $row['name'];5�_�   	              
  f   2    ����                                                                                                                                                                                                                                                                                                                                                             M�ͥ     �  e  g  ?      Q            $vars['auto_renewing']      = ( $row['type'] == '1' ) ? TRUE : FALSE;5�_�   
                f   J    ����                                                                                                                                                                                                                                                                                                                                                             M�ͭ     �  e  g  ?      b            $vars['auto_renewing']      = ( $row['next_transaction_date'] == '1' ) ? TRUE : FALSE;5�_�                   f   N    ����                                                                                                                                                                                                                                                                                                                                                             M�Ͱ     �  e  g  ?      b            $vars['auto_renewing']      = ( $row['next_transaction_date'] != '1' ) ? TRUE : FALSE;5�_�                   f   N    ����                                                                                                                                                                                                                                                                                                                                                             M�Ͳ     �  e  g  ?      a            $vars['auto_renewing']      = ( $row['next_transaction_date'] != '' ) ? TRUE : FALSE;5�_�                    f   J    ����                                                                                                                                                                                                                                                                                                                                                             M�ͼ    �  e  g  ?      k            $vars['auto_renewing']      = ( $row['next_transaction_date'] != '0000-00-00' ) ? TRUE : FALSE;5��