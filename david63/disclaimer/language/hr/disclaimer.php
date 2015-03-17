<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
'DISCLAIMER'=>'Izjava o odricanju od odgovornosti',
'DISCLAIMER_TEXT'=>'<h3>Forumska izjava o odricanju od odgovornosti</h3>
<p>Mišljenja i komentari postani na ovom forumu osobne su naravi autora/ica postova i ne predstavljaju mišljenja “Uprave” %1$s.<br />“Uprava” %1$s nije, ne može i neće biti odgovorna za ikakve gubitke/štetu bilo koje vrste, a koji su nastali kao posljedica korištenja i/ili nemogućnosti korištenja %1$s odnosno uzimanja u obzir/postupanja po objavljenim postovima na %1$s pa čak niti u slučaju da je “Uprava” %1$s bila upozorena da do ikakvih gubitaka/štete može doći jednako kao što “Uprava” %1$s nije, ne može i neće biti odgovorna za ikakav postan(i) linkan(i) sadržaj s drugih stranica.</p>',
));
