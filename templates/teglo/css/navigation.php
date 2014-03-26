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
 * @copyright Copyright (C) 2010 by www.teglo.info
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @date $Date: 2011-10-30 11:50:17 +0100 (So, 30 Okt 2011) $
 * @revision $Revision: 339 $
 * @author $Author: toto $
 * @headurl $HeadURL: http://dev.teglo.info/svn/playjoom/templates/teglo/css/navigation.php $
 */

// Die globalen Variablen sind in "grundlage.php" definiert

//***********************************************
// Menu links
echo '.joomla-nav {';
echo '            float: left;';
echo '            }';
//***********************************************
// Hauptmenu oben 
echo 'ul.joomla-nav {';
echo '               margin: 0;';
echo '               text-align: center;';
echo '               font-weight: normal;';
echo '              }';
echo 'ul.joomla-nav li  {';
echo '                   list-style: none;';
echo '                   display: inline;';
echo '                   margin-left: 10px;';
echo '                   padding: 0;';
echo '                   float: left;';
echo '                   font-weight: normal;';
echo '                  }';
//***********************************************
// Nichtecken Konfiguration
echo '.unten {';
echo '       background:transparent;';
echo '       }';
echo '.unten span {';
//echo '            text-align:center;';
echo '            color:#FFFFFF;';
echo '            margin:0;';
echo '            font-weight:normal;';
echo '            padding-bottom:0.5em;';
echo '            font-size:1.0em;';
echo '            }';
echo '.oben {';
echo '      display:block;';
echo '      background:transparent;';
echo '      font-size:1px;';
echo '      }';
echo '.xb1, .xb2, .xb3, .xb4 {';
echo '                       display:block; /* hide overflow:hidden from IE5/Mac */';
echo '                       overflow: hidden; ';
echo '                       }';
echo '.xb1, .xb2, .xb3 {';
echo '                 height:1px;';
echo '                 }';
echo '.xb2, .xb3, .xb4 {';
echo '                 background-color:'.$primcolor.';';
echo '                 border-left:1px solid #555555;';
echo '                 border-right:1px solid #555555;';
echo '                 }';
echo '.xb1 {';
echo '     margin:0 5px;';
echo '     background-color: #555555;';
echo '     }';
echo '.xb2 {';
echo '     margin:0 3px;';
echo '     border-width:0 2px;';
echo '     }';
echo '.xb3 {';
echo '     margin:0 2px;';
echo '     }';
echo '.xb4 {';
echo '     height:2px;';
echo '     margin:0 1px;';
echo'      width:auto;';
echo '     }';
echo '.boxinhalt {';
echo '           display: block;'; //ganz wichtig
echo '           background-color:'.$primcolor.';';
echo '           border:0 solid #555555;';
echo '           border-width:0px 1px 0px 1px;';
echo '           font-weight: normal;';
echo '           font-size: 11px;';
echo '           height:20px;';
echo '           he\ight: 20px;';
echo'            padding-right: 15px;';
echo'            padding-left: 15px;';
echo '           }';
echo 'a.joomla-nav, a.joomla-nav:visited  span span {';
echo '                                  display:inline;';
echo '                                  font-weight: normal;';
echo '                                  text-decoration:none;';
echo '                                  font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 5')) {
	                                              echo 'width: 100px;';
                                                  }
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
	                                              echo 'width: 140px;';
                                                  }
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 7')) {
	                                              echo 'width: 125px;';
                                                  }
if (strstr($_SERVER['HTTP_USER_AGENT'],'GreenBrowser')) {
	                                              echo 'width: 130px;';
                                                  }
