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
 * @date $Date: 2010-12-03 20:48:13 +0100 (Fr, 03. Dez 2010) $
 * @revision $Revision: 12 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://localhost/repos/joomplay/templates/rhuk_milkyway/css/grundlage.php $
 */

// Variablen

//Farben
global $primcolor;
$primcolor = $this->params->get('primcolor');
global $secprimcolor;
$secprimcolor = $this->params->get('secprimcolor');
global $seccolor;
$seccolor = $this->params->get('seccolor');
$backcolor = $this->params->get('backcolor');
$headbackcolor = $this->params->get('headbackcolor');
$leftbackcolor = $this->params->get('leftbackcolor');
$framecolor = $this->params->get('framecolor');
$framecolorbox = $this->params->get('framecolorbox');
$backcolorbox = $this->params->get('backcolorbox');
$fontcolorbox = $this->params->get('fontcolorbox');

//Breite und hoehe
$headerheight = $this->params->get('headerheight');
global $leftwidth;
$leftwidth = $this->params->get('leftwidth');
global $entity;
$entity = $this->params->get('entity');
//Bilder
$backimage = $this->params->get('backimage');
$leftbackimage = $this->params->get('leftbackimage');

//Schrift
$maincolor = $this->params->get('maincolor');
global $firstfont;
$firstfont = $this->params->get('firstfont');
global $secondfont;
$secondfont = $this->params->get('secondfont');
global $thirdfont;
$thirdfont = $this->params->get('thirtfont');

echo '* {';
echo '   margin: 0px;';
echo '   padding: 0px;';
echo '  }';
echo 'body {';
echo 'font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo 'font-weight: normal;';
echo 'color: '.$maincolor.';';
echo 'background: url(http://'.$_SERVER['SERVER_NAME'].$this->baseurl.'/templates/teglo/images/'.$backimage.') repeat-x;';
echo 'background-color :'.$backcolor.';';
echo 'padding-left: 1em;';
echo 'padding-right: 1em;';
echo 'padding-bottom: 1.2em;';
echo 'max-width: 1000px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                                                  echo 'width:1000px;'; //********************** IE6 **********************
                                                  }
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                                                  echo 'margin: left;'; //********************** IE6 **********************
                                                  }
else {
	  echo 'margin: auto;';
     }
echo '}';
echo 'a img {';
echo 'border: 0px';
echo '}';

//generelle link Konfiguration 
echo 'a:visited { color: '.$maincolor.'; text-decoration:none; font-weight:normal; font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.'; }';
echo 'a:link { color: '.$maincolor.'; text-decoration:none; font-weight:normal; font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.'; }';
echo 'a:active { color: '.$secprimcolor.'; text-decoration:none; font-weight:normal; font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.'; }';
echo 'a:hover { color: '.$primcolor.'; text-decoration:underline; font-weight:normal; font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.'; }';


// Ueberschriften 
echo 'div.componentheading {';
echo '                      padding-left: 0px;';
echo '                     }';
echo 'h1 {';
echo '    font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '    font size: 1.3em;';
echo '    font-weight: normal;';
echo '    vertical-align: bottom;';
echo '    color: #5a5b5b;';
echo '    text-align: left;';
echo '    width: 100%';
echo '    padding: 0';
echo '    margin-top:15px;';
echo '    margin-bottom:10px;';
echo '   }';
echo 'h2, .contentheading {';
echo '                     font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '                     font size: 1.2em;';
echo '                     font-weight: normal;';
echo '                     vertical-align: bottom;';
echo '                     color: #5a5b5b;';
echo '                     text-align: left;';
echo '                     width: 100%';
echo '                     padding: 0;';
echo '                    }';
echo 'h3, .componentheading, table.moduletable th, {';
echo '                                                     font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '                                                     font-size: 1.1em;';
echo '                                                     padding-left: 0px;';
echo '                                                     font-weight: normal;';
echo '                                                     margin-bottom: 10px;';
echo '                                                     text-align: left;';
echo '                                                     padding-left: 0px;';
echo '                                                     margin: 15px 0px 1px 0px;'; //Top Right botton left
echo '                                                    }';
echo 'table.contentpaneopen h3 {';
echo '                          margin-top: 25px;';
echo '                         }';
echo 'h4 {';
echo '    font-family: Arial, Helvetica, sans-serif;';
echo '    color: #333;';
echo '   }';


