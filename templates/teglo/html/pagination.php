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
 * @PlayJoom Component
 * @copyright Copyright (C) 2010-2011 by www.teglo.info
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @date $Date: 2011-10-29 18:12:45 +0200 (Sa, 29 Okt 2011) $
 * @revision $Revision: 335 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://dev.teglo.info/svn/playjoom/templates/teglo/html/pagination.php $
 */

// no direct access
defined('_JEXEC') or die;



function pagination_list_footer($list)
{
	// Initialize variables
	$lang = JFactory::getLanguage();

	/**
	 * Fix javascript jump menu
	 *
	 * Remove the onchange=Joomla.submitform from the select tag
	 * Add in a button with onclick instead
	 */
	$fixlimit = $list['limitfield'];
	$fixlimit = preg_replace('/onchange="Joomla.submitform\(\);"/', '', $fixlimit);

	$html = '<div class="pagination">';

	$html .= '<label for="limit">'.JText::_('JGLOBAL_DISPLAY_NUM').'</label>';
	$html .= $fixlimit;
	$html .= '<button id="pagination-go" type="button" onclick="Joomla.submitform()">'.JText::_('JSUBMIT').'</button></div><br />';
	
	$html .= '<div class="pageslinks">'.$list['pageslinks'].'</div>';
	$html .= '<div class="pagescounter">'.$list['pagescounter'].'</div>';

	$html .= '<input type="hidden" name="'.$list['prefix'].'limitstart" value="'.$list['limitstart'].'"/>';
	
	return $html;
}

function pagination_list_render($list)
{
	// Initialize variables
	$lang = JFactory::getLanguage();
	$html = null;
	
    // Build container for the nav buttoms
    $nav_buttom_top = '<b class="bottom"><b class="top"><b class="nav-xb1">
               </b>
               <b class="nav-xb2">
               </b>
               <b class="nav-xb3">
               </b><b class="nav-xb4">
               </b>';
    $nav_buttom_bottom = '<b class="bottom"><b class="top"><b class="nav-xb4">
               </b>
               <b class="nav-xb3">
               </b>
               <b class="nav-xb2">
               </b><b class="nav-xb1">
               </b>
               </b>';
    $nav_bottom_end = '</b>';
    $nav_box_left = '</b><span class="nav-boxinhalt_left">';
    $nav_box_middle = '</b><span class="nav-boxinhalt_middle">';
    $nav_box_right = '</b><span class="nav-boxinhalt_right">';
    
    $ServerName = $_SERVER['SERVER_NAME'];
    $BaseName = JURI::base(true);
	if ($list['start']['active']) {
		$html .= '<div class="nav-button-start">'.$nav_buttom_top.$nav_box_left.'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_start.png" class="nav-icon" alt="start" />'.$list['start']['data'].$nav_bottom_end.$nav_buttom_bottom.'</div>';
	} else {
		$html .= '<div class="nav-button-start">'.$nav_buttom_top.$nav_box_left.'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_start_off.png" class="nav-icon" alt="start-off" />'.$list['start']['data'].$nav_bottom_end.$nav_buttom_bottom.'</div>';
	}
	if ($list['previous']['active']) {
		$html .= '<div class="nav-button-prev">'.$nav_buttom_top.$nav_box_left.'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_prev.png" class="nav-icon" alt="prev" />'.$list['previous']['data'].$nav_bottom_end.$nav_buttom_bottom.'</div>';
	} else {
		$html .= '<div class="nav-button-prev">'.$nav_buttom_top.$nav_box_left.'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_prev_off.png" class="nav-icon" alt="prev-off" />'.$list['previous']['data'].$nav_bottom_end.$nav_buttom_bottom.'</div>';
	}

	$html .= '<div class="nav-pages">'.$nav_buttom_top.$nav_box_middle;
	foreach($list['pages'] as $page) {
		$html .= $page['data'];
	}
	$html .= $nav_bottom_end.$nav_buttom_bottom.'</div>';

	if ($list['next']['active']) {
		$html .= '<div class="nav-button-next">'.$nav_buttom_top.$nav_box_right.$list['next']['data'].'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_next.png" class="nav-icon" alt="next" />'.$nav_bottom_end.$nav_buttom_bottom.'</div>';
	} else {
		$html .= '<div class="nav-button-next">'.$nav_buttom_top.$nav_box_right.$list['next']['data'].'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_next_off.png" class="nav-icon" alt="next-off" />'.$nav_bottom_end.$nav_buttom_bottom.'</div>';
	}
	if ($list['end']['active']) {
		$html .= '<div class="nav-button-end">'.$nav_buttom_top.$nav_box_right.$list['end']['data'].'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_end.png" class="nav-icon" alt="end" />'.$nav_bottom_end.$nav_buttom_bottom.'</div>';
	} else {
		$html .= '<div class="nav-button-end">'.$nav_buttom_top.$nav_box_right.$list['end']['data'].'<img src="http://'.$_SERVER['SERVER_NAME'].JURI::base(true).'/templates/teglo/images/navigation/nav_end_off.png" class="nav-icon" alt="end-off" />'.$nav_bottom_end.$nav_buttom_bottom.'</div>';
	}

	return $html;
}
function pagination_item_active(&$item) {
	return "<a href=\"".$item->link."\" title=\"".$item->text."\">".$item->text."</a>";
}

function pagination_item_inactive(&$item) {
	return "<span>".$item->text."</span>";
}
/*
function pagination_item_active(&$item)
{
	if ($item->base>0)
		return "<a href=\"#\" title=\"".$item->text."\" onclick=\"javascript: document.adminForm." . $item->prefix . "limitstart.value=".$item->base."; Joomla.submitform();return false;\">".$item->text."</a>";
	else
		return "<a href=\"#\" title=\"".$item->text."\" onclick=\"javascript: document.adminForm." . $item->prefix . "limitstart.value=0; Joomla.submitform();return false;\">".$item->text."</a>";
}

function pagination_item_inactive(&$item)
{
	return "<span>".$item->text."</span>";
}
*/
?>
