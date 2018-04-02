<?php
$GLOBALS['HTTP_SITE_ADMIN_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/accrafrontend/admin/';
$GLOBALS['SITE_APP_URL'] = 'http://' .$_SERVER['HTTP_HOST'].'/pathlab/application/index';
$GLOBALS['PAGE_BEFORE_LOGIN'] = array('Admin\Controller\Index\login','Admin\Controller\Index\index');
$GLOBALS['SITE_PATH'] = $_SERVER['DOCUMENT_ROOT'];
define('NODE_API', 'http://localhost:3000/');
define('LAB_API', 'http://52.67.139.216:3000/');
$GLOBALS['PRODUCTIMAGEPATH'] = $_SERVER['DOCUMENT_ROOT'].'accrabasket/product_img';
$GLOBALS['ATTRIBUTEIMAGEPATH'] = $_SERVER['DOCUMENT_ROOT'].'/accrabasket/attribute_img';
$GLOBALS['LEFT_MENU_ALLOW'] = array('product','hotdeals');
