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

$sel = $photos[ rand(0, (count($photos) - 1)) ];

header("Location: [% site.uris.media %]" . $sel['name'] . "/");

?>
