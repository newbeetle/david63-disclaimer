<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2015 david63, překlad R3gi
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

$lang = array_merge($lang, array(
	'DISCLAIMER'				=> 'Odmítnutí odpovědnosti',
	'DISCLAIMER_TEXT'			=> '<h3>Obecné odmítnutí odpovědnosti</h3>
	<p>Zobrazované komentáře a další obsah jsou soukromé a nemusí nezbytně reprezentovat názory správců  webu %1$s.<br /><br />Správci webu %1$s v žádném případě nenesou žádnou odpovědnost za jakékoliv rady, názory, doporučení či jakékoliv jiné informace a materiály poskytnuté jakýmkoliv členem či neregistrovaným návštěvníkem webu %1$s, které by mohly vést k jakýmkoliv škodám, finančním či jiným ztrátám, újmě na zdraví jakéhokoliv návštěvníka webu %1$s či jiné osoby nebo majetku.<br /><br />Správci webu %1$s rovněž nenesou žádnou odpovědnost za jakýkoliv obsah služeb třetích stran, na který web %1$s odkazuje.</p>',
));

?>