echo '#system-readmore  {';
echo '                    border: '.$secprimcolor.' dashed 1px;';
echo '                    color: red;';
echo '                    }';
echo 'div .componentheading  {';
echo '                    border-bottom: '.$primcolor.' dashed 1px;';
echo '                    color: '.$maincolor.';';
echo '                    font-size: 1.3em;';
echo '                    margin-bottom: 10px';
echo '                    }';
echo 'div .article-meta  {';
echo '                    font-size: 1.0em;';
echo '                    margin-bottom: 10px';
echo '                    }';

//Listenlayout
echo 'ul {';
echo '    list-style-type:square;';
echo '    margin: 0px 0px 35px 0px;'; //Top Right botton left
echo '       padding: 0px 0px 0px 0px;'; //Top Right botton left
echo    '}';
echo 'ul li {';
echo '       color: #888888;';
echo '       margin: 0px 0px 0px 0px;'; //Top Right botton left
echo '       padding: 0px 0px 0px 0px;'; //Top Right botton left
echo '      }';
//Containerdefinitionen 
echo '#hauptbereich {';
echo '               color: '.$maincolor.';';
echo '               background: #FFFFFF;';
echo '               width: 100%';
echo '               w\idth: 100px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                                                  echo 'width:1000px;'; //********************** IE6 **********************
                                                  }
echo '               line-height: 1.2em; /*fuer IE Bug */';
echo '              }';

echo '#header_kompl {';
echo '              min-width: 660px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
	                                              echo 'width: 1000px;'; //**********************IE6******************************
                                                  }
echo '              }';

echo '#header_links  {';
echo '               background-color: '.$seccolor.';';
echo '               height: 24px;';
echo '               display:block;';
echo '               border:0 solid '.$framecolorbox.';';
echo '               border-width:0px 1px 0px 1px;';
echo '               padding: 0px;';
echo '               font-size: 11px;';
echo '               float: right;';
echo '               }';

echo '#header_links a {';
echo '                color: #000000;';
echo '                font-size: 11px;';
echo '                padding-top: 3px;';
echo '                }';

echo '#header_rechts  {';
echo '                background-color: '.$seccolor.';';
echo '                height: 24px;';
echo '                width: 100%';
echo '                w\idth: 100px;';
echo '                display:block;';
echo '                border:0 solid '.$framecolorbox.';';
echo '                border-width:0px 0px 0px 1px; /*top right bottom left */';
echo '                padding: 0px;';
echo '                font-size: 11px;';
echo '                }';

echo '#header_rechts a {';
echo '                 color: #000000;';
echo '                 font-size: 11px;';
echo '                 padding-top: 3px;';
echo '                 }';

echo '#kopf {';
echo '      width: 100%;';
echo '      height: '.$headerheight.';';
echo '      background: url(http://'.$_SERVER['SERVER_NAME'].$this->baseurl.'/templates/teglo/images/hintergrundweiss2.gif) repeat-x;';
echo '      background-color :'.$backcolor.';';
echo '      }';
echo '#logo {';
echo '      margin: auto;';
echo '      width: 100%;';
echo '      }';
echo '#hauptfuss {';
echo '           clear: both;';
echo '           he\ight: 42px; /* fuer IE */';
echo '           background-color: '.$seccolor.';';
echo '           width:100%;';
echo '           }';
echo '#seite {';
echo '       color: #000000;';
echo '       background-color: '.$leftbackcolor.';';
echo '        min-width: 730px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
echo '                                            width:1000px;'; //********************** IE6 **********************
                                                  }
echo '       line-height: 1.2em; /*fuer IE Bug */';
echo '       background-image: url(http://'.$_SERVER['SERVER_NAME'].$this->baseurl.'/templates/teglo/images/'.$leftbackimage.');';
echo '       }';
echo '#links {';
echo '       float: left;';
echo '       width: '.$leftwidth.$entity.';';
echo '       color: #000000;';
echo '       background-color: '.$leftbackcolor.';';
echo '       border-right-color: '.$primcolor.';';
echo '       border-right-style: solid;';
echo '       border-right-width: 1px;';
echo '       }';
echo '.clear {';
echo '       clear: both;';
echo '       }';
echo '#mitte {';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                                                  echo 'position:absolute;';
                                                  }
elseif (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 7')) {
                                                      echo 'position:absolute;';
                                                      }
echo '       float: left;';
echo '       width: 28px;';
echo '       color: #000000;';
echo '       margin-top:40px;';

if (strstr($_SERVER['HTTP_USER_AGENT'],'Safari')) {
	                                              echo 'margin-left:12px;';
                                                  }
elseif (strstr($_SERVER['HTTP_USER_AGENT'],'Gecko')) {
	                                              echo 'margin-left:11px;';
                                                  }
