[% META
    type    = 'text';
%]<?php
$thumb_width = defined($thumb_width) ? $thumb_width : "95";
$thumb_height = defined($thumb_height) ? $thumb_height : "64";

# Load this in a separate file
include "photo-data.php";

?><a href="[% site.uris.media %]<?php

            $sel = $photos[ rand(0, (count($photos) - 1)) ];
        
            echo $sel['name'];
?>/"/><img src="[% site.uris.photos %]/<?php echo $sel['date']; ?>/<?php echo $sel['name']; ?>.<?php echo $sel['ext']; ?>" height="<?php echo $thumb_height; ?>" width="<?php echo $thumb_width; ?>"/></a>
