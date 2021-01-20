<?php
//init
$data = array();
$imageObj = new image();
$where = "WHERE t.status >= 1";
$order = "ORDER BY t.sort ASC,t.id DESC";
$perpage = 3;
$mode = '';
$templates = DIR_TEMPLATES.$init["op"].'.html';
$breadcrumb->add("ABOUT US","{$init["op"]}.html");

$init["path"] = $breadcrumb->createFPath();
$contentSmarty = new Smarty;
$contentSmarty->assign('init',$init);
$contentSmarty->assign('data',$data);
$contentSmarty->assign('webAry',$webAry);
$content .= $contentSmarty->fetch($templates);
unset($contentSmarty);
?>
