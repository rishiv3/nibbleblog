<?php

/*
 * Nibbleblog -
 * http://www.nibbleblog.com
 * Author Diego Najar

 * All Nibbleblog code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
*/

// =====================================================================
//	BOOT
// =====================================================================
if( !file_exists('content/private') )
{
	header('Location:install.php');
	exit('<a href="./install.php">click to install Nibbleblog</a>');
}

require('admin/boot/admin.bit');

// =====================================================================
//	CONTROLLER, VIEW and TEMPLATE
// =====================================================================

$default_template = 'easy4';

$controllers['dashboard']['view'] 		= array('security'=>true, 'title'=>$_LANG['DASHBOARD'], 'controller'=>'view', 'view'=>'view', 'template'=>$default_template, 'id_sidebar'=>1);

$controllers['page']['new']		 		= array('security'=>true, 'title'=>$_LANG['NEW_PAGE'], 'controller'=>'new', 'view'=>'new', 'template'=>$default_template, 'id_sidebar'=>2);
$controllers['post']['new_simple'] 		= array('security'=>true, 'title'=>$_LANG['NEW_SIMPLE_POST'], 'controller'=>'new', 'view'=>'new_simple', 'template'=>$default_template, 'id_sidebar'=>3);
$controllers['post']['new_video'] 		= array('security'=>true, 'title'=>$_LANG['NEW_VIDEO_POST'], 'controller'=>'new', 'view'=>'new_video', 'template'=>$default_template, 'id_sidebar'=>4);
$controllers['post']['new_quote'] 		= array('security'=>true, 'title'=>$_LANG['NEW_QUOTE_POST'], 'controller'=>'new', 'view'=>'new_quote', 'template'=>$default_template, 'id_sidebar'=>5);

$controllers['page']['edit']	 		= array('security'=>true, 'title'=>$_LANG['NEW_PAGE'], 'controller'=>'edit', 'view'=>'new', 'template'=>$default_template, 'id_sidebar'=>6);
$controllers['post']['edit_simple'] 	= array('security'=>true, 'title'=>$_LANG['EDIT_POST'], 'controller'=>'edit', 'view'=>'edit', 'template'=>$default_template, 'id_sidebar'=>7);
$controllers['post']['edit_video'] 		= array('security'=>true, 'title'=>$_LANG['EDIT_POST'], 'controller'=>'edit', 'view'=>'edit', 'template'=>$default_template, 'id_sidebar'=>8);
$controllers['post']['edit_quote'] 		= array('security'=>true, 'title'=>$_LANG['EDIT_POST'], 'controller'=>'edit', 'view'=>'new_quote', 'template'=>$default_template, 'id_sidebar'=>9);
$controllers['categories']['edit']		= array('security'=>true, 'title'=>$_LANG['MANAGE_CATEGORIES'], 'controller'=>'edit', 'view'=>'edit', 'template'=>$default_template, 'id_sidebar'=>10);

$controllers['page']['list']	 		= array('security'=>true, 'title'=>$_LANG['MANAGE_PAGES'], 'controller'=>'list', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>11);
$controllers['post']['list'] 			= array('security'=>true, 'title'=>$_LANG['MANAGE_POSTS'], 'controller'=>'list', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>12);
$controllers['categories']['list']		= array('security'=>true, 'title'=>$_LANG['MANAGE_CATEGORIES'], 'controller'=>'list', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>13);

$controllers['comments']['list']		= array('security'=>true, 'title'=>$_LANG['MANAGE_COMMENTS'], 'controller'=>'list', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>14);
$controllers['comments']['settings']	= array('security'=>true, 'title'=>$_LANG['COMMENT_SETTINGS'], 'controller'=>'settings', 'view'=>'settings', 'template'=>$default_template, 'id_sidebar'=>15);