echo '                                  font-size:1.0em;';
echo '                                  }';
echo 'a.joomla-nav, a.joomla-nav:visited span span {';
echo '                                  display:inline;';
echo '                                 font-weight: normal;';
echo '                                 color: #FFFFFF;';
echo '                                  font-size:1.0em;';
echo '                                 }';
echo 'a.joomla-nav:hover span {';
echo '                  background:transparent;';
echo '                  cursor:pointer;';
echo '                  }';
echo 'a.joomla-nav:hover span span  { /*Texteigenschaften beim hoven */';
echo '                        color:#FFFFFF;';
echo '                        font-weight: normal;';
echo '                        }';
echo 'a.joomla-nav:hover .boxinhalt  {';
echo '                                background-color: '.$secprimcolor.';';
echo '                                border-color:#000000;';
echo '                                border-bottom: 0px solid #000000;';
echo '                               }';
echo 'a.joomla-nav:hover .xb1 {';
echo '                         background-color: #000000;';
echo '                        }';
echo 'a.joomla-nav:hover .xb2, a.joomla-nav:hover .xb3, a.joomla-nav:hover .xb4 {';
echo '                                                        background-color: '.$secprimcolor.';';
echo '                                                        border-color: #000000;';
echo '                                                        }';
//*********************************************
// Aktives Tab #current .selected
echo 'ul.joomla-nav li.selected a span {';
echo '                         background-color: '.$secprimcolor.';';
echo '                         }';
echo 'ul.joomla-nav li.selected .xb2, ul.joomla-nav li.selected .xb3, ul.joomla-nav li.selected .xb4 {';
echo '                                                                                          background-color: '.$secprimcolor.';';
echo '                                                                                          border-color: #555555;';
echo '                                                                                         }';
//*********************************************
echo '.top-menu-icon {';
echo '             margin-left: 1px;';
echo '             margin-right: 3px;';
echo '             margin-bottom: -2px;';
echo '           }';
// Kopfmenue
echo '.menukopf {';
echo '          float: left;';
echo '          }';
echo 'ul.menukopf {';
echo '            margin: 0;';
echo '            text-align: center;';
echo '            font-weight: bold;';
echo '            }';
echo 'ul.menukopf li  {';
echo '                list-style: none;';
echo '                display: inline;';
echo '                margin-left: 10px;';
echo '                padding: 0;';
echo '                float: left;';
echo '                font-weight: bold;';
echo '                }';
echo '.image-title {';
echo '           padding-left: 2px;';
echo '           padding-top: 4px;';
echo '           padding-right: 3px;';
echo '}';
//***********************************************************
// Schriftgroesse oben
echo '#fontsize {';
echo '          padding-top: 3px;';
echo '          margin-left: 120px;';
echo '          padding-left: 10px;';
echo '          background-color: transparent;';
echo '          border-left:1px solid '.$framecolorbox.';';
echo '          }';
//****************************************************************
// Seitenmenu 
echo 'ul.joomla-navseitenmenu {';
echo '                  border-top: 1px solid '.$primcolor.';';
echo '                  margin-left: '.$leftwidth.$entity.';';
echo '                  padding-bottom: 36px;';
echo '                  padding-right: 20px;';
echo '                  padding-top: 6px;';
echo '                  text-align: center;';
echo '                  }';
echo 'ul.joomla-navseitenmenu li {';
echo '                     list-style: none;';
echo '                     display: inline;';
echo '                     margin: 0;';
echo '                     padding: 0;';
echo '                     }';
echo 'ul.joomla-navseitenmenu a  {';
echo '                     float: right;';
echo '                     height: 1.2em;';
echo '                     margin-left: 1.5em;';
echo '                     margin-top: 3px;';
echo '                     padding: 0.2em 1em 0.6em 1em;';
echo '                     text-decoration: none;';
echo '                     font-weight: normal;';
echo '                     font-size: 11px;';
echo '                     font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '                     border: 1px solid #FFFFFF;';
echo '                     border-left-color: white;';
echo '                     border-top-color: white;';
echo '                     color: #FFFFFF;';
echo '                     background-color: '.$primcolor.';';
echo '                     }';
echo '* html ul.joomla-navseitenmenu a {  /* bug IE */';
echo '                           width: 8em;';
echo '                           w\idth: 6em;';
echo '                           }';
echo 'ul.joomla-navseitenmenu a:visited {';
echo '                            color: #FFFFFF;';
echo '                            text-decoration: none;';
echo '                            }';
echo 'ul.joomla-navseitenmenu a:hover {';
echo '                          border: 1px solid #000000;';
echo '                          border-left-color: black;';
echo '                          border-top-color: black;';
echo '                          color: black;';
echo '                          background-color: '.$seccolor.';';
echo '                          }';
echo 'ul.joomla-navseitenmenu a:active  {';
echo '                            background-color: #aaaaaa;';
echo '                            }';

