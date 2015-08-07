<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2015 david63, překlad R3gi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	'SHOW_DISCLAIMER'			=> 'Zobrazovat panel odmítnutí odpovědnosti',
	'SHOW_DISCLAIMER_EXPLAIN'	=> 'Zobrazovat panel odmítnutí odpovědnosti v dolní části každé stránky.',
));

?>