$controllers['settings']['general']		= array('security'=>true, 'title'=>$_LANG['GENERAL_SETTINGS'], 'controller'=>'general', 'view'=>'general', 'template'=>$default_template, 'id_sidebar'=>16);
$controllers['settings']['advanced']	= array('security'=>true, 'title'=>$_LANG['ADVANCED_SETTINGS'], 'controller'=>'advanced', 'view'=>'advanced', 'template'=>$default_template, 'id_sidebar'=>17);
$controllers['settings']['regional']	= array('security'=>true, 'title'=>$_LANG['REGIONAL_SETTINGS'], 'controller'=>'regional', 'view'=>'regional', 'template'=>$default_template, 'id_sidebar'=>18);
$controllers['settings']['image']		= array('security'=>true, 'title'=>$_LANG['IMAGE_SETTINGS'], 'controller'=>'image', 'view'=>'image', 'template'=>$default_template, 'id_sidebar'=>19);
$controllers['settings']['themes']		= array('security'=>true, 'title'=>$_LANG['CHANGE_THEME'], 'controller'=>'themes', 'view'=>'themes', 'template'=>$default_template, 'id_sidebar'=>20);
$controllers['settings']['username']	= array('security'=>true, 'title'=>$_LANG['USERNAME_AND_PASSWORD'], 'controller'=>'username', 'view'=>'username', 'template'=>$default_template, 'id_sidebar'=>21);
$controllers['settings']['notifications']= array('security'=>true,'title'=>$_LANG['NOTIFICATIONS'], 'controller'=>'notifications', 'view'=>'notifications', 'template'=>$default_template, 'id_sidebar'=>22);
$controllers['settings']['seo'] 		 = array('security'=>true,'title'=>$_LANG['SEO_OPTIONS'], 'controller'=>'seo', 'view'=>'seo', 'template'=>$default_template, 'id_sidebar'=>23);

$controllers['plugins']['list']			= array('security'=>true, 'title'=>$_LANG['PLUGINS'], 'controller'=>'list', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>24);
$controllers['plugins']['install']		= array('security'=>true, 'title'=>$_LANG['PLUGINS'], 'controller'=>'install', 'view'=>'config', 'template'=>$default_template, 'id_sidebar'=>25);
$controllers['plugins']['uninstall']	= array('security'=>true, 'title'=>$_LANG['PLUGINS'], 'controller'=>'uninstall', 'view'=>'list', 'template'=>$default_template, 'id_sidebar'=>26);
$controllers['plugins']['config']		= array('security'=>true, 'title'=>$_LANG['PLUGINS'], 'controller'=>'config', 'view'=>'config', 'template'=>$default_template, 'id_sidebar'=>27);

$controllers['user']['logout']			= array('security'=>true,  'title'=>$_LANG['LOGOUT'], 'controller'=>'logout', 'view'=>'logout', 'template'=>'login', 'id_sidebar'=>28);
$controllers['user']['login']			= array('security'=>false, 'title'=>$_LANG['SIGN_IN_TO_NIBBLEBLOG_ADMIN_AREA'], 'controller'=>'login', 'view'=>'login', 'template'=>'login', 'id_sidebar'=>29);
$controllers['user']['forgot']			= array('security'=>false, 'title'=>$_LANG['CHANGE_PASSWORD'], 'controller'=>'forgot', 'view'=>'forgot', 'template'=>$default_template, 'id_sidebar'=>30);
$controllers['user']['send_forgot']		= array('security'=>false, 'title'=>$_LANG['FORGOT_PASSWORD'], 'controller'=>'send_forgot', 'view'=>'send_forgot', 'template'=>'login', 'id_sidebar'=>31);

$layout = array(
	'controller'=>'user/login.bit',
	'view'=>'user/login.bit',
	'template'=>'login/index.bit',
	'title'=>$_LANG['SIGN_IN_TO_NIBBLEBLOG_ADMIN_AREA'],
	'id_sidebar'=>null
);

if(isset($controllers[$url['controller']][$url['action']]))
{
	$dirname = $url['controller'].'/';
	$parameters = $controllers[$url['controller']][$url['action']];

	if($parameters['security'])
	{
		if(!isset($Login))
			exit('Nibbleblog security error - Obj $Login not found');

		if(!$Login->is_logued())
			exit('Nibbleblog security error - User not logued');
	}

	$layout['controller'] 	= $dirname.$parameters['controller'].'.bit';
	$layout['view'] 		= $dirname.$parameters['view'].'.bit';
	$layout['template'] 	= $parameters['template'].'/index.bit';
	$layout['title'] 		= $parameters['title'];
	$layout['id_sidebar']	= isset($parameters['id_sidebar'])?$parameters['id_sidebar']:null;

}

// Plugins
foreach($plugins as $plugin)
	$plugin->boot();

// Load the controller and template
require(PATH_ADMIN_CONTROLLER.$layout['controller']);
require(PATH_ADMIN_TEMPLATES.$layout['template']);

?>