//***********************************************
// Nichtecken Konfiguration
echo '.bottom {';
echo '       background:transparent;';
echo '       }';
echo '.bottom span {';
//echo '            text-align:center;';
echo '            color:#FFFFFF;';
echo '            margin:0;';
echo '            font-weight:normal;';
echo '            font-size:0.9em;';
echo '            }';
echo '.top {';
echo '      display:block;';
echo '      background:transparent;';
echo '      font-size:1px;';
echo '      }';
echo '.nav-xb1, .nav-xb2, .nav-xb3, .nav-xb4 {';
echo '                       display:block; /* hide overflow:hidden from IE5/Mac */';
echo '                       overflow: hidden; ';
echo '                       }';
echo '.nav-xb1, .nav-xb2, .nav-xb3 {';
echo '                 height:1px;';
echo '                 }';
echo '.nav-xb2, .nav-xb3, .nav-xb4 {';
echo '                 background-color: '.$seccolor.';';
echo '                 border-left:1px solid '.$framecolorbox.';';
echo '                 border-right:1px solid '.$framecolorbox.';';
echo '                 }';
echo '.nav-xb1 {';
echo '     margin:0 5px;';
echo '     background-color: '.$framecolorbox.';';
echo '     }';
echo '.nav-xb2 {';
echo '     margin:0 3px;';
echo '     border-width:0 2px;';
echo '     }';
echo '.nav-xb3 {';
echo '     margin:0 2px;';
echo '     }';
echo '.nav-xb4 {';
echo '     height:2px;';
echo '     margin:0 1px;';
echo'      width:auto;';
echo '     }';
echo '.nav-boxinhalt_left, .nav-boxinhalt_middle, .nav-boxinhalt_right {';
echo '           display: block;'; //ganz wichtig
echo '           background-color: '.$seccolor.';';
echo '           border:0 solid '.$framecolorbox.';';
echo '           border-width:0px 1px 0px 1px;';
echo '           font-weight: normal;';
echo '           margin-left: 10px;';
echo '           }';

echo '.nav-boxinhalt_left {';
echo '           padding: 1px 5px 2px 8px;';
echo '           margin-left: 10px;';
echo '           }';
echo '.nav-boxinhalt_left span {';
echo '           font-size: 12px;';
echo '           color: #aaaaaa;';
echo '           }';

echo '.nav-boxinhalt_middle {';
echo '           padding: 4px 14px 4px 14px;';
echo '           margin-left: 10px;';
echo '           }';
echo '.nav-boxinhalt_middle span {';
echo '           font-size: 18px;';
echo '           font-weight: bold;';
echo '           color: '.$primcolor.';';
echo '           }';

echo '.nav-boxinhalt_right {';
echo '           padding: 1px 8px 2px 5px;';
echo '           margin-left: 10px;';
echo '           font-size: 10px;';
echo '           }';

echo '.nav-boxinhalt_right span {';
echo '           font-size: 12px;';
echo '           color: #aaaaaa;';
echo '           }';

echo '.nav-button-start,
.nav-button-prev,
.nav-pages,
.nav-button-next,
.nav-button-end {
	float: left;
	margin: 10px 0px 10px 12px;
}';

echo '.nav-icon {';
echo '             margin-left: 3px;';
echo '             margin-right: 3px;';
echo '             margin-bottom: -3px;';
echo '           }';

echo '.pageslinks {
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
}';
echo '.pagescounter {
    margin-left: auto;
    margin-right: auto;
}';
echo '.pagination {
    margin-left: auto;
    margin-right: auto;
}';
echo 'ul.joomla-navkopf li  {';
echo '                list-style: none;';
echo '                display: inline;';
echo '                margin-left: 10px;';
echo '                font-weight: bold;';
echo '                }';
echo '.top-menu-icon {';
echo '           padding-left: 6px;';
echo '           padding-top: 4px;';
echo '           padding-right: 3px;';
echo '}';
echo '.search {';
echo '           margin-left: 6px;';
echo '           margin-top: 2px;';
echo '}';
echo '.button {';
echo '           margin-left: 6px;';
echo '}';
?>