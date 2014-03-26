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
 * @headurl $HeadURL: http://dev.teglo.info/svn/playjoom/templates/teglo/html/mod_menu/tmpl/default_separator.php $
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$title = $item->params->get('menu-anchor_title', '') ? 'title="'.$item->params->get('menu-anchor_title', '').'" ' : '';
if ($item->params->get('menu_image', '')) {
		$item->params->get('menu_text', 1 ) ? 
		$linktype = '<img src="'.JURI::base(true).'/'.$item->params->get('menu_image', '').'" class="top-menu-icon" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.JURI::base(true).'/'.$item->params->get('menu_image', '').'" class="top-menu-icon" alt="'.$item->title.'" />';
} 
else { $linktype = $item->title;
}

?><span class="separator"><?php echo $title; ?><?php echo $linktype; ?></span>