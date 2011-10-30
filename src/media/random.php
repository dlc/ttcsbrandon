[% META
    title   = 'Random Photo'
    type    = 'html';

    PROCESS 'photos';
%]
<?php
$photos = array(
[% FOREACH photo IN photos %]
    array(
        'name'  => '[% photo.name %]',
        'date'  => '[% photo.date %]',
        'ext'   => '[% photo.ext %]'
    ),
[% END %]);
?>
<div id="main">
    <a href="[% site.uris.media %]random.php">
        <a href="[% site.uris.media %]<?php

            $sel = $photos[ rand(0, (count($photos) - 1)) ];
        
            echo $sel['name'];
        ?>/"/>
    </a>
</div>
