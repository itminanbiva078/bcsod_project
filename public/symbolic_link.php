<?php $target = '/home/debasish1/public_html/bcsod.com/storage/app/public/';

$shortcut = '/home/debasish1/public_html/bcsod.com/public/storage';
var_dump(symlink($target, $shortcut));
exit;
?>