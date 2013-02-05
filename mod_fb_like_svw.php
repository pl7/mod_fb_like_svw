<?php

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

//include helper file
//require_once (dirname(__FILE__).DS.'helper.php');

//This is the parameter we get from our xml file above
$pluginWidth = $params->get('pluginWidth');
$become_svw_facebbok_fan = $params->get('becomeFan');

//get the items to display from the helper
// $items = ModSvwLandingPageHelper::getItems($userCount);

//include template
require(JModuleHelper::getLayoutPath('mod_fb_like_svw'));


?>