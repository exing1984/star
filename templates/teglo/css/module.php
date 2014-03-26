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
 * @headurl $HeadURL: http://localhost/repos/joomplay/templates/rhuk_milkyway/css/module.php $
 */
echo '.module {';
echo '        background-color: '.$framecolor.';';
echo '        font: normal 0.6em Verdana, Arial, sans-serif;';
echo '        color: '.$fontcolorbox.';';
echo '        padding-top: 15px;';
echo '        padding-bottom: 15px;';
echo '        padding-left: 8px;';
echo '        padding-right: 8px;';
echo '        }';
echo '.module a:link { color: '.$fontcolorbox.'; text-decoration:none; }';
echo '.module a:visited { color: '.$fontcolorbox.'; text-decoration:none; }';
echo '.module a:active { color: '.$fontcolorbox.'; text-decoration:none; }';
echo '.module a:hover { color: '.$maincolor.'; text-decoration:none; }';

echo '.moduletable h3, .moduletablenewsfeeds h3 {';
echo '                                                                   color: #FFFFFF;';
echo '                                                                   background-color: '.$primcolor.';';
echo '                                                                   font-size: 12px;';
echo '                                                                   font-weight: bold;';
echo '                                                                   font-family : Verdana, Arial, sans-serif;';
echo '                                                                   border-bottom: 3px solid #FFFFFF;';
echo '                                                                   padding-left: 5px;';
echo '                                                                   display:block;';
echo '                                                                   }';
echo '.fapa_utils, .fapa_token {';
echo '                         background-color: '.$primcolor.';';
echo '                         padding: 0px;';
echo '                         height: 28px;';
echo '                         }';
echo '.fapa_add, .fapa_trash {';
echo '                       background-color: #FFFFFF;';
echo '                       padding: 5px;';
echo '                       border: 1px solid '.$primcolor.';';
echo '                       }';
echo 'ul.mostread, ul.latestnews, ul.joomla-navuser, ul.fapa_box, ul.menunewsfeeds, ul.mod_quickfaq {';
echo 'width: '.$leftwidth.$entity.';';
echo 'margin: 0px;';
echo 'padding: 0;';
echo 'margin-left: 20px;';
echo 'background-color: '.$seccolor.';';
echo ' }';
echo '* html ul.mostread, ul.latestnews, ul.lastvisit, ul.joomla-navuser, ul.fapa_box, ul.menunewsfeeds, ul.mod_quickfaq {  /* Korrekturen fuer IE 5.x */';
echo '                                      width: 193px;';
echo '                                      w\idth: 193px;';
echo '                                      padding: 0;';
echo '                                      margin: 0;';
echo '                                      background-color: '.$seccolor.';';
echo '                                      }';
echo 'ul.mostread, ul.latestnews, ul.lastvisit, ul.joomla-navuser, ul.fapa_box, ul.menunewsfeeds, ul.mod_quickfaq li {';
echo '                                      list-style: none;';
echo '                                      margin: 0;';
echo '                                      padding: 5;';
echo '                                      width: '.$leftwidth.$entity.';';
echo '                                      }';
echo 'ul.menunewsfeeds, ul.menubenutzer li {';
echo '                                     float: left; /* sonst Fehler im Firefox 2.x */';
echo '                                     }';
echo 'ul.mostread a, ul.latestnews a, ul.lastvisit a, ul.joomla-navuser a, ul.fapa_box a, ul.menunewsfeeds a, ul.mod_quickfaq a {';
echo '                                     display:block;';
echo '                                     padding: 3px;';
echo '                                     font-size: 11px;';
echo '                                     font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '                                     text-decoration: none;';
echo '                                     font-weight: normal;';
echo '                                     border-bottom: 1px dashed '.$primcolor.';';
echo '                                     border-left: 0px;';
echo '                                     color: #000000;';
echo '                                     background-color: '.$seccolor.';';
echo '                                     margin: 0;';
echo '                                     }';
echo '* html ul.mostread, ul.latestnews, ul.lastvisit, ul.joomla-navuser, ul.fapa_box, ul.menunewsfeeds, ul.mod_quickfaq {  /* Breitenangaben nur fuer IE */ ';
echo '                                     width: 100%;';
echo '                                     w\idth: 100%;';
echo '                                     margin: 0;';
echo '                                     padding: 0;';
echo '                                     }';
echo 'ul.mostread a:hover, ul.lastvisit a:hover, ul.latestnews a:hover, ul.joomla-navuser a:hover, ul.fapa_box a:hover, ul.menunewsfeeds a:hover, ul.mod_quickfaq a:hover {';
echo '                                     color: white;';
echo '                                     background-color: '.$primcolor.';';
echo '                                     }';

