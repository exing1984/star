<?php
/**
 * @package Joomla 1.5.x
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 *
 * @Teglo Template
 * @copyright Copyright (C) 2010 by www.teglo.info
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @date $Date: 2011-07-31 13:10:18 +0200 (So, 31 Jul 2011) $
 * @revision $Revision: 266 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://dev.teglo.info/svn/playjoom/templates/teglo/html/mod_menu/tmpl/tabs_component.php $
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$class = $item->params->get('menu-anchor_css', '') ? 'class="'.$item->params->get('menu-anchor_css', '').'" ' : '';
$title = $item->params->get('menu-anchor_title', '') ? 'title="'.$item->params->get('menu-anchor_title', '').'" ' : '';
if ($item->params->get('menu_image', '')) {
		$item->params->get('menu_text', 1 ) ? 
		$linktype = '<img src="'.JURI::base(true).'/'.$item->params->get('menu_image', '').'" class="top-menu-icon" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.JURI::base(true).'/'.$item->params->get('menu_image', '').'" class="top-menu-icon" alt="'.$item->title.'" />';
} 
else { $linktype = $item->title;
}
//$linktype = $item->params->get('menu_image', '') && $item->params->get('menu_text', 1 ) ? '<img src="'.$item->params->get('menu_image', '').'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' : $item->title;

switch ($item->browserNav) :
	default:
	case 0:
?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" <?php echo $title; ?>><?php echo $tabsanfang;?><span><?php echo $linktype; ?></span><?php echo $tabsende; ?></a><?php
		break;
	case 1:
		// _blank
?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $tabsanfang;?><span><?php echo $linktype; ?></span><?php echo $tabsende; ?></a><?php
		break;
	case 2:
		// window.open
?><a <?php echo $class; ?>href="<?php echo $item->flink.'&amp;tmpl=component'; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php echo $linktype; ?></a>
<?php
		break;
endswitch;
