<?php
define('P','.php');
define('LINKWAG_APP',LINKWAG_ROOT.DS.'app');

define('LINKWAG_ACTION',LINKWAG_APP.DS.'actions');
define('LINKWAG_VIEW',LINKWAG_APP.DS.'views');

define('IMG',LINKWAG_ROOT.DS.'img');

define('DIR',basename(dirname(__FILE__)));

define('PURL',WP_PLUGIN_URL.US.DIR);
define('API','http://linkwag.com/common.php');define('URL',get_bloginfo('url'));

wp_enqueue_style( 'linkwag',PURL.'/style.css', $deps, $ver, $media );

require_once(LINKWAG_APP.DS.'startup.php');
require_once(LINKWAG_APP.DS.'functions.php');
$st = new Linkwag();