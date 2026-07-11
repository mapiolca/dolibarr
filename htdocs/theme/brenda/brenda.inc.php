<?php
/* Copyright (C) 2026 Pierre Ardoin <developpeur@lesmetiersdubatiment.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * \file htdocs/theme/brenda/brenda.inc.php
 * \brief Brenda visual and responsive refinements.
 *
 * @var Conf $conf
 * @var string $left
 * @var string $right
 */

if (!defined('ISLOADEDBYSTEELSHEET')) {
	die('Must be called by steelsheet');
}
?>

/* ============================================================================== */
/* Brenda visual language                                                         */
/* ============================================================================== */

:root {
	--brenda-accent: rgb(15, 118, 110);
	--brenda-border: rgba(18, 52, 59, 0.16);
	--brenda-border-strong: rgba(18, 52, 59, 0.28);
	--brenda-focus: rgba(15, 118, 110, 0.24);
	--brenda-shadow: 0 2px 8px rgba(18, 52, 59, 0.10);
	--brenda-drawer-width: 300px;
}

* {
	letter-spacing: 0;
}

#id-top {
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.18);
}

.side-nav {
	border-<?php echo $right; ?>: 1px solid var(--brenda-border);
	box-shadow: 2px 0 8px rgba(18, 52, 59, 0.07);
}

div.blockvmenupair,
div.blockvmenuimpair,
div.blockvmenubookmarks,
div.blockvmenuend {
	border-color: var(--brenda-border) !important;
}

li.tmenusel::after,
li.tmenu:hover::after {
	border-color: transparent transparent #5eead4 transparent;
}

table.border,
table.bordernooddeven,
table.dataTable,
.table-border,
.table-border-col,
.table-key-border-col,
.table-val-border-col,
div.border,
div.tabBar,
.liste_titre,
.liste_titre_sel,
.liste_titre_filter {
	border-color: var(--brenda-border) !important;
}

a.tab:link,
a.tab:visited,
a.tab:hover,
a.tab#active {
	border-radius: 4px 4px 0 0;
}

.tabactive,
a.tab#active {
	border-bottom-color: var(--brenda-accent) !important;
}

.butAction,
.butActionRefused,
.butActionDelete,
.button:not(.bordertransp):not(.buttonpayment),
.buttonCancel:not(.bordertransp):not(.buttonpayment),
.buttonDelete:not(.bordertransp):not(.buttonpayment) {
	border-radius: 4px;
	font-weight: 600;
	letter-spacing: 0;
	text-transform: none;
}

.butAction,
#mainbody input.button:not(.buttongen):not(.bordertransp),
#mainbody a.button:not(.buttongen):not(.bordertransp) {
	box-shadow: none;
	transition: background-color 0.15s ease, box-shadow 0.15s ease, transform 0.15s ease;
}

.butAction:hover,
#mainbody input.button:hover:not(.buttongen):not(.bordertransp),
#mainbody a.button:hover:not(.buttongen):not(.bordertransp) {
	box-shadow: 0 2px 7px rgba(18, 52, 59, 0.22);
}

.butAction:active,
#mainbody input.button:active:not(.buttongen):not(.bordertransp),
#mainbody a.button:active:not(.buttongen):not(.bordertransp) {
	transform: translateY(1px);
}

a:focus-visible,
button:focus-visible,
input:focus-visible,
select:focus-visible,
textarea:focus-visible,
[tabindex]:focus-visible {
	outline: 2px solid var(--brenda-accent) !important;
	outline-offset: 2px;
}

input:focus:not(.noborderfocus):not(.inputsearch_dropdownselectedfields):not(.button):not(.buttonwebsite):not(.buttonreset):not(.select2-search__field):not(#top-bookmark-search-input):not(.search_component_input):not(.input-nobottom),
select:focus,
.select2-container--open [aria-expanded="false"].select2-selection--single,
.select2-container--focus span.selection span.select2-selection:not(.noborderfocus):not(.massactionselect) {
	box-shadow: 0 0 0 3px var(--brenda-focus) !important;
}

.div-table-responsive,
.div-table-responsive-no-min {
	max-width: 100%;
	-webkit-overflow-scrolling: touch;
	overscroll-behavior-inline: contain;
}

<?php
if (getDolGlobalInt('THEME_DARKMODEENABLED')) {
	print "/* Brenda dark mode adjustments */\n";
	if (getDolGlobalInt('THEME_DARKMODEENABLED') != 2) {
		print "@media (prefers-color-scheme: dark) {";
	} else {
		print "@media not print {";
	}
	print "
		:root {
			--brenda-accent: rgb(45, 212, 191);
			--brenda-border: rgba(255, 255, 255, 0.15);
			--brenda-border-strong: rgba(255, 255, 255, 0.26);
			--brenda-focus: rgba(45, 212, 191, 0.28);
			--brenda-shadow: 0 2px 8px rgba(0, 0, 0, 0.34);
			--butactionbg: rgb(20, 145, 135);
			--textbutaction: rgb(255, 255, 255);
			--colortextlink: #5eead4;
			--colortexttitlelink: #5eead4;
			--colortextlink-h: 173;
			--colortextlink-s: 77%;
			--colortextlink-l: 64%;
		}
		.side-nav {
			box-shadow: 2px 0 8px rgba(0, 0, 0, 0.28);
		}
	}\n";
}
?>

