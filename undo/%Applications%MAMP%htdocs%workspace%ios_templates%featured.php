Vim�UnDo� ~ܥ�E��C���=�]��kJߺ��/x^��   �   `    $large_photo = ( $row['large_photo'] != '' ) ? $ngen_prefix['229'].$row['large_photo'] : '';   �   A      C       C   C   C    L��S    _�                             ����                                                                                                                                                                                                                                                                                                                                                             L���     �      |       5�_�                   |        ����                                                                                                                                                                                                                                                                                                                                                             L���     �  {  |           5�_�                    1        ����                                                                                                                                                                                                                                                                                                                                                             L���    �   D   F                  GROUP BY wt.entry_id �   C   E          -        AND wd.field_id_211 IN ('1','2','3') �   6   8          		wd.field_id_178 AS body, �   5   7          		wd.field_id_174 AS photo, �   3   5          "        wd.field_id_173 AS thumb, �   2   4          		wd.field_id_176 AS featured, �   1   3          		wd.field_id_175 AS mobile, �   0   2          $		wd.field_id_180 AS custom_author, 5�_�                                                                                                                                                                                                                                                                                                                                                             .      	       2   V   2    L�u     �        u    �                ./** ------------------------------------------   /** Load CFPropertyList class   0/** ------------------------------------------*/       Vrequire_once('/web/redesign/htdocs/Re-Portage/lib/cfpropertylist/CFPropertyList.php');    5�_�                            ����                                                                                                                                                                                                                                                                                                                                                  V        L�u     �        ~    �        ~      ./** ------------------------------------------�                /** Do we have a udid?   0/** ------------------------------------------*/5�_�                           ����                                                                                                                                                                                                                                                                                                                                                  V        L�u     �        �      	returnPlist($struct);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                  V        L�u      �        �      	$IOS->returnPlist($struct);5�_�      	                     ����                                                                                                                                                                                                                                                                                                                                                  V        L�u!     �        �      	$IOS->returnlist($struct);5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                                                  V        L�u9     �        �      	$IOS->return_plist($struct);5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                               "          "       V   "    L�uA     �        ~    �        ~      ./** ------------------------------------------�                /** Gather segments for params   0/** ------------------------------------------*/5�_�   
                        ����                                                                                                                                                                                                                                                                                                                               "          "       V   "    L�uS     �        �       * Gather segment for 5�_�                           ����                                                                                                                                                                                                                                                                                                                               "          "       V   "    L�uX     �        �       * Gather segment for params5�_�                    #        ����                                                                                                                                                                                                                                                                                                                            #           %           V        L�uk     �   "   $  }    �   "   #          p$query 	= $DB->query("SELECT udid FROM exp_iphone_device_data WHERE udid='".$DB->escape_str($udid)."' LIMIT 1");       if ( $query->num_rows == 0 )5�_�                             ����                                                                                                                                                                                                                                                                                                                                       !           V        L�up     �      "  |    �         |      ./** ------------------------------------------�                 /** Is the udid registered?   0/** ------------------------------------------*/5�_�                    &       ����                                                                                                                                                                                                                                                                                                                                       "           V        L�uy     �   %   '  ~      	returnPlist($struct);5�_�                    &       ����                                                                                                                                                                                                                                                                                                                                       "           V        L�u}     �   %   '  ~      	$IOS->returnPlist($struct);5�_�                    &       ����                                                                                                                                                                                                                                                                                                                                       "           V        L�u     �   %   '  ~      	$IOS->returnlist($struct);5�_�                    &       ����                                                                                                                                                                                                                                                                                                                                       "           V        L�u�    �   %   '  ~      	$IOS->return_plist($struct);5�_�                           ����                                                                                                                                                                                                                                                                                                                                       "           V        L�u�     �        ~      ($udid 	= $REGX->xss_clean($IN->SEGS[3]);5�_�                    *        ����                                                                                                                                                                                                                                                                                                                            )          +          V       L�u�     �   )   ,  |    �   (   *  |      ./** ------------------------------------------�   )   *          */** Pull in information for the data table   0/** ------------------------------------------*/5�_�                    N        ����                                                                                                                                                                                                                                                                                                                            M          O          V       L�u�     �   M   P  |    �   L   N  |      ./** ------------------------------------------�   M   N          #/** No results? Send an empty plist   0/** ------------------------------------------*/5�_�                    S       ����                                                                                                                                                                                                                                                                                                                            M          P          V       L�u�     �   R   T  ~      	returnPlist(array());5�_�                    S       ����                                                                                                                                                                                                                                                                                                                            M          P          V       L�u�     �   R   T  ~      	$IOS->returnPlist(array());5�_�                    S       ����                                                                                                                                                                                                                                                                                                                            M          P          V       L�u�     �   R   T  ~      	$IOS->returnlist(array());5�_�                    S       ����                                                                                                                                                                                                                                                                                                                            M          P          V       L�u�     �   R   T  ~      	$IOS->return_plist(array());5�_�                    W        ����                                                                                                                                                                                                                                                                                                                            V   "       X   "       V   "    L�u�     �   V   Y  |    �   U   W  |      ./** ------------------------------------------�   V   W          /** Build the plist   0/** ------------------------------------------*/5�_�                    d        ����                                                                                                                                                                                                                                                                                                                            d          n          V       L�u�     �   c   e  s    �   c   d          �	$sql 	= "SELECT tt.tag_name FROM exp_tag_entries te LEFT JOIN exp_tag_tags tt ON te.tag_id=tt.tag_id WHERE te.entry_id='".$row['entry_id']."'";   	$tq 	= $DB->query($sql);       	$tags 	= array();       "	foreach ( $tq->result as $t_row )   	{   (		array_push($tags, $t_row['tag_name']);   	}       	$tags = implode(",",$tags);5�_�                    i                                                                                                                                                                                                                                                                                                                                      d           d   2       V       L�v     �   h   j  u          �   h   j  t    5�_�                    o        ����                                                                                                                                                                                                                                                                                                                            o   
       �         V   
    L�v1     �   n   t  \    �   n   o              // Get single author array       $authors = array();   \    $email = array("reporterName" => $row['screen_name'], "reporterEmail" => $row['email']);        array_push($authors,$email);       $email = $authors;       %    // Now check for multiple authors   +    $a_sql = "SELECT m.screen_name, m.email           FROM exp_members m   A        LEFT JOIN exp_user_authors ua ON ua.author_id=m.member_id   2        WHERE ua.entry_id='".$row['entry_id']."'";   "    $a_query = $DB->query($a_sql);       !    if ( $a_query->num_rows > 0 )       {           $authors = array();       ,        foreach ($a_query->result as $a_row)   	        {   i            $author = array("reporterName" => $a_row['screen_name'], "reporterEmail" => $a_row['email']);   *            array_push($authors, $author);   	        }               $email = $authors;       }5�_�                    u        ����                                                                                                                                                                                                                                                                                                                            u          �          V       L�vC     �   t   u          	// NOLA   #//	if ( $row['weblog_id'] == "20" )   //	{   //		// Author   V//		$byline = getByline($row['n_custom_author'], $row['author_id'], $row['entry_id']);   //   //		// Thumb   //		$thumb = $row['n_thumb'];   //   //		// Photo   //		$photo = $row['n_photo'];   //   //		// Body   //		$body = $row['n_body'];   //   //		// Featured   #//		$featured = $row['n_featured'];   //   //		// Is this to be removed?   H//		$removed = ( strtolower($row['n_mobile']) == "yes" ) ? FALSE : TRUE;   //	}   //	// ARTICLE/FEATURE   //	else   //	{   		// Byline   R		$byline	= getByline($row['custom_author'], $row['author_id'], $row['entry_id']);5�_�                     u                                                                                                                                                                                                                                                                                                                                      u          u          V       L�vE     �   t   u           5�_�      !               u        ����                                                                                                                                                                                                                                                                                                                            u          �          V       L�vL     �   t   �  F      
		// Thumb           $thumb = $row['thumb'];               // Thumb from Medium   $        $alt_thumb = $row['medium'];       
		// Photo   		$photo = $row['photo'];       			// Body   		$body = $row['body'];       			// Deck   		$deck = $row['deck'];       		// Featured   		$featured = $row['featured'];       		// Is this to be removed?   D		$removed = ( strtolower($row['mobile']) == "yes" ) ? FALSE : TRUE;5�_�       "           !   �                                                                                                                                                                                                                                                                                                                                      u          �          V       L�vN     �   �   �          	//}5�_�   !   #           "   i        ����                                                                                                                                                                                                                                                                                                                            i          k          V       L�vS    �   h   i              // Deck   	$deck 	= "";    5�_�   "   $           #   �       ����                                                                                                                                                                                                                                                                                                                            i          i          V       L�vl     �   �   �  B      T					"headline" 				=> ascii_cleanup($REGX->entities_to_ascii($row['title'], TRUE)),5�_�   #   %           $   �        ����                                                                                                                                                                                                                                                                                                                            �   1       �       4   V   4    L�vv     �   �   �          @	// Pull in typography class to parse upload directory variables   #	if ( ! class_exists('Typography'))   	{   *		require PATH_CORE.'core.typography'.EXT;   	}       	$TYPE = new Typography;       	$TYPE->html_format = "safe";   	$TYPE->text_format = "none";    5�_�   $   &           %         1   4                                                                                                                                                                                                                                                                                                                            �   1       �       4   V   4    L�v}     �        7    5�_�   %   '           &           ����                                                                                                                                                                                                                                                                                                                                                V       L�v�     �        B      @	// Pull in typography class to parse upload directory variables   #	if ( ! class_exists('Typography'))   	{   *		require PATH_CORE.'core.typography'.EXT;   	}       	$TYPE = new Typography;       	$TYPE->html_format = "safe";   	$TYPE->text_format = "none";    5�_�   &   (           '          ����                                                                                                                                                                                                                                                                                                                                                V       L�v�     �                ?// Pull in typography class to parse upload directory variables5�_�   '   )           (          ����                                                                                                                                                                                                                                                                                                                                                V       L�v�     �        B    �        B       �        A    5�_�   (   *           )                                                                                                                                                                                                                                                                                                                                                            V       L�v�    �        D    5�_�   )   +           *   �   $    ����                                                                                                                                                                                                                                                                                                                            �   $       �   $          '    L�v�     �   �   �  E      B	if ( $body != "" ) $dict["body"] = clean_text($body,$guid,$keep);�   �   �  E      B	if ( $deck != "" ) $dict["deck"] = clean_text($deck,$guid,$keep);5�_�   *   ,           +   �         '                                                                                                                                                                                                                                                                                                                            �   $       �   $          '    L�v�     �   �   �  F          �   �   �  E    5�_�   +   -           ,   �       ����                                                                                                                                                                                                                                                                                                                            �   $       �   $          '    L�v�     �   �   �          	array_push($struct, $dict);5�_�   ,   .           -   �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�v�     �   �   �  C    �   �   �  C      ./** ------------------------------------------�   �   �          /** Return the plist   0/** ------------------------------------------*/5�_�   -   /           .   �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�v�     �   �   �  E      returnPlist($struct);5�_�   .   0           /   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�v�     �   �   �  E      $IOS->returnPlist($struct);5�_�   /   1           0   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�v�     �   �   �  E      $IOS->returnlist($struct);5�_�   0   2           1   �       ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�v�     �   �   �  E      $IOS->return_plist($struct);5�_�   1   3           2   �                                                                                                                                                                                                                                                                                                                                      �         D         V       L�v�    �   �   �       t       ./** ------------------------------------------   (/** Build and return the plist then exit   0/** ------------------------------------------*/       function returnPlist($struct)   {    	$plist 	= new CFPropertyList();   	$td 	= new CFTypeDetector();   *	$guess_struct = $td->toCFType( $struct );   	$plist->add( $guess_struct );       	// Return XML file   "	header('Content-Type: text/xml');   J	header('Content-Disposition: attachment; filename="articles.xml.plist"');   	echo $plist->toXML();   	exit;   }       ./** ------------------------------------------   /** Get author information   0/** ------------------------------------------*/       8function getByline($author_field, $author_id, $entry_id)   {   	global $DB;       4	// If we have a custom field, use it and we're done   	if ( $author_field != "" )   	{   ,		return ucfirst(clean_text($author_field));   	}   	else   	{   !		// Check for user authors first   �		$sql 		= "SELECT m.screen_name, ua.principal FROM exp_user_authors ua LEFT JOIN exp_members m ON ua.author_id=m.member_id WHERE entry_id='".$entry_id."'";   		$query 		= $DB->query($sql);       6		// No user authors? Pull in regular author info then   		if ( $query->num_rows == 0 )   		{   j			$query 	= $DB->query("SELECT screen_name FROM exp_members WHERE member_id='".$author_id."' LIMIT 0,1");   +			return "By ".$query->row['screen_name'];   		}       0		// We have user authors so put it all together   		$str 		= "By ";   		$authors 	= array();       $		foreach ( $query->result as $row )   		{   .			if ( strtolower($row['principal']) == 'y' )   			{   0				array_unshift($authors,$row['screen_name']);   			}   			else   			{   -				array_push($authors,$row['screen_name']);   			}   		}       (		return $str.implode(' and ',$authors);   	}   }       ./** ------------------------------------------   +/** Cleans out the article of unwanted tags   0/** ------------------------------------------*/       .function clean_text($text, $guid='', $keep='')   {   	$text = preg_replace(           array(   %          // Remove invisible content   *            '@<head[^>]*?>.*?</head>@siu',   ,            '@<style[^>]*?>.*?</style>@siu',   -            '@<script[^>]*?.*?</script>@siu',   -            '@<object[^>]*?.*?</object>@siu',   +            '@<embed[^>]*?.*?</embed>@siu',   -            '@<applet[^>]*?.*?</applet>@siu',   1            '@<noframes[^>]*?.*?</noframes>@siu',   1            '@<noscript[^>]*?.*?</noscript>@siu',   .            '@<noembed[^>]*?.*?</noembed>@siu'           ),' ',$text );       3	// Strip out the Web URL part of an in-page anchor   	if ( $guid != '' )   	{   (		$text = str_replace($guid, '', $text);   	}       /	// Alter in-page anchors so we don't lose them   7	$text = str_replace('<a name=', '&lt;a name=', $text);       	// Strip empty tags   A	$text = preg_replace("/<[^\/>]*>([\s]?)*<\/[^>]*>/", '', $text);       	// Strip unwated tags   !	$text = strip_tags($text,$keep);       $	// Put back altered in-page anchors   7	$text = str_replace('&lt;a name=', '<a name=', $text);       	return $text;   }       ./** ------------------------------------------   /** Simple ASCII cleanup   0/** ------------------------------------------*/       function ascii_cleanup($str)   {   7	return $str = str_replace(array("&rsquo;", "&lsquo;"),   					   array("´","`"),       				   $str);   }5�_�   2   4           3   �        ����                                                                                                                                                                                                                                                                                                                                                             L��    �   �   �   �    5�_�   3   5           4   �   /    ����                                                                                                                                                                                                                                                                                                                                       �           V        L��#     �   �   �   �      @                    "entry_id"              => $row['entry_id'],5�_�   4   6           5   �   3    ����                                                                                                                                                                                                                                                                                                                                       �           V        L��W    �   �   �   �      E                    "entry_id"              => (str)$row['entry_id'],5�_�   5   7           6   �        ����                                                                                                                                                                                                                                                                                                                                  0   �      3   V   5    L�؋     �   �   �   �    5�_�   6   8           7   �       ����                                                                                                                                                                                                                                                                                                                                  0   �      3   V   5    L�ؓ     �   �   �   �    5�_�   7   9           8   �        ����                                                                                                                                                                                                                                                                                                                            �          �          V       L�ؖ    �   �   �          H                    "entry_id"              => (string)$row['entry_id'],   H                    "entry_id"              => (string)$row['entry_id'],5�_�   8   :           9   G        ����                                                                                                                                                                                                                                                                                                                                                             L�׼     �   G   I   �              �   G   I   �    5�_�   9   ;           :   �                                                                                                                                                                                                                                                                                                                                      �         �       &   V   &    L���   	 �   �   �   �    �   �   �              // Photo       $photo = $row['photo'];    5�_�   :   <           ;   H       ����                                                                                                                                                                                                                                                                                                                            �           �           V   &    L��     �   G   I   �    5�_�   ;   =           <   f                                                                                                                                                                                                                                                                                                                                     �           �           V   &    L��0   
 �   e   u   �    5�_�   <   >           =   �        ����                                                                                                                                                                                                                                                                                                                            �           �           V   &    L��_     �   �   �   �    5�_�   =   ?           >   �       ����                                                                                                                                                                                                                                                                                                                            �           �           V   &    L��b     �   �   �   �      P	if ( $photo != "" ) $dict["leadPhoto"] = strip_tags($TYPE->parse_type($photo));5�_�   >   @           ?   �   "    ����                                                                                                                                                                                                                                                                                                                            �           �           V   &    L��g     �   �   �   �      V	if ( $large_photo != "" ) $dict["leadPhoto"] = strip_tags($TYPE->parse_type($photo));5�_�   ?   A           @   �   O    ����                                                                                                                                                                                                                                                                                                                            �           �           V   &    L��k    �   �   �   �      W	if ( $large_photo != "" ) $dict["largePhoto"] = strip_tags($TYPE->parse_type($photo));5�_�   @   B           A   I       ����                                                                                                                                                                                                                                                                                                                                      �         V       L��;     �   H   J   �      '        wd.field_id_229 AS large_photo,5�_�   A   C           B   j   e    ����                                                                                                                                                                                                                                                                                                                                      �         V       L��E     �   i   k   �      p$settings_query = $DB->query("SELECT field_id, ff_settings FROM exp_weblog_fields WHERE field_id IN (229,239)");5�_�   B               C   �   A    ����                                                                                                                                                                                                                                                                                                                                      �         V       L��R    �   �   �   �      `    $large_photo = ( $row['large_photo'] != '' ) ? $ngen_prefix['229'].$row['large_photo'] : '';5��