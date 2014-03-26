<?php
/**
 * @package Joomla 1.6.x
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 *
 * @Teglo Template
 * @copyright Copyright (C) 2009 - 2010 by Teglo
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @date $Date: 2012-12-06 21:21:19 +0100 (Do, 06 Dez 2012) $
 * @revision $Revision: 638 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://dev.teglo.info/svn/playjoom/templates/teglo/html/mod_menu/default.php $
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<!-- The class on the root UL tag was changed to match the Blueprint nav style -->
<ul class="joomla-nav<?php echo $params->get('class_sfx');?>"<?php
	$tag = '';
	if ($params->get('tag_id')!=NULL) {
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php

// Build container for the item tabs
$tabsanfang = '<b class="unten"><b class="oben"><b class="xb1">
               </b>
               <b class="xb2">
               </b>
               <b class="xb3">
               </b><b class="xb4">
               </b>
               </b><span class="boxinhalt">';
$tabsende = '</span></b>';

foreach ($list as $i => &$item) :
	$id = '';
	if($item->id == $active_id)
	{
		$id = ' id="current"';
	}
	$class = '';
	if(in_array($item->id, $path))
	{
		// Changed the active style to match the Blueprint nav style
		$class .= 'selected ';
	}
	if($item->deeper) {
		$class .= 'parent ';
	}

	$class = ' class="'.$class.'item'.$item->id.'"';

	echo '<li'.$id.$class.'>';
	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
			    require JPATH_BASE.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$app->getTemplate().DIRECTORY_SEPARATOR.'html'.DIRECTORY_SEPARATOR.'mod_menu'.DIRECTORY_SEPARATOR.'tmpl'.DIRECTORY_SEPARATOR.'default_'.$item->type.'.php';
	    break;
		default:
			    require JPATH_BASE.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$app->getTemplate().DIRECTORY_SEPARATOR.'html'.DIRECTORY_SEPARATOR.'mod_menu'.DIRECTORY_SEPARATOR.'tmpl'.DIRECTORY_SEPARATOR.'default_url.php';
	    break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper) {
		echo '<ul>';
	}
	// The next item is shallower.
	elseif ($item->shallower) {
		echo '</li></span>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;
?></ul>