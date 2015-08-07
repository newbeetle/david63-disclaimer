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
	'DISCLAIMER'				=> 'Odmítnutí odpovědnosti',
	'DISCLAIMER_TEXT'			=> '<h3>Obecné odmítnutí odpovědnosti</h3>
	<p>Zobrazované komentáře a další obsah jsou soukromé a nemusí nezbytně reprezentovat názory správců  webu %1$s.<br /><br />Správci webu %1$s v žádném případě nenesou žádnou odpovědnost za jakékoliv rady, názory, doporučení či jakékoliv jiné informace a materiály poskytnuté jakýmkoliv členem či neregistrovaným návštěvníkem webu %1$s, které by mohly vést k jakýmkoliv škodám, finančním či jiným ztrátám, újmě na zdraví jakéhokoliv návštěvníka webu %1$s či jiné osoby nebo majetku.<br /><br />Správci webu %1$s rovněž nenesou žádnou odpovědnost za jakýkoliv obsah služeb třetích stran, na který web %1$s odkazuje.</p>',
));

?>
