<?php
    if( is_active_sidebar('main-sidebar') ):
        dynamic_sideabar('main-sidebar');
    else :
        _e('day la sidebar','Kimtan');
    endif;
?>