//Configuration for frontpage entries
echo '.moduletablefrontpage h3 {';
echo '                          color: #888888;';
echo '                          font-size: 1.2em;';
echo '                          font-weight: bold;';
echo '                          font-family : Verdana, Arial, sans-serif;';
echo '                          border-bottom: 3px solid #777777;';
echo '                         margin-top:30px;';
//echo '                          display:block;';
echo '                          }';
echo 'ul.latestnewsfrontpage {';
echo 'width: 100%;';
echo 'margin-top: 5px;';
echo ' }';
echo '* html ul.latestnewsfrontpage {  /* Korrekturen fuer IE 5.x */';
echo '                                      width: 100%;';
echo '                                      w\idth: 100%;';
echo '                                      padding: 0;';
echo '                                      margin: 0;';
echo '                                      background-color: #777777;';
echo '                                      }';
echo 'ul.latestnewsfrontpage li {';
echo '                                      list-style: none;';
echo '                                      margin: 0;';
echo '                                      padding: 5;';
echo '                                      width: 100%;';
echo '                                      }';
echo 'ul.latestnewsfrontpage li {';
//echo '                                     float: left; /* sonst Fehler im Firefox 2.x */';
echo '                                     }';
echo 'ul.latestnewsfrontpage a {';
echo '                                     display:block;';
echo '                                     padding: 3px;';
echo '                                     font-size: 11px;';
echo '                                     font-family: '.$firstfont.', '.$secondfont.', '.$thirdfont.';';
echo '                                     text-decoration: none;';
echo '                                     font-weight: normal;';
echo '                                     border-bottom: 1px dashed '.$primcolor.';';
echo '                                     border-left: 0px;';
echo '                                     color: #000000;';
echo '                                     background-color: #fcfcfc;';
echo '                                     margin: 0;';
echo '                                     }';
echo '* html ul.latestnewsfrontpage {  /* Breitenangaben nur fuer IE */ ';
echo '                                     width: 100%;';
echo '                                     w\idth: 100%;';
echo '                                     margin: 0;';
echo '                                     padding: 0;';
echo '                                     }';
echo 'ul.latestnewsfrontpage a:hover {';
echo '                                     color: white;';
echo '                                     background-color: '.$primcolor.';';
echo '                                     }';
//***************************************************************************************
//login Modul
echo '.moduletablelogin h3 {';
echo '                     color: #FFFFFF;';
echo '                     background-color: '.$primcolor.';';
echo '                     font-size: 12px;';
echo '                     font-weight: bold;';
echo '                     font-family : Verdana, Arial, sans-serif;';
echo '                     border-bottom: 3px solid #FFFFFF;';
echo '                     padding-left: 5px;';
echo '                     display:block;';
echo '                     margin-top: 0px;';
echo '                     }';
echo '#form-login {';
echo '            background-color: '.$seccolor.';';
echo '            border: 0px;';
echo '            padding-bottom: 10px;';
echo '            font-size: 11px;';
echo '            }';
echo '.input {';
echo '       border: 1px;';
echo '       padding-left: 5px;';
echo '       }';
echo '#form-login ul {';
echo '               list-style: none;';
echo '               padding-left: 5px;';
echo '               }';
echo ' * html ul#form-login {  /* Korrekturen fuer IE 5.x */';
echo '                      width: 100%;';
echo '                      w\idth: 15em;';
echo '                      padding-left: 0;';
echo '                      padd\ing-left: 0;';
echo '                      }';
echo '#form-login li {';
echo '               border-bottom: 1px dashed '.$primcolor.';';
echo '               font-size: 11px;';
echo '               font-family: Verdana, Arial, sans-serif;';
echo '               }';
//**********************************************************************************
//Suchen Formular
echo '.search {';
echo '        background-color: transparent;';
echo '        width: 100%;';
echo '        }';
echo '#mod_search_searchword {';
echo '                       margin: 5px 5px 5px 20px; /* Reihenfolge: top, right, bottom, left */';
echo '                       }';
echo '.moduleweg {';
echo '           margin-top: 4px;';
echo '           margin-left: 15px;';
echo '           }';
echo 'table.contentpane {';
echo '                  border: none;';
echo '                  width: 100%;';
echo '                  }';
echo 'fieldset {';
echo '         border: none;';
echo '         border-collapse: collapse;';
echo '         border-spacing: 0;';
echo '         margin-bottom: 40px;';
echo '         }';
echo 'table.contentpaneopen {';
echo '                      border: none;';
echo '                      border-collapse: collapse;';
echo '                      border-spacing: 0;';
echo '                      }';
echo '/* Newwsfeeds */';
$leftwidthspezial = $leftwidth - "6";
echo 'ul.menunewsfeeds a, ul.menubenutzer a {';
echo '                                      width: '.$leftwidthspezial.$entity.';';
echo '                                      }';
echo '/* suchbegriff Tag */';
echo '.moduletableverweise h3 {';
echo '                        border-bottom: 1px dashed '.$primcolor.';';
echo '                        margin-top: 15px;';
echo '                        font-size: 14px;';
echo '                        }';
echo '.tags {';
echo '      font-size:12px;';
echo '      font-weight:normal;';
echo '      height: 16px;';
echo '      margin-top:5px;';
echo '      padding:2px 5px 2px 12px;';
echo '      text-decoration:none;';
echo '      }';
echo '.moduletablefront {';
//echo '                  float: right;';
echo '                 padding: 40px;';
echo '                  }';
echo '.moduletablefont {';
echo '                 padding-top: 20px;';
echo '                 padding-bottom: 20px;';
echo '                 }';
echo '#jflanguageselection {';
echo'            margin:0;'; //wichtig für IE6
echo'            padding-top:12px;';
echo '           }';
//*************************************************************************************************
//Alphabar
//*************************************************************************************************
echo 'ul#alphabarlink {';
echo '                margin:0; padding:0; background-color: transparent;';
echo '                }';
echo '* html ul#lphabarlink a {';
echo '                         width: 6em;';
echo '                         w\idth: 5.5em; padding-left: 0; padd\ing-left: 0.8em;';
echo '                   }';
echo 'ul#alphabarlink li {';
echo '                   list-style: none;';
echo '                   margin: 0.4em; padding: 0;';
echo '                   width: 100%;';
echo '                   }';
echo 'ul#alphabarlink a {';
echo '                   display:block;';
echo '                   padding: 0.2em;';
echo '                   width: 18px;';
echo '                   text-decoration: none; font-weight: normal;';
echo '                   font-size:12px;';
echo '                   border-bottom: 1px solid white; width: 15px;';
echo '                   border-top: 1px solid white;';
echo '                   border-left: 1px solid white;';
echo '                   border-right: 1px solid '.$primcolor.';';
echo '                   color: #FFFFFF;';
echo '                   background-color: '.$primcolor.';';
echo '                   }';
echo '* html ul#alphabarlink a {';
echo '                         width: 100%em;';
echo '                         w\idth: 1.3em;';
echo '                   }';
echo 'ul#alphabarlink a:hover {';
echo '                         border: 1px solid white; background-color: gray;';
echo '                        }';
echo '#alphabarlink_aktiv{';
echo '                   display:block;';
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                                                  echo 'width: 15px;';//********************** IE6 **********************
                                                  echo 'margin-left: 1px;';
                                                  }
if (strstr($_SERVER['HTTP_USER_AGENT'],'MSIE 7')) {
                                                  echo 'width: 14px;';//********************** IE6 **********************
                                                  echo 'margin-left: 1px;';
                                                  }
else {
     echo 'width: 17px;';	
     echo 'margin-left: 6px;';
     }                                                  
echo '                   padding: 0.2em;';
echo '                   margin-top: 0.4em;';
echo '                   text-decoration: none; font-weight: normal;';
echo '                   border-bottom: 1px solid '.$primcolor.';';
echo '                   border-top: 1px solid '.$primcolor.';';
echo '                   border-left: 1px solid '.$primcolor.';';
echo '                   color: #000000;';
echo '                   background-color: '.$backcolorbox.';';
echo '                   font-size:13px;';
echo '                   }';
echo '.modulefoot {
    background-color: '.$seccolor.';
    padding-top: 10px;
    padding-left: 2px;
}';
?>

dl.search-results dd.result-text
{
        padding:10px 15px 10px 5px;
        line-height:1.7em;
}