elseif (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
	                                              echo 'margin-left:15px;';
                                                  }
elseif (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 7')) {
	                                              echo 'margin-left:13px;';
                                                  }
else {                                                  
      echo '       margin-left:11px;';
     }
echo '       background-color: transparent;';
echo '       }';
echo '.compo {';
echo '        wi\dth: 100%;';
echo '        width: 100%;';
echo '        }';
echo '#inhalt {';
echo '        wi\dth: 100px;';
echo '        margin-left: '.$leftwidth.$entity.';';
echo '        color: '.$fontcolorbox.';';
echo '        background-color: '.$framecolor.';';
echo '        padding-top: 18px;';
echo '        padding-bottom: 18px;';
echo '        padding-right: 18px;';
echo '        padding-left: 40px;';
echo '        min-width: 480px;';
echo '        max-width: 800px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
echo '                                            width:730px;'; //********************** IE6 **********************
                                                  }
echo '        }';
echo '.article-content a {';
echo '        color: #444444;';//anchor.png
echo 'padding-left:18px;';
echo '       background: url(http://'.$_SERVER['SERVER_NAME'].$this->baseurl.'/templates/teglo/images/anchor.png) right no-repeat;';
echo 'background-position:0px;';
echo '        }';

echo '.oben_com, .oben_header {display:block; background:transparent; font-size:1px;}';
echo '.ecke1, .ecke2, .ecke3, .ecke4, .ecke1_header, .ecke2_header, .ecke3_header, .ecke4_header { display:block; /* hide overflow:hidden from IE5/Mac */ overflow: hidden; }';
echo '.ecke1, .ecke2, .ecke3, .ecke1_header, .ecke2_header, .ecke3_header { height:1px; }';
echo '.ecke2, .ecke3, .ecke4 { background-color:'.$backcolorbox.'; border-left:1px solid '.$framecolorbox.'; border-right:1px solid '.$framecolorbox.'; }';
echo '.ecke2_header, .ecke3_header, .ecke4_header { background-color:'.$seccolor.'; border-left:1px solid '.$framecolorbox.'; border-right:1px solid '.$framecolorbox.'; }';
echo '.ecke1, .ecke1_header { margin:0 5px; background-color: '.$framecolorbox.'; }';
echo '.ecke2, .ecke2_header { margin:0 3px; border-width:0 2px; }';
echo '.ecke3, .ecke3_header { margin:0 2px; }';
echo '.ecke4, .ecke4_header { height:2px; margin:0 1px; }';
echo '.boxinhalt_com { display:block; /*  Wichtig!!  */ background-color:'.$backcolorbox.'; border:0 solid '.$framecolorbox.'; border-width:0px 1px 0px 1px; padding: 10px; }';
echo '#navigation {';
//echo '            height: 1.75em;';
//echo '            height: 1.2em;';
echo '            background-color: #F7F7F7;';
echo '            height: 33px;';
echo '            margin-bottom: 0px;';
echo '            min-width: 755px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
echo '                                            width:999px;'; //********************** IE6 **********************
                                                  }
echo '            margin-bottom: 0.1em;';
echo '            border-bottom-color: '.$secprimcolor.';';
echo '            border-bottom-style: solid;';
echo '            border-bottom-width: 5px;';
echo '            }';
echo '#unternavigation {';
echo '                 height: 1.2em;';
echo '                 background-color: '.$secprimcolor.';';
echo '                 height: 27px;';
echo '                 padding-top: 2px;';
echo '                 margin-right: 1em;';
echo '                 min-width: 755px;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
echo '                                            width:850px;'; //********************** IE6 **********************
                                                  }
echo '                 }';
echo '#fuss {';
echo '      background-color : '.$primcolor.';';
echo '      padding: 4px;';
echo '      he\ight: 16px; /* fuer IE */';
echo '      border:0 solid #FFFFFF; border-width:0px 1px 1px 1px;';
echo '      font-family : Verdana, Arial, sans-serif;';
echo '      font-size : 11px;';
echo '      color: #FFFFFF;';
echo '      }';
echo '#fuss div {';
echo '          float:left;';
echo '          }';
echo '.lastmodi {';
echo '          float:left;';
echo '          }';
echo '.tool-tip {';
echo '          background-color: #FFFFFF;';
echo '          padding: 4px;';
echo '          border:1px solid '.$primcolor.';';
echo '          font-size: 10px;';
echo '          }';
echo '#form-login {';
echo '            float: left;';
echo '            width: '.$leftwidth.$entity.';';
echo '            color: #000000;';
echo '            background-color: '.$seccolor.';';
echo '            }';
?> 
