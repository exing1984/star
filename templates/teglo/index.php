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
 * @component JoomPlay
 * @copyright Copyright (C) 2010 by www.teglo.info
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @date $Date: 2010-12-04 16:59:38 +0100 (Sa, 04. Dez 2010) $
 * @revision $Revision: 14 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://localhost/repos/joomplay/templates/rhuk_milkyway/index.php $
 */

//no direct access
defined('_JEXEC') or die;

$app = JFactory::getApplication();

/*
 * Head configurations
 */
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$this->language.'" lang="'.$this->language.'" >';

echo '<head>';
echo '<jdoc:include type="head" />';

//Set Stylesheet
echo '<link rel="stylesheet" href="'.$this->baseurl.'/templates/system/css/system.css" type="text/css" />';
echo '<link rel="stylesheet" href="'.$this->baseurl.'/templates/system/css/general.css" type="text/css" />';

echo '<style type="text/css">';
include("templates/teglo/css/grundlage.php");
include("templates/teglo/css/navigation.php");
include("templates/teglo/css/components.php");
include("templates/teglo/css/module.php");
//include("templates/teglo/css/plugins.php");
echo '</style>';

//Some special sheets for InternetExplorer
echo '<!--[if lte IE 5.5]>';
echo '<style type="text/css">';
echo '.boxinhalt_com { margin-left: 4px; }';
echo 'ul.mostread a, ul.latestnews a, ul.benutzermenu a, ul.fapa_box a { he\ight: 0px;}';
echo '#navigation { he\ight: 17px; }';
echo '#header_rechts  { height: 22px; }';
echo '</style>';
echo '<![endif]-->';

echo '<!--[if lte IE 6]>';
echo '<style type="text/css">';
echo 'ul.mostread a, ul.latestnews a, ul.benutzermenu a, ul.fapa_box a { height: 0px; }';
echo '#header_rechts  { height: 29px; }';
echo '.boxinhalt_com { margin-left: 4px; }';
echo '#navigation { he\ight: 17px; }';
echo '#kopf { width: 700px; }';
echo '</style>';
echo '<![endif]-->';

echo '</head>';

/*
 * Body configurations
 */
echo '<body>';

   /*
    * Top of the page configurations
    */
   
   echo '<jdoc:include type="modules" name="Top" />';
   echo '<div id="hauptbereich">';
       echo '<div id="header_kompl">';
           echo '<div id="header_links"><jdoc:include type="modules" name="user5" /></div>';
		   echo '<div id="header_rechts"><jdoc:include type="modules" name="header" /></div>';
		   echo '<b class="oben_header">';
		       echo '<b class="ecke4_header"></b>';
               echo '<b class="ecke3_header"></b>';
               echo '<b class="ecke2_header"></b>';
               echo '<b class="ecke1_header"></b>';
           echo '</b>';
       echo '</div>';

   echo '<div id="kopf">';
       //Get current language
	   $lang =& JFactory::getLanguage();
                                       
	   //Anzeige Seiten-logo
	   //$bilderpfad = $this->baseurl.'/templates/teglo/images/logo/'.$this->params->get('logoimage');
	   //$bildinfo = getimagesize ( 'http://'.$_SERVER['SERVER_NAME'].$bilderpfad );
	   echo '<div id="logo">';
	       //echo '<center><a href="index.php"><img src="'.$this->baseurl.'/templates/teglo/images/logo/'.$this->params->get('logoimage').'" border="0" height="'.$bildinfo[1].'px" width="'.$bildinfo[0].'px" alt="logo '.$app->getCfg('sitename').'" /></a></center>';
	       echo '<center><a href="index.php"><img src="'.$this->baseurl.'/templates/teglo/images/logo/'.$this->params->get('logoimage').'" border="0" alt="logo '.$app->getCfg('sitename').'" /></a></center>';
	   echo '</div>';
   echo '</div>';
   
   /*
    * Content part configurations
    */
   echo '<div id="navigation">';
       echo '<jdoc:include type="modules" name="position-1" style="container" /><jdoc:include type="modules" name="languageswitcherload" style="container" />';
   echo '</div>';
   
   echo '<div id="seite">';
   
       echo '<div id="links">';
           echo '<jdoc:include type="modules" name="position-7" style="xhtml" />';
           echo '<jdoc:include type="modules" name="left" style="xhtml" />';
       echo '</div>';
       
       echo '<div id="mitte">';
           echo '<jdoc:include type="modules" name="position-2" style="xhtml" />';
       echo '</div>';
       
       echo '<div id="inhalt">';
           echo '<b class="oben_com">';
               echo '<b class="ecke1"></b>';
               echo '<b class="ecke2"></b>';
               echo '<b class="ecke3"></b>';
               echo '<b class="ecke4"></b>';
           echo '</b>';
           
           echo '<div class="boxinhalt_com">';
               echo '<div class="compo">';
                   echo '<jdoc:include type="message" />';
                   echo '<jdoc:include type="component" />';
               echo '</div>';
               
               echo '<div class="position-3">';
                   echo '<jdoc:include type="modules" name="position-3" style="xhtml" />';
               echo '</div>';
           
               echo '<jdoc:include type="modules" name="position-4" style="xhtml" />';
		   
		       echo '<div class="clear">';
		       echo '</div>';
	       echo '</div>';
	       
	       echo '<b class="oben_com">';
               echo '<b class="ecke4"></b>';
               echo '<b class="ecke3"></b>';
               echo '<b class="ecke2"></b>';
               echo '<b class="ecke1"></b>';
           echo '</b>';
           
           echo '<jdoc:include type="modules" name="position-5" style="rounded" />';
       echo '</div>';
       
       echo '<div id="hauptfuss">';
           echo '<jdoc:include type="modules" name="position-6" />';
       echo '</div>';
       
   echo '</div>';

   /*
    * Foot of the page configurations 
    */
   echo '<div id="fuss">';
       echo '&copy;'.date('Y').' '.$app->getCfg('sitename').' by TFToto & teglo.info | Based on Joomla<jdoc:include type="modules" name="footer" />';
   echo '</div>';
   
   echo '<div id="debug">';
           echo '<jdoc:include type="modules" name="debug" />';
   echo '</div>';
       
echo '</body>';
echo '</html>';