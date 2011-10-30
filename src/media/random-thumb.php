[% META
    type    = 'text';

    PROCESS 'photos';
%]<?php
$thumb_width = defined($thumb_width) ? $thumb_width : "95";
$thumb_height = defined($thumb_height) ? $thumb_height : "64";

$photos = array(
[% FOREACH photo IN photos %]
    array(
        'name'  => '[% photo.name %]',
        'date'  => '[% photo.date %]',
        'ext'   => '[% photo.ext %]'
    ),
[% END %]);
?><a href="[% site.uris.media %]<?php

            $sel = $photos[ rand(0, (count($photos) - 1)) ];
        
            echo $sel['name'];
?>/"/><img src="[% site.uris.photos %]/<?php echo $sel['date']; ?>/<?php echo $sel['name']; ?>.<?php echo $sel['ext']; ?>" height="<?php echo $thumb_height; ?>" width="<?php echo $thumb_width; ?>"/></a>
