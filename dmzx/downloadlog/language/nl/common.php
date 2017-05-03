<?php
/**
*
* @package phpBB Extension - Downloadlog
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DOWNLOADLOG_VIEW_LOG'				=> 'Bekijk logs',
	'DOWNLOADLOG_USERNAME'				=> 'Gebruikersnaam',
	'DOWNLOADLOG_DATE'					=> 'Datum van download',
	'DOWNLOADLOG_NOACCESS'				=> 'Je hebt geen toegang tot deze sectie',
	'DOWNLOADERS_LOG'					=> 'Downloaders Log',
	'DOWNLOADERS_COUNT'					=> '1 gebruiker',
	'DOWNLOADERS_COUNTS'				=> '%d gebruikers',
	'DOWNLOADERS_COPYRIGHT_DMZX'		=> '&copy; 2017 dmzx-web.net',
	'DOWNLOADERS_COPYRIGHT_DMZX_TITLE'	=> 'dmzx-web.net',
	'DOWNLOADERS_VERSION'				=> 'Extensie versie',
));
