<?php

include 'getrss.php';
$t->assign('arr', $stuff);
$t->draw('rss');

?>