/* ============================================================================== */
/* Tablet and mobile                                                              */
/* ============================================================================== */

@media only screen and (max-width: 768px) {
	body {
		min-width: 0;
	}

	#id-top {
		position: sticky;
		top: 0;
		z-index: 1200;
		min-height: 52px;
	}

	#id-container {
		display: block !important;
		table-layout: auto !important;
		width: 100%;
	}

	#id-right {
		display: block !important;
		box-sizing: border-box;
		width: 100% !important;
		min-width: 0;
		max-width: 100%;
		padding-top: 8px;
	}

	div.fiche {
		box-sizing: border-box;
		min-width: 0;
		margin-<?php echo $left; ?>: 12px !important;
		margin-<?php echo $right; ?>: 12px !important;
	}

	body:not(.sidebar-collapse)::after {
		content: "";
		position: fixed;
		z-index: 1080;
		inset: 52px 0 0;
		background: rgba(7, 22, 25, 0.42);
		pointer-events: none;
	}

	.side-nav {
		display: block !important;
		position: fixed !important;
		z-index: 1100;
		top: 52px !important;
		bottom: 0;
		<?php echo $left; ?>: 0;
		<?php echo $right; ?>: auto;
		box-sizing: border-box;
		width: var(--brenda-drawer-width);
		max-width: 86vw;
		padding: 122px 12px 16px;
		overflow-x: hidden;
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		background: var(--colorbackvmenu1) !important;
		border-<?php echo $right; ?>: 1px solid var(--brenda-border-strong);
		border-bottom: 0;
		box-shadow: var(--brenda-shadow);
		transform: translateX(0);
		visibility: visible;
		opacity: 1;
		transition: transform 0.22s ease, visibility 0.22s ease, opacity 0.22s ease;
	}

	body.sidebar-collapse .side-nav {
		display: block !important;
		transform: translateX(<?php echo $left == 'left' ? '-105%' : '105%'; ?>);
		visibility: hidden;
		opacity: 0;
		pointer-events: none;
	}

	#id-left {
		box-sizing: border-box;
		width: 100%;
		padding: 0 0 12px;
	}

	.vmenu,
	div.vmenu,
	.menu_titre,
	.menu_contenu,
	input.vmenusearchselectcombo[type="text"],
	.vmenusearchselectcombo {
		box-sizing: border-box;
		width: 100% !important;
		max-width: 100%;
	}

	div.login_block {
		display: grid !important;
		grid-template-columns: minmax(0, 1fr) auto;
		grid-template-areas: "user user" "tools other";
		align-items: center;
		position: fixed !important;
		z-index: 1101;
		top: 52px !important;
		<?php echo $left; ?>: 0 !important;
		<?php echo $right; ?>: auto !important;
		box-sizing: border-box;
		width: var(--brenda-drawer-width) !important;
		min-width: 0 !important;
		max-width: 86vw !important;
		height: 112px !important;
		padding: 8px 14px 10px !important;
		background: var(--colorbackvmenu1) !important;
		border-bottom: 1px solid var(--brenda-border);
		text-align: <?php echo $left; ?>;
		transform: translateX(0);
		visibility: visible;
		opacity: 1;
		transition: transform 0.22s ease, visibility 0.22s ease, opacity 0.22s ease;
	}

	body.sidebar-collapse div.login_block {
		display: grid !important;
		transform: translateX(<?php echo $left == 'left' ? '-105%' : '105%'; ?>);
		visibility: hidden;
		opacity: 0;
		pointer-events: none;
	}

	div.login_block_user {
		grid-area: user;
		box-sizing: border-box;
		width: 100%;
		height: 48px;
		line-height: 48px;
		text-align: <?php echo $left; ?>;
	}

	div.login_block_tools {
		grid-area: tools;
		height: 38px;
		margin: 0;
		line-height: 38px;
		text-align: <?php echo $left; ?>;
	}

	div.login_block_other {
		grid-area: other;
		max-width: 100%;
		text-align: <?php echo $right; ?>;
	}

	.login_block_elem {
		float: none;
		min-width: 38px;
		min-height: 38px;
	}

	.login_block_elem a {
		min-width: 38px;
		min-height: 38px;
	}

	div.login_block a,
	div.login_block span.aversion,
	.atoplogin,
	.atoplogin:hover {
		color: var(--colortextbackvmenu) !important;
	}

	.menuhider {
		min-width: 48px !important;
		min-height: 48px;
	}

	.menuhider .tmenucenter,
	.menuhider .mainmenu {
		box-sizing: border-box;
		width: 48px !important;
		min-width: 48px !important;
		min-height: 44px;
	}

	.menuhider .tmenuimage,
	.menuhider a.tmenuimage {
		min-height: 44px;
		touch-action: manipulation;
	}

	div.tabs {
		max-width: 100%;
		overflow-x: auto;
		overflow-y: hidden;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
		overscroll-behavior-inline: contain;
		scrollbar-width: thin;
	}

	div.tabsElem {
		display: inline-block;
	}

	div.tabsAction {
		display: flex;
		flex-wrap: wrap;
		gap: 8px;
		justify-content: flex-end;
		margin: 18px 0 28px;
	}

	div.tabsAction > a,
	div.tabsAction > span,
	div.tabsAction > .dropdown,
	div.tabsAction > .divButAction {
		margin: 0 !important;
	}

	input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]):not([type="image"]),
	select:not(.multiselectononeline),
	button:not(.cke_button):not(.tox-tbtn),
	.button:not(.buttonpayment),
	.buttonCancel:not(.buttonpayment),
	.buttonDelete:not(.buttonpayment) {
		min-height: 40px;
	}

	textarea:not(.cke_source) {
		min-height: 88px;
	}

	.select2-container {
		max-width: 100% !important;
	}

	.select2-container .select2-selection--single,
	.tableforfield .select2-container .select2-selection--single {
		height: 40px;
		min-height: 40px;
	}

	.select2-container--default .select2-selection--single .select2-selection__rendered,
	.select2-container--default .select2-selection--single .select2-selection__arrow {
		height: 38px;
		line-height: 38px;
	}

	.select2-container .select2-selection--multiple {
		min-height: 40px !important;
	}

	.select2-dropdown,
	.dropdown-menu,
	.ui-dialog {
		box-sizing: border-box;
		max-width: calc(100vw - 24px) !important;
	}

	.div-table-responsive,
	.div-table-responsive-no-min {
		width: 100%;
		max-width: 100%;
		overflow-x: auto;
		-webkit-overflow-scrolling: touch;
	}

	.tableforfield,
	.tableforfieldcreate,
	.tableforfieldedit,
	.flex-container,
	.display-flex {
		max-width: 100%;
	}

	.tableforfield td,
	.tableforfield .tagtd {
		overflow-wrap: anywhere;
	}

	input[type="file"],
	input#addedfile,
	.flex-item-uploadfile {
		box-sizing: border-box;
		max-width: 100%;
	}

	.flex-item-uploadfile {
		flex-basis: 100%;
		min-width: 0;
	}

	.ai_dropdown {
		box-sizing: border-box;
		width: calc(100vw - 24px) !important;
		max-width: calc(100vw - 24px) !important;
	}
}

