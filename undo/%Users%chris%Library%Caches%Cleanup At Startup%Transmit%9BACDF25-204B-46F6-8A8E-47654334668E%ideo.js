Vim�UnDo�  �����ho3�`υ������;����K��  �   J                changeHero(taglines[item].items.eq(offset), offset, item);   �                          N �U    _�                     �       ����                                                                                                                                                                                                                                                                                                                                                             N ��    �   �   �  �                      // �   �   �  �    5�_�                    �       ����                                                                                                                                                                                                                                                                                                                           L         W         V       N �T    �   �   �  �      J                changeHero(taglines[item].items.eq(offset), offset, item);5�_�                   �        ����                                                                                                                                                                                                                                                                                                                           X         c         V       N ��     �   �   �  �      #            // Enable slideshow nav   9            $("#slideshow_nav a").click(function(event) {   '                event.preventDefault();   @                var item    = $("#slideshow_nav a").index(this);   2                var offset  = (item <= 3) ? 0 : 1;   5                item = (item <= 3) ? item : item - 4;   J                changeHero(taglines[item].items.eq(offset), offset, item);    				clearInterval(heroInterval);   #				initiateHeroSwap(offset, item);   =                $("#slideshow_nav a").removeClass("current");   ,                $(this).addClass("current");               });5�_�                     �       ����                                                                                                                                                                                                                                                                                                                           Y         d         V       N ��     �   �   �  �       5��