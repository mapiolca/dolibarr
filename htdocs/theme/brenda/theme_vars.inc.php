<?php
/* Copyright (C) 2004-2017	Laurent Destailleur		<eldy@users.sourceforge.net>
 * Copyright (C) 2006		Rodolphe Quiedeville	<rodolphe@quiedeville.org>
 * Copyright (C) 2007-2017	Regis Houssin			<regis.houssin@inodbox.com>
 * Copyright (C) 2011		Philippe Grand			<philippe.grand@atoo-net.com>
 * Copyright (C) 2012		Juanjo Menent			<jmenent@2byte.es>
 * Copyright (C) 2018       Ferran Marcet           <fmarcet@2byte.es>
 * Copyright (C) 2021-2023  Anthony Berton          <anthony.berton@bb2a.fr>
 * Copyright (C) 2026       Pierre Ardoin           <developpeur@lesmetiersdubatiment.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FI8TNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 *	\file       htdocs/theme/brenda/theme_vars.inc.php
 *	\brief      File to declare variables of CSS style sheet Brenda
 *  \ingroup    core
 *
 *  To include file, do this:
 *              $var_file = DOL_DOCUMENT_ROOT.'/theme/'.$conf->theme.'/theme_vars.inc.php';
 *              if (is_readable($var_file)) include $var_file;
 */

global $theme_bordercolor, $theme_datacolor, $theme_bgcolor, $theme_bgcoloronglet;
$theme_bordercolor = array(210, 222, 223);
$theme_datacolor = array(array(15, 118, 110), array(22, 78, 99), array(217, 119, 6), array(35, 132, 91), array(180, 83, 9), array(75, 85, 99), array(190, 24, 93), array(8, 145, 178), array(124, 58, 237), array(77, 124, 15), array(190, 18, 60), array(14, 116, 144), array(161, 98, 7), array(126, 34, 206));
if (!defined('ISLOADEDBYSTEELSHEET')) {	// File is run after an include of a php page, not by the style sheet, if the constant is not defined.
	if (getDolGlobalString('MAIN_OPTIMIZEFORCOLORBLIND')) { // user is loaded by dolgraph.class.php
		if (getDolGlobalString('MAIN_OPTIMIZEFORCOLORBLIND') == 'flashy') {
			$theme_datacolor = array(array(157, 56, 191), array(0, 147, 183), array(250, 190, 30), array(221, 75, 57), array(0, 166, 90), array(140, 140, 220), array(190, 120, 120), array(190, 190, 100), array(115, 125, 150), array(100, 170, 20), array(150, 135, 125), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
		} else {
			// for now we use the same configuration for all types of color blind
			$theme_datacolor = array(array(248, 220, 1), array(9, 85, 187), array(42, 208, 255), array(0, 0, 0), array(169, 169, 169), array(253, 102, 136), array(120, 154, 190), array(146, 146, 55), array(0, 52, 251), array(196, 226, 161), array(222, 160, 41), array(85, 135, 150), array(150, 135, 80), array(150, 80, 150));
		}
	}
}

$theme_bgcolor = array(hexdec('F6'), hexdec('F8'), hexdec('F9'));
$theme_bgcoloronglet = array(hexdec('DD'), hexdec('EB'), hexdec('E9'));

// Colors
$colorbackbody = '246,248,249';
$colorbackhmenu1 = '18,52,59'; // topmenu
$colorbackvmenu1 = '255,255,255'; // vmenu
$colortopbordertitle1 = '210,222,223'; // top border of title
$colorbacktitle1 = '235,242,242'; // title of tables,list
$colorbacktabcard1 = '255,255,255'; // card
$colorbacktabactive = '221,235,233';
$colorbacklineimpair1 = '255,255,255'; // line impair
$colorbacklineimpair2 = '252,253,253'; // line impair
$colorbacklinepair1 = '248,250,250'; // line pair
$colorbacklinepair2 = '246,249,249'; // line pair
$colorbacklinepairhover = '227,242,240'; // line hover
$colorbacklinepairchecked = '212,235,232'; // line checked
$colorbacklinebreak = '240,243,243'; // line break
$colortexttitlenotab = '15,118,110';
$colortexttitlenotab2 = '154,52,18';
$colortexttitle = '29,45,48';
$colortexttitlelink = '15,118,110';
$colortext = '29,39,41';
$colortextlink = '15,118,110';
$fontsize = '0.95em';
$fontsizesmaller = '0.78em';
$topMenuFontSize = '1.02em';
$toolTipBgColor = 'rgba(255, 255, 255, 0.96)';
$toolTipFontColor = '#1d2729';
$butactionbg = '15,118,110';
$textbutaction = '255, 255, 255';

// text color
$textSuccess   = '#237a57';
$colorblind_deuteranopes_textSuccess = '#37de5d';
$textWarning   = '#996000'; // See $badgeWarning
$textDanger    = '#b42318'; // See $badgeDanger
$colorblind_deuteranopes_textWarning = $textWarning; // currently not tested with a color blind people so use default color


// Badges colors
$badgePrimary   = '#0f766e';
$badgeSecondary = '#667477';
$badgeInfo      = '#0e7490';
$badgeSuccess   = '#237a57';
$badgeWarning   = '#996000';
$badgeDanger    = '#b42318';
$badgeDark      = '#25373a';
$badgeLight     = '#f4f7f7';

// badge color adjustment for color blind
$colorblind_deuteranopes_badgeSuccess   = '#37de5d'; //! text color black
$colorblind_deuteranopes_badgeSuccess_textColor7 = '#000';
$colorblind_deuteranopes_badgeWarning   = '#e4e411';
$colorblind_deuteranopes_badgeDanger    = $badgeDanger; // currently not tested with a color blind people so use default color

/* default color for status : After a quick check, somme status can have opposite function according to objects
*  So this badges status uses default value according to theme Brenda status images.
*  TODO: use color definition vars above for define badges color status X -> example $badgeStatusValidate, $badgeStatusClosed, $badgeStatusActive ....
*/
$badgeStatus0 = '#c7d2d4'; // draft
$badgeStatus1 = '#996000'; // validated
$badgeStatus1b = '#996000'; // validated
$badgeStatus2 = '#6f741b'; // approved
$badgeStatus3 = '#8a6a13';
$badgeStatus4 = '#237a57'; // Color ok
$badgeStatus4b = '#237a57'; // Color ok
$badgeStatus5 = '#c7d2d4';
$badgeStatus6 = '#c7d2d4';
$badgeStatus7 = '#237a57';
$badgeStatus8 = '#b42318';
$badgeStatus9 = '#e5eeee';
$badgeStatus10 = '#a61b1b';
$badgeStatus11 = '#1b7f4b';

// status color adjustment for color blind
$colorblind_deuteranopes_badgeStatus4 = $colorblind_deuteranopes_badgeStatus7 = $colorblind_deuteranopes_badgeSuccess; //! text color black
$colorblind_deuteranopes_badgeStatus_textColor4 = $colorblind_deuteranopes_badgeStatus_textColor7 = '#000';
$colorblind_deuteranopes_badgeStatus1 = $colorblind_deuteranopes_badgeWarning;
$colorblind_deuteranopes_badgeStatus_textColor1 = '#000';
