[% META
    type    = 'text';
%]<?php

# Load this in a separate file
include "../photo-data.php";

$sel = $photos[ rand(0, (count($photos) - 1)) ];

header("Location: [% site.uris.media %]" . $sel['name'] . "/");

?>
