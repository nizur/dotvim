Vim�UnDo� ����u_4��)���Aa�IpjO��w�V3�   �   //                              M/+    _�                             ����                                                                                                                                                                                                                                                                                                                                                             M/(     �       �       5�_�                    �        ����                                                                                                                                                                                                                                                                                                                                                             M/(     �   �   �           5�_�                    (        ����                                                                                                                                                                                                                                                                                                                                                             M/(0    �   }             )        <h1>Mobile App Stats</h1>        �   {   }          #        <div class="content-full">	�   )   +          	�   '   )          	5�_�                       �    ����                                                                                                                                                                                                                                                                                                                                                             M/(r     �         �      �$total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6')");5�_�                      �    ����                                                                                                                                                                                                                                                                                                                                                             M/(    �         �      �$total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6')5�_�      
                 �    ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      �$total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6') AND first_joined > '1265932800'");5�_�         	       
      X    ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      j$dl_query = $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE entry_id > 27");5�_�   
                    y    ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      �$dl_query = $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE AND first_joined > '1265932800' entry_id > 27");5�_�                      /   ?   n                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      // �         �    5�_�                           ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      // p5�_�                           ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/+     �         �      // p12659328005�_�                            ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/+    �         �      '// p1265932800 = midnight Feb. 12, 20105�_�                       /   ?   n                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �         �      y// Get total downloads after Apple tech (ID 27)                                                                12659328005�_�              
   	   	   �    ����                                                                                                                                                                                                                                                                                                                               �          �       v   �    M/*�     �      
   �      �$i_total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE system_name='iPhone OS' AND app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6') AND first_joined > '1265932800'");5�_�                      �    ����                                                                                                                                                                                                                                                                                                                                                             M/({     �         �      �$total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6' AND first_joined > '1265932800')5�_�                       �    ����                                                                                                                                                                                                                                                                                                                                                             M/(u     �         �      �$total_query 	= $DB->query("SELECT COUNT(entry_id) AS count FROM exp_iphone_device_data WHERE app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6')       3$sql = "SELECT COUNT(comment_date) AS comment_count           FROM exp_comments           WHERE status='o'   D        AND comment_date <= '{$end}' AND comment_date > '{$start}'";       $query = $DB->query($sql);       E$return_data['comment_count'] = intval($query->row['comment_count']);       /**    * Gather iOS cumulative    **/       8// 1265932800 = Feb 12, 2010; first day of real tracking       $sql = "SELECT entry_id, model   #        FROM exp_iphone_device_data   H        WHERE ( app_version NOT IN ('0.1','0.2','0.3','0.4','0.5','0.6')   -                AND system_name='iPhone OS' )   &        AND ( first_joined <= '{$end}'5��