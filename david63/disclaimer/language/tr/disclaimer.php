<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
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
	'DISCLAIMER'				=> 'Sorumluluk Reddi',
	'DISCLAIMER_TEXT'			=> '<h3>Site Sorumluluk Reddi</h3>
	<p>Bu forumda yayınlanan görüş ve yorumlar tamamen kişisel görüşlerdir ve %1$s sitesi Yöneticilerinin görüşlerini yansıtmamaktadır.<br /><br /> %1$s site yönetimi sitedeki tavsiyeler, öneriler, yorumlar, %1$s sitesinin herhangi bir üye veya misafir ziyaretçinin yaptıklarından dolayı %1$s sitesinin herhangi bir üyesi veya herhangi bir başka kişinin kayba uğramasından sorumlu tutulamaz.<br /><br />Ayrıca %1$s site yöneticileri %1$s sitesinde bağlantı olarak verilen herhangi bir diğer İnternet Sitesi veya sitelerinin içeriklerinden sorumlu değildirler.</p>',
));

?>