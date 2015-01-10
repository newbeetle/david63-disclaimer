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
	'DISCLAIMER'				=> 'Aviso Legal',
	'DISCLAIMER_TEXT'			=> '<h3>Aviso Legal del Foro</h3>
	<p>Las opiniones y comentarios publicados en estos foros son personales y no representan necesariamente a la Administración de %1$s.<br /><br />La Administración de %1$s bajo ninguna circustancia, aceptará ninguna responsabilidad por ningún consejo, mensaje o recomendación, creado por ningún usuario o visitante de %1$s que cause cualquier problema en modo alguno a otro usuario de %1$s, o para cualquier otra persona.<br /><br />Por otra parte, la Administración de %1$s no es, y no puede ser, responsable del contenido de ningún sitio de Internet enlazado hacia %1$s.</p>',
));

?>