@media only screen and (max-width: 570px) {
	div.fiche {
		margin-<?php echo $left; ?>: 8px !important;
		margin-<?php echo $right; ?>: 8px !important;
	}

	div.tabsAction {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		align-items: stretch;
		gap: 8px;
	}

	div.tabsAction > a,
	div.tabsAction > span,
	div.tabsAction > .dropdown,
	div.tabsAction > .divButAction,
	div.tabsAction > .divButAction > a,
	div.tabsAction > .divButAction > span,
	div.tabsAction > .dropdown > .dropdown-toggle {
		box-sizing: border-box;
		width: 100%;
		min-width: 0;
		margin: 0 !important;
	}

	div.tabsAction > .divButAction {
		display: flex;
	}

	div.tabsAction .butAction,
	div.tabsAction .butActionRefused,
	div.tabsAction .butActionDelete {
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 44px;
		padding: 8px 10px;
		white-space: normal !important;
		line-height: 1.25;
	}

	.liste_titre input,
	.liste_titre select,
	span.massactionselect,
	input.inputsearch_dropdownselectedfields,
	.navselectiondate {
		max-width: 100%;
	}
}

@media only screen and (max-width: 320px) {
	:root {
		--brenda-drawer-width: 92vw;
	}

	div.fiche {
		margin-<?php echo $left; ?>: 6px !important;
		margin-<?php echo $right; ?>: 6px !important;
	}

	div.tabsAction {
		grid-template-columns: minmax(0, 1fr);
	}

	.select2-dropdown,
	.dropdown-menu,
	.ui-dialog,
	.ai_dropdown {
		max-width: calc(100vw - 12px) !important;
	}
}

@media (prefers-reduced-motion: reduce) {
	.side-nav,
	.login_block,
	.butAction,
	#mainbody input.button,
	#mainbody a.button {
		transition: none !important;
	}
}
