[% META
    type    = 'text';

    PROCESS 'photos';
%]<?php
$photos = array(
[% FOREACH photo IN photos %]
    array(
        'name'  => '[% photo.name %]',
        'date'  => '[% photo.date %]',
        'ext'   => '[% photo.ext %]'
    ),
[% END %]);
?>[% site.uris.media %]<?php

$sel = $photos[ rand(0, (count($photos) - 1)) ];
        
echo $sel['name'];
?>/<?php # kill final newline